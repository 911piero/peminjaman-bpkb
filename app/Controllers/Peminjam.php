<?php

namespace App\Controllers;

use App\Models\PeminjamModel;
use App\Models\BpkbModel;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use \Hermawan\DataTables\DataTable;

class Peminjam extends BaseController
{
    protected $PeminjamModel;
    public function __construct()
    {
        $this->PeminjamModel = new PeminjamModel();
        $this->BpkbModel = new BpkbModel();
    }

    public function index()
    {

        $getPeminjam = $this->PeminjamModel->findAll();
        $resultPeminjam = $this->PeminjamModel->get()->resultID->num_rows;

        $data = [
            'title' => 'Peminjam | Aplikasi Peminjaman BPKB',
            'results' => $resultPeminjam,
            'getPeminjam' => $getPeminjam,
            'page_title' => 'Dashboard Peminjam',
        ];



        return view('peminjam_bpkb/index', $data);
    }

    public function listData()
    {
        if ($this->request->isAJAX()) {
            $db = db_connect();
            $builder = $db->table('data_peminjam')
                ->join('data_bpkb', 'data_bpkb.id_bpkb = data_peminjam.id_bpkb')
                ->select('id_peminjam, nama_lengkap, nik, data_bpkb.nomor_registrasi, nama_petugas_pinjam, nip_petugas_pinjam, nama_petugas_kembali, nip_petugas_kembali, tgl_pinjam, tgl_kembali, data_peminjam.status');

            return DataTable::of($builder)
                ->add('action', function ($row) {
                    return
                        '<a href="/peminjam/detail/' . $row->id_peminjam . '" class="badge badge-primary">DETAILS</a> 
                <a href="/peminjam/edit/' . $row->id_peminjam . '" class="badge badge-warning">UPDATE</a>
                 <a href="/peminjam/delete/' . $row->id_peminjam . '" class="badge badge-danger" onclick="return confirm(\'Are you sure ?\')">HAPUS</a>';
                })
                ->toJson(true);
        }
    }

    public function create()
    {
        $getBpkb = $this->BpkbModel->where('status', 'Tidak Dipinjam')->findAll();
        $getModelKendaraan = $this->BpkbModel->getModelKendaraan();

        $data = [
            'title' => 'Tambah Data Peminjam BPKB',
            'page_title' => 'Tambah Data Peminjam BPKB',
            'getBpkb' => $getBpkb,
            'model' => $getModelKendaraan,
            'validation' => \Config\Services::validation()
        ];

        return view('peminjam_bpkb/tambah_peminjam', $data);
    }


    public function save()
    {
        if (!$this->validate([
            'nama_lengkap' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Nama Pemilik tidak boleh kosong!'
                ]
            ],
            'nik' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'NIK tidak boleh kosong!'
                ]
            ],
            'nama_petugas_pinjam' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Nama Petugas tidak boleh kosong!'
                ]
            ],
            'nip_petugas_pinjam' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'NIP Petugas tidak boleh kosong!'
                ]
            ],
            'tgl_pinjam' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Tanggal Pinjam tidak boleh kosong',
                ]
            ],
            'tgl_kembali' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Tanggal Kembali tidak boleh kosong',
                ]
            ],

        ])) {
            return redirect()->to('/peminjam/create')->withInput();
        }

        //Ambil File Gambar
        $fotoKtp = $this->request->getFile('foto_ktp');

        //nama file
        $namaFoto = $fotoKtp->getRandomName();

        //memindahkan file
        $fotoKtp->move('foto_peminjam/', $namaFoto);

        $data_peminjam = [
            'nama_lengkap' => $this->request->getVar('nama_lengkap'),
            'nik' => $this->request->getVar('nik'),
            'id_bpkb' => $this->request->getVar('id_bpkb'),
            'nama_petugas_pinjam' => $this->request->getVar('nama_petugas_pinjam'),
            'nip_petugas_pinjam' => $this->request->getVar('nip_petugas_pinjam'),
            'nama_petugas_kembali' => "-",
            'nip_petugas_kembali' => "-",
            'tgl_pinjam' => $this->request->getVar('tgl_pinjam'),
            'tgl_kembali' => $this->request->getVar('tgl_kembali'),
            'status' => "Pinjam"
        ];

        $data_gambar = [
            'nik' => $this->request->getVar('nik'),
            'link' => $namaFoto
        ];

        $this->PeminjamModel->tambahData($data_peminjam, $data_gambar);
        return redirect()->to('/peminjam');
    }

    public function edit($id)
    {
        $dataPeminjam = $this->PeminjamModel->find($id);

        $dataPeminjam = [
            'title' => 'Pengembalian BPKB',
            'page_title' => 'Pengembalian BPKB',
            'peminjam' => $dataPeminjam,
            'validation' => \Config\Services::validation()

        ];

        return view('peminjam_bpkb/edit_peminjam', $dataPeminjam);
    }



    public function update($id)
    {
        if (!$this->validate([
            'nama_petugas_kembali' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Nama Petugas tidak boleh kosong!'
                ]
            ],
            'nip_petugas_kembali' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'NIP Petugas tidak boleh kosong!'
                ]
            ]
        ])) {
            return redirect()->to('/peminjam/edit/' . $id)->withInput();
        }
        $data_peminjam = [
            'nama_lengkap' => $this->request->getVar('nama_lengkap'),
            'nik' => $this->request->getVar('nik'),
            'nama_petugas_pinjam' => $this->request->getVar('nama_petugas_pinjam'),
            'nip_petugas_pinjam' => $this->request->getVar('nip_petugas_pinjam'),
            'nama_petugas_kembali' => $this->request->getVar('nama_petugas_kembali'),
            'nip_petugas_kembali' => $this->request->getVar('nip_petugas_kembali'),
            'id_bpkb' => $this->request->getVar('id_bpkb'),
            'status' => 'Dikembalikan'
        ];

        $this->PeminjamModel->updateData($id, $data_peminjam);

        return redirect()->to('/peminjam');
    }

    public function delete($id)
    {
        $this->PeminjamModel->delete($id);
        return redirect()->to('/peminjam');
    }

    public function detail($id)
    {
        $data = $this->PeminjamModel->getDetail($id);

        // $data = $this->PeminjamModel->find($id);
        $nik = $data['nik'];
        $getImg = $this->PeminjamModel->getImg($nik);
        $data = [
            'title' => 'Detail Peminjaman',
            'page_title' => 'Detail Peminjaman',
            'peminjam' => $data,
            'id_peminjam' => $nik,
            'getImg' => $getImg,
        ];
        return view('/peminjam_bpkb/detail_peminjam', $data);
    }
}
