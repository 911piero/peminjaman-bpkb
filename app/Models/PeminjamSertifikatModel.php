<?php

namespace App\Models;

use CodeIgniter\Model;

class PeminjamSertifikatModel extends Model
{
    protected $table = 'data_peminjam_sertifikat';
    protected $primaryKey = 'id_peminjam_sertifikat';
    protected $useTimestamps = true;
    protected $dateformat = 'date';
    protected $allowedFields = ['nama_lengkap', 'nik', 'id_sertifikat', 'nama_petugas_pinjam', 'nip_petugas_pinjam', 'nama_petugas_kembali', 'nip_petugas_kembali', 'tgl_pinjam', 'tgl_kembali', 'status'];

    public function tambahData($data_peminjam_sertifikat)
    {
        return $this->db->table('data_peminjam_sertifikat')->insert($data_peminjam_sertifikat);
    }

    public function getDetail($id)
    {
        return $this->db
            ->table('data_peminjam_sertifikat')
            ->join('investasi', 'investasi.id = data_peminjam_sertifikat.id_sertifikat')
            ->join('kategori', 'kategori.id_kategori = investasi.id_kategori')
            ->join('kecamatan', 'kecamatan.id = investasi.id_kecamatan')
            ->join('kelurahan', 'kelurahan.id = investasi.id_kelurahan')
            ->join('sub_kategori', 'sub_kategori.id_subkategori = investasi.lokasi')
            ->select('id_peminjam_sertifikat, nama_lengkap, nik, investasi.intro, kecamatan.kecamatan, kelurahan.kelurahan, kategori.nm_kategori, lokasi, sub_kategori.nm_subkategori, nama_petugas_pinjam, nip_petugas_pinjam, nama_petugas_kembali,nip_petugas_kembali, tgl_pinjam, tgl_kembali, data_peminjam_sertifikat.status')
            ->where('id_peminjam_sertifikat', $id)
            ->get()->getRowArray();
    }
}
