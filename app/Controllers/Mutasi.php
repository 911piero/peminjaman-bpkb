<?php

namespace App\Controllers;

use App\Models\BpkbModel;
use App\Models\MutasiModel;
use CodeIgniter\I18n\Time;

use \Hermawan\DataTables\DataTable;

class Mutasi extends BaseController
{

    public function __construct()
    {
        $this->BpkbModel = new BpkbModel();
        $this->MutasiModel = new MutasiModel();
    }

    public function index()
    {
        $data = [
            'title' => 'Mutasi | Aplikasi Peminjaman BPKB',
            'page_title' => 'Mutasi BPKB',
        ];

        return view('mutasi_bpkb/index', $data);
    }

    public function listData()
    {
        if ($this->request->isAJAX()) {
            $db = db_connect();
            $builder = $db->table('data_mutasi')
                ->select('nomor_registrasi_lama, nomor_registrasi_baru, tgl_mutasi, jenis_mutasi, created_at')
                ->orderBy('created_at', 'DESC');

            return DataTable::of($builder)
                ->toJson(true);
        }
    }

    public function create()
    {
        $getBpkb = $this->MutasiModel->getBpkb();
        $data = [
            'title' => 'Tambah Mutasi Baru | Aplikasi Peminjaman BPKB',
            'page_title' => 'Tambah Mutasi BPKB',
            'getBpkb' => $getBpkb,
            'validation' => \Config\Services::validation()
        ];

        return view('mutasi_bpkb/tambah_mutasi', $data);
    }

    public function save()
    {


        $findNoReg = $this->MutasiModel->findRegistrasi($this->request->getVar('nomor_registrasi'));

        if (!$this->validate([
            'nomor_registrasi' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Nomor Registrasi tidak boleh kosong!',
                    'in_list' => 'Nomor Registrasi tidak terdaftar',
                ]
            ],
            'nomor_registrasi_baru' => [
                'rules' => 'is_unique[data_bpkb.nomor_registrasi]',
                'errors' => [
                    'is_unique' => 'Nomor Registrasi sudah terdaftar',
                ]
            ]
        ])) {
            return redirect()->to('mutasi/create')->withInput();
        }

        $jenis_mutasi = $this->request->getVar('jenis_mutasi');

        if ($jenis_mutasi == 0) {
            $data_mutasi = [
                'nomor_registrasi_lama' => $this->request->getVar('nomor_registrasi'),
                'nomor_registrasi_baru' => $this->request->getVar('nomor_registrasi_baru'),
                'tgl_mutasi' => Time::now(),
                'jenis_mutasi' => 'Perubahan Nomor Registrasi',
            ];

            $this->MutasiModel->perubahan_data($data_mutasi);
        } else if ($jenis_mutasi == 1) {
            $data_mutasi = [
                'nomor_registrasi_lama' => $this->request->getVar('nomor_registrasi'),
                'nomor_registrasi_baru' => "-",
                'tgl_mutasi' => Time::now(),
                'jenis_mutasi' => 'Penghapusan Nomor Registrasi',
            ];

            $this->MutasiModel->penghapusan_data($data_mutasi);
        }

        return redirect()->to('mutasi/index');
    }
}
