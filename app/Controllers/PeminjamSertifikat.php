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
                ->select('id_peminjam_sertifikat, nama_lengkap, nik, investasi.intro, nama_petugas_pinjam, nip_petugas_pinjam, tgl_pinjam, tgl_kembali, data_peminjam_sertifikat.status');

            return DataTable::of($builder)
                ->add('action', function ($row) {
                    return
                        '<a href="/peminjam/detail/' . $row->id_peminjam_sertifikat . '"class="btn btn-outline-primary btn-shadow"><i class="fa fa-eye"></i></a> 
                        <a href="/peminjam/edit/' . $row->id_peminjam_sertifikat . '" class="btn btn-outline-warning btn-shadow"><i class="fa fa-pen"></i></a>
                        <a href="/peminjam/delete/' . $row->id_peminjam_sertifikat . '" class="btn btn-outline-secondary btn-shadow"><i class="fa fa-print"></i></a>';
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
            'id_sertifikat' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Nama Objek tidak boleh kosong!'
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

        $data_peminjam_sertifikat = [
            'nama_lengkap' => $this->request->getVar('nama_lengkap'),
            'nik' => $this->request->getVar('nik'),
            'id_sertifikat' => $this->request->getVar('id_sertifikat'),
            'nama_petugas_pinjam' => $this->request->getVar('nama_petugas_pinjam'),
            'nip_petugas_pinjam' => $this->request->getVar('nip_petugas_pinjam'),
            'nama_petugas_kembali' => "-",
            'nip_petugas_kembali' => "-",
            'tgl_pinjam' => $this->request->getVar('tgl_pinjam'),
            'status' => "Pinjam"
        ];
        if ($this->PeminjamSertifikatModel->tambahData($data_peminjam_sertifikat))

            return redirect()->to('/peminjamsertifikat/index');
    }
}
