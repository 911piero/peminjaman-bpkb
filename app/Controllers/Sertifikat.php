<?php

namespace App\Controllers;

use App\Models\BpkbModel;
use App\Models\SertifikatModel;

use \Hermawan\DataTables\DataTable;

class Sertifikat extends BaseController
{
    public function __construct()
    {
        $this->SertifikatModel = new SertifikatModel();
    }

    public function index()
    {

        $kecamatan = $this->SertifikatModel->getKecamatan();
        $kelurahan = $this->SertifikatModel->getKelurahan();
        $kategori = $this->SertifikatModel->getKategori();
        $subKategori = $this->SertifikatModel->getSubKategori();
        $tahunObjek = $this->SertifikatModel->getTahunObjek();



        $data = [
            'title' => 'Home Sertifikat | Aplikasi Digitalisasi',
            'page_title' => 'Cari Sertifikat',
            'kecamatan' => $kecamatan,
            'kelurahan' => $kelurahan,
            'kategori' => $kategori,
            'subKategori' => $subKategori,
            'tahunObjek' => $tahunObjek,

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
                ->select('investasi.id, nama_proyek, intro, aktif, intro2, kecamatan.kecamatan, kelurahan.kelurahan, kategori.nm_kategori, lokasi, sub_kategori.nm_subkategori, tahun, tgl_awal, tgl_akhir');

            return DataTable::of($builder)
                ->add('status', function ($row) {
                    $status = $row->aktif;

                    if ($status == 1) {
                        $status = "Aktif";
                    } else if ($status == 0) {
                        $status = "Tidak Aktif";
                    }

                    return $status;
                })
                ->add('action', function ($row) {
                    return 
                    '<a href="/sertifikat/detail/' . $row->id . '"class="btn btn-outline-primary btn-shadow"><i class="fa fa-eye"></i></a>
                    <a href="/sertifikat/cetak/' .$row->id . '" class="btn btn-outline-secondary btn-shadow"><i class="fa fa-print"></i></a>';
                })

                ->filter(function ($builder, $request) {
                    if ($request->kecamatan) {
                        $builder->where('kecamatan', $request->kecamatan);
                    }
                    if ($request->tahun_objek) {
                        $builder->where('tahun', $request->tahun_objek);
                    }
                    if ($request->kelurahan) {
                        $builder->where('kelurahan', $request->kelurahan);
                    }
                    if ($request->kategori) {
                        $builder->where('nm_kategori', $request->kategori);
                    }
                    if ($request->sub_kategori) {
                        $builder->where('nm_subkategori', $request->sub_kategori);
                    }

                    if ($request->status) {
                        $status = $request->status;
                        if ($status == "Aktif") {
                            $status = 1;
                        }
                        if ($status == "Tidak Aktif") {
                            $status = 0;
                        }
                        $builder->where('aktif', $status);
                    }
                })
                ->toJson(true);
        }
    }

    
    public function cetak($id)
    {
        $data = $this->SertifikatModel->getDetail($id);

        $data = [
            'title' => 'Cetak',
            'page_title' => 'Cetak',
            'peminjam' => $data,
        ];

        return view('sertifikat/cetak_sf', $data);
    }

    public function detail($id)
    {
        $data = $this->SertifikatModel->getDetail($id);
        $data = [
            'title' => 'Detail BPKB',
            'page_title' => 'Detail Sertifikat',
            'sertifikat' => $data,
            'validation' => \Config\Services::validation()
        ];
        return view('sertifikat/detail_sf', $data);
    }
}
