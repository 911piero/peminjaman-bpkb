<?php

namespace App\Controllers;

use App\Models\PeminjamSertifikatModel;
use App\Models\SertifikatModel;
use \Hermawan\DataTables\DataTable;
use CodeIgniter\I18n\Time;

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
                ->select('id_peminjam_sertifikat, nama_lengkap, nik, investasi.nama_proyek, nama_petugas_pinjam, nip_petugas_pinjam, nama_petugas_kembali, nip_petugas_kembali, tgl_pinjam, tgl_kembali, estimasi_kembali, data_peminjam_sertifikat.status');

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
}
