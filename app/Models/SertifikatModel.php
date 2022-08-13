<?php

namespace App\Models;

use CodeIgniter\Model;

class SertifikatModel extends Model
{
    protected $table = 'investasi';
    protected $primaryKey = 'id';
    protected $useTimestamps = true;
    protected $dateformat = 'date';
    protected $allowedFields = ['nama_proyek', 'lokasi', 'intro', 'objective', 'gov_role', 'scope', 'impact', 'kesempatan_investasi', 'cost', 'kontak', 'luas_tanah', 'status_tanah', 'target_pasar', 'total_omzet', 'roi', 'irr', 'npv', 'pay_back', 'bentuk_kerjasama', 'raw_material', 'market', 'fasilitas_pemda', 'bentuk_invsestasi', 'status_proyek', 'id_kecamatan', 'id_kelurahan', 'userentry', 'tglentry', 'tahun', 'hapus', 'aktif', 'intro2', 'id_kategori', 'nm_kecamatan', 'nm_kelurahan', 'kategori', 'jenis_kategori', 'no_sk', 'tgl_awal', 'img1', 'img2', 'img3', 'img4', 'img5', 'img6', 'img7', 'img8', 'img9', 'img10', 'img11', 'img12', 'img13', 'img14', 'img15', 'tgl_akhir'];

    public function getKecamatan()
    {
        return $this->db->table('kecamatan')->get()->getResultArray();
    }
    public function getKelurahan()
    {
        return $this->db->table('kelurahan')->get()->getResultArray();
    }

    public function getKategori()
    {
        return $this->db->table('kategori')->get()->getResultArray();
    }

    public function getSubKategori()
    {
        return $this->db->table('sub_kategori')->get()->getResultArray();
    }

    public function getTahunObjek()
    {
        $tahun = ['2012', '2013', '2014', '2015', '2016', '2017', '2018', '2019', '2020', '2021', '2022'];

        return $tahun;
    }
    public function getDetail($id)
    {
        return $this->db
            ->table('investasi')
            ->join('kategori', 'kategori.id_kategori = investasi.id_kategori')
            ->join('kecamatan', 'kecamatan.id = investasi.id_kecamatan')
            ->join('kelurahan', 'kelurahan.id = investasi.id_kelurahan')
            ->join('sub_kategori', 'sub_kategori.id_subkategori = investasi.lokasi')
            ->where('investasi.id', $id)
            ->select('investasi.id, nama_proyek, intro, aktif, intro2, kecamatan.kecamatan, kelurahan.kelurahan, kategori.nm_kategori, lokasi, sub_kategori.nm_subkategori, tahun, tgl_awal, img1, img2, img3, img4, img5, img6, img7, img8, img9, img10, img11, img12, img13, img14, img15, tgl_akhir')
            ->get()
            ->getRowArray();
    }
}
