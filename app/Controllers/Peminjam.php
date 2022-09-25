<?php

namespace App\Controllers;

use App\Models\PeminjamModel;
use App\Models\BpkbModel;
use \Hermawan\DataTables\DataTable;
use CodeIgniter\I18n\Time;
use App\Models\CetakPengantarModel;

class Peminjam extends BaseController
{
    protected $PeminjamModel;
    public function __construct()
    {
        $this->CetakPengantarModel = new CetakPengantarModel();
        $this->PeminjamModel = new PeminjamModel();
        $this->BpkbModel = new BpkbModel();
    }

    public function index()
    {

        $getPeminjam = $this->PeminjamModel->findAll();
        $resultPeminjam = $this->PeminjamModel->where('status', 'Pinjam')->get()->resultID->num_rows;

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
                ->select('id_peminjam, nama_lengkap, nik, data_bpkb.nomor_registrasi, nama_petugas_pinjam, nip_petugas_pinjam, nama_petugas_kembali, nip_petugas_kembali, tgl_pinjam, estimasi_kembali, data_peminjam.status, data_peminjam.created_at')
                ->orderBy('data_peminjam.created_at', 'DESC');

            return DataTable::of($builder)
                ->add('action', function ($row) {
                    $urlDetail = site_url('/peminjam/detail/' . $row->id_peminjam);
                    $urlEdit = site_url('/peminjam/edit/' . $row->id_peminjam);
                    $urlCetak = site_url('/peminjam/cetak/' . $row->id_peminjam);
                    $urlCetakPengantar = site_url('/peminjam/cetak_pengantar/' . $row->id_peminjam);

                    if ($row->status == 'Dikembalikan') {


                        return
                            '<a href="' . $urlDetail . '"  title="Detail" class="btn btn-primary btn-sm"><i class="fa fa-eye"></i></a> 
                            <a href="' . $urlCetak . '"  title="Cetak Surat Tanda Terima" class="btn btn-secondary btn-sm "><i class="fa fa-print"> </i> </a>
                            <a href="' . $urlCetakPengantar . '"title="Cetak Surat Pengantar" class="btn btn-link btn-sm "><i class="fa fa-print"> </i> Pengantar</a>';
                    }
                    return
                        '<a href="' . $urlDetail . '" title="Detail" class="btn btn-primary btn-sm"><i class="fa fa-eye"></i></a>
                        <a href="' . $urlEdit . '" title="Pengembalian" class="btn btn-warning btn-sm "><i class="fa fa-pen"></i></a>
                        <a href="' . $urlCetak . '" title="Cetak Surat Tanda Terima" class="btn btn-secondary btn-sm "><i class="fa fa-print" aria-hidden="true"></i></a>
                        <a href="' . $urlCetakPengantar . '"title="Cetak Surat Pengantar" class="btn btn-link btn-sm "><i class="fa fa-print"></i> Pengantar</i></a>';
                })
                ->toJson(true);
        }
    }

    public function listDataOverdate()
    {

        $today = date("Y/m/d");
        if ($this->request->isAJAX()) {
            $db = db_connect();
            $builder = $db->table('data_peminjam')
                ->join('data_bpkb', 'data_bpkb.id_bpkb = data_peminjam.id_bpkb')
                ->select('id_peminjam, nama_lengkap, nik, data_bpkb.nomor_registrasi, nama_petugas_pinjam, nip_petugas_pinjam, nama_petugas_kembali, nip_petugas_kembali, tgl_pinjam, estimasi_kembali, data_peminjam.status')
                ->where('estimasi_kembali <=', $today)
                ->where('data_peminjam.status = "Pinjam"');

            return DataTable::of($builder)
                ->add('action', function ($row) {
                    $url = site_url('/peminjam/detail/' . $row->id_peminjam);
                    return
                        '<a href="' . $url . '"  class="btn btn-outline-primary btn-shadow"><i class="fa fa-eye"></i></a> ';
                })
                ->toJson(true);
        }
    }

    public function create()
    {
        $findCond = ['status' => 'Tidak Dipinjam', 'isActive' => 1];

        $getBpkb = $this->BpkbModel->where($findCond)->findAll();
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
            'id_bpkb' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Nomor Registrasi Tidak Boleh Kosong'
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
            'tgl_pinjam' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Tanggal Pinjam tidak boleh kosong',
                ]
            ],
            'ket_lokasi' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Keterangan Lokasi tidak boleh kosong',
                ]
            ],
            'lokasi_kendaraan' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Lokasi Kendaraan tidak boleh kosong',
                ]
            ],
            'status_kendaraan' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Status Kendaraan tidak boleh kosong',
                ]
            ],

        ])) {
            return redirect()->to('/peminjam/create')->withInput();
        }

        //Ambil File Gambar
        $fotoKtp = $this->request->getFile('foto_ktp');

        //nama file
        $namaFoto = $fotoKtp->getRandomName();

        $est_kembali = Time::parse($this->request->getVar('tgl_pinjam'));
        $est_kembali = $est_kembali->addDays(14);

        $data_peminjam = [
            'nama_lengkap' => $this->request->getVar('nama_lengkap'),
            'nik' => $this->request->getVar('nik'),
            'id_bpkb' => $this->request->getVar('id_bpkb'),
            'nama_petugas_pinjam' => $this->request->getVar('nama_petugas_pinjam'),
            'nip_petugas_pinjam' => $this->request->getVar('nip_petugas_pinjam'),
            'nomor_surat' => $this->request->getVar('nomor_surat'),
            'nama_petugas_kembali' => "-",
            'nip_petugas_kembali' => "-",
            'tgl_pinjam' => $this->request->getVar('tgl_pinjam'),
            'estimasi_kembali' => $est_kembali,
            'ket_lokasi' => $this->request->getVar('ket_lokasi'),
            'lokasi_kendaraan' => $this->request->getVar('lokasi_kendaraan'),
            'status_kendaraan' => $this->request->getVar('status_kendaraan'),
            'status' => "Pinjam"
        ];

        $data_gambar = [
            'nik' => $this->request->getVar('nik'),
            'link' => $namaFoto
        ];

        if ($this->PeminjamModel->tambahData($data_peminjam, $data_gambar)) {
            //memindahkan file
            $fotoKtp->move('foto_peminjam/', $namaFoto);
        }

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
            'nomor_surat' => $this->request->getVar('nomor_surat'),
            'tgl_kembali' => $this->request->getVar('tgl_kembali'),
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

    public function cetak($id)
    {

        $data = $this->PeminjamModel->getDetail($id);


        $data = [

            'title' => 'Cetak',
            'page_title' => 'Cetak',
            'peminjam' => $data,
        ];

        return view('peminjam_bpkb/cetak', $data);
    }
    public function cetak_pengantar($id)
    {

        $data = $this->PeminjamModel->getDetail($id);
        $getPengantar = $this->CetakPengantarModel->findAll();

        $data = [
            'id_peminjam' => $id,
            'title' => 'Cetak Pengantar BPKB',
            'page_title' => 'Cetak Pengantar BPKB',
            'getPengantar' => $getPengantar,
            'validation' => \Config\Services::validation()
        ];

        return view('/peminjam_bpkb/cetak_pengantar', $data);
    }

    public function print_pengantar($id)
    {
        if (!$this->validate([
            'pejabat' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Pejabat tidak boleh kosong!'
                ]
            ],
            'radioPengantar' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Tahun Surat tidak boleh kosong!'
                ]
            ],
        ])) {
            return redirect()->to('/peminjam/cetak_pengantar/' . $id)->withInput();
        }

        // check condition jika kosong return ke peminjam
        if ($this->request->getVar('id_cetak') == null) {
            return redirect()->to('/peminjam');
        }

        $data_pejabat = [
            'id_pengantar' => $this->request->getVar('pejabat'),
            'tahun_pengantar' => $this->request->getVar('radioPengantar'),
            'id_cetak' => $this->request->getVar('id_cetak')

        ];

        $data = [
            'peminjam' => $this->PeminjamModel->getDetail($data_pejabat['id_cetak']),
            'pejabat' =>  $this->CetakPengantarModel->findPejabat($data_pejabat['id_pengantar']),
            'tanggal' => date('Y-m-d')
        ];

        if ($data_pejabat['tahun_pengantar'] == 1) {
            // view pengantar 1 tahun
            return view('peminjam_bpkb/print_pengantar_1', $data);
        } else if ($data_pejabat['tahun_pengantar'] == 5) {
            // view pengantar 5 tahun
            return view('peminjam_bpkb/print_pengantar_5', $data);
        }
    }
}
