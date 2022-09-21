<?php

namespace App\Controllers;

use App\Models\PeminjamSertifikatModel;
use App\Models\SertifikatModel;
use \Hermawan\DataTables\DataTable;
use CodeIgniter\I18n\Time;
use SebastianBergmann\CodeUnit\FunctionUnit;

class PeminjamSertifikat extends BaseController
{
    protected $PeminjamSertifikatModel;
    public function __construct()
    {
        $this->PeminjamSertifikatModel = new PeminjamSertifikatModel();
        $this->SertifikatModel = new SertifikatModel();
    }

    public function index()
    {

        $getPeminjam = $this->PeminjamSertifikatModel->findAll();
        $resultPeminjam = $this->PeminjamSertifikatModel->get()->resultID->num_rows;

        $data = [
            'title' => 'Peminjam | Aplikasi Peminjaman Sertifikat',
            'results' => $resultPeminjam,
            'getPeminjam' => $getPeminjam,
            'page_title' => 'Dashboard Peminjam',
        ];

        return view('peminjam_sertifikat/index', $data);
    }

    public function listData()
    {
        if ($this->request->isAJAX()) {
            $db = db_connect();
            $builder = $db->table('data_peminjam_sertifikat')
                ->join('investasi', 'investasi.id = data_peminjam_sertifikat.id_sertifikat')
                ->select('id_peminjam_sertifikat, nama_lengkap, nik, investasi.intro, nama_petugas_pinjam, keperluan, nip_petugas_pinjam, tgl_pinjam, tgl_kembali, data_peminjam_sertifikat.status, data_peminjam_sertifikat.created_at')
                ->orderBy('data_peminjam_sertifikat.status', 'DESC');

            return DataTable::of($builder)
                ->add('action', function ($row) {
                    $urlDetail = site_url('/peminjamsertifikat/detail/' . $row->id_peminjam_sertifikat);
                    $urlCetak = site_url('/peminjamsertifikat/cetak/' . $row->id_peminjam_sertifikat);
                    $urlEdit = site_url('/peminjamsertifikat/edit/' . $row->id_peminjam_sertifikat);

                    if ($row->status == 'Dikembalikan') {
                        return
                        '<a href="' . $urlDetail . '"class="btn btn-outline-primary btn-shadow"><i class="fa fa-eye"></i></a>
                        <a href="' . $urlCetak . '" class="btn btn-outline-secondary btn-shadow"><i class="fa fa-print"></i></a>';
                    }
                    return
                        '<a href="' . $urlDetail . '"class="btn btn-outline-primary btn-shadow"><i class="fa fa-eye"></i></a> 
                        <a href="' . $urlEdit. '" class="btn btn-outline-warning btn-shadow"><i class="fa fa-pen"></i></a>
                        <a href="' . $urlCetak . '" class="btn btn-outline-secondary btn-shadow"><i class="fa fa-print"></i></a>';
                })
                ->toJson(true);
        }
    }
    public function create()
    {
        $getSertifikat = $this->SertifikatModel->findAll();
        $data = [
            'title' => 'Tambah Data Peminjam Sertifikat',
            'getSertifikat' => $getSertifikat,
            'page_title' => 'Tambah Data Peminjam Sertifikat',
            'validation' => \Config\Services::validation()
        ];
        return view('/peminjam_sertifikat/tambah_peminjam_serti', $data);
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
            'nomor_surat' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Nomor Surat Tanda Terima tidak boleh kosong!'
                ]
            ],
            'id_sertifikat' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Nama Objek tidak boleh kosong!'
                ]
            ],
            'keperluan' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Keperluan Peminjaman tidak boleh kosong!'
                ]
            ],
            'tgl_pinjam' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Tanggal Pinjam tidak boleh kosong',
                ]
            ],
        ])) {
            return redirect()->to('/peminjamsertifikat/create')->withInput();
        }
        //Ambil File Gambar
        $fotoKtp = $this->request->getFile('foto_ktp');

        //nama file
        $namaFoto = $fotoKtp->getRandomName();

        $data_peminjam_sertifikat = [
            'nama_lengkap' => $this->request->getVar('nama_lengkap'),
            'nik' => $this->request->getVar('nik'),
            'id_sertifikat' => $this->request->getVar('id_sertifikat'),
            'keperluan' => $this->request->getVar('keperluan'),
            'nama_petugas_pinjam' => $this->request->getVar('nama_petugas_pinjam'),
            'nip_petugas_pinjam' => $this->request->getVar('nip_petugas_pinjam'),
            'nomor_surat' => $this->request->getVar('nomor_surat'),
            'nama_petugas_kembali' => "-",
            'nip_petugas_kembali' => "-",
            'tgl_pinjam' => $this->request->getVar('tgl_pinjam'),
            'status' => "Pinjam"
        ];
        $data_gambar = [
            'nik' => $this->request->getVar('nik'),
            'link' => $namaFoto
        ];
        if ($this->PeminjamSertifikatModel->tambahData($data_peminjam_sertifikat, $data_gambar)) {
            $fotoKtp->move('foto_peminjam_sf/', $namaFoto);
        }


        return redirect()->to('/peminjamsertifikat/index');
    }

    public function detail($id)
    {
        $data = $this->PeminjamSertifikatModel->getDetail($id);
        $nik = $data['nik'];
        $getImg = $this->PeminjamSertifikatModel->getImg($nik);
        $data = [
            'title' => 'Detail Peminjaman',
            'page_title' => 'Detail Peminjaman',
            'peminjamsertifikat' => $data,
            'id_peminjam_sertifikat' => $nik,
            'getImg' => $getImg,
        ];
        return view('/peminjam_sertifikat/detail_peminjam_serti', $data);
    }

    public function edit($id)
    {

        $dataPeminjamSertifikat = $this->PeminjamSertifikatModel->find($id);

        $dataPeminjamSertifikat = [
            'title' => 'Pengembalian Sertifikat',
            'page_title' => 'Pengembalian Sertifikat',
            'peminjamsertifikat' => $dataPeminjamSertifikat,
            'validation' => \Config\Services::validation()


        ];

        return view('peminjam_sertifikat/edit_peminjam_serti', $dataPeminjamSertifikat);
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
            return redirect()->to('/peminjamsertifikat/edit/' . $id)->withInput();
        }
        $data_peminjam_sertifikat = [
            'nama_lengkap' => $this->request->getVar('nama_lengkap'),
            'nik' => $this->request->getVar('nik'),
            'keperluan' => $this->request->getVar('keperluan'),
            'nama_petugas_pinjam' => $this->request->getVar('nama_petugas_pinjam'),
            'nip_petugas_pinjam' => $this->request->getVar('nip_petugas_pinjam'),
            'nama_petugas_kembali' => $this->request->getVar('nama_petugas_kembali'),
            'nip_petugas_kembali' => $this->request->getVar('nip_petugas_kembali'),
            'nomor_surat' => $this->request->getVar('nomor_surat'),
            'tgl_kembali' => $this->request->getVar('tgl_kembali'),
            'id_sertifikat' => $this->request->getVar('id_sertifikat'),
            'status' => 'Dikembalikan'
        ];

        $this->PeminjamSertifikatModel->updateData($id, $data_peminjam_sertifikat);

        return redirect()->to('/peminjamsertifikat');
    }

    public function cetak($id)
    {
        $data = $this->PeminjamSertifikatModel->getDetail($id);

        $data = [
            'title' => 'Cetak',
            'page_title' => 'Cetak',
            'peminjamsertifikat' => $data,
        ];

        return view('peminjam_sertifikat/cetak', $data);
    }
}
