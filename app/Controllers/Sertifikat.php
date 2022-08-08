<?php

namespace App\Controllers;

use App\Models\BpkbModel;
use App\Models\SertifikatModel;

use \Hermawan\DataTables\DataTable;

class Sertifikat extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Home Sertifikat | Aplikasi Digitalisasi',
            'page_title' => 'Home Sertifikat',
        ];

        return view('sertifikat/index', $data);
    }

    public function listData()
    {
        if ($this->request->isAJAX()) {
            $db = db_connect();
            $builder = $db->table('investasi')
                ->join('kategori', 'kategori.id_kategori = investasi.id_kategori')
                ->join('kecamatan', 'kecamatan.id = investasi.id_kecamatan')
                ->join('kelurahan', 'kelurahan.id = investasi.id_kelurahan')
                ->join('sub_kategori', 'sub_kategori.id_subkategori = investasi.lokasi')
                ->select('investasi.id, nama_proyek, intro, intro2, kecamatan.kecamatan, kelurahan.kelurahan, kategori.nm_kategori, lokasi, sub_kategori.nm_subkategori, tahun, tgl_awal, tgl_akhir');

            return DataTable::of($builder)
                ->add('action', function ($row) {
                    return '<a href="/bpkb/detail/' . $row->id . '" class="btn-sm btn-primary">DETAILS</a>';
                })
                ->toJson(true);
        }
    }
}
