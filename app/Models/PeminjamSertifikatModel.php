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

    public function tambahData($data_peminjam_sertifikat, $data_gambar)
    {
        $this->db->table('data_peminjam_sertifikat')->insert($data_peminjam_sertifikat);

        return $this->db
            ->table('peminjam_gambar')
            ->insert($data_gambar);
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
            ->select('id_peminjam_sertifikat, nama_lengkap, nik, investasi.intro, investasi.nama_proyek, kecamatan.kecamatan, kelurahan.kelurahan, kategori.nm_kategori, lokasi, sub_kategori.nm_subkategori, keperluan, nama_petugas_pinjam, nip_petugas_pinjam, nama_petugas_kembali,nip_petugas_kembali, nomor_surat, tgl_pinjam, tgl_kembali, data_peminjam_sertifikat.status')
            ->where('id_peminjam_sertifikat', $id)
            ->get()->getRowArray();
    }

    public function updateData($id, $data_peminjam_sertifikat)
    {
        return $this->db
            ->table('data_peminjam_sertifikat')
            ->set([
                'nama_petugas_kembali' => $data_peminjam_sertifikat['nama_petugas_kembali'],
                'nip_petugas_kembali' => $data_peminjam_sertifikat['nip_petugas_kembali'],
                'tgl_kembali' => $data_peminjam_sertifikat['tgl_kembali'],
                'status' => $data_peminjam_sertifikat['status']
            ])
            ->where('id_peminjam_sertifikat', $id)
            ->update();
    }

    public function getImg($nik)
    {
        return $this->db
            ->table('peminjam_gambar')
            ->where('nik', $nik)
            ->get()
            ->getResultArray();
    }
}
