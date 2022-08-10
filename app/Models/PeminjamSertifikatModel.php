<?php

namespace App\Models;

use CodeIgniter\Model;

class PeminjamSertifikatModel extends Model
{
    protected $table = 'data_peminjam_sertifikat';
    protected $primaryKey = 'id_peminjam_sertifikat';
    protected $useTimestamps = true;
    protected $dateformat = 'date';
    protected $allowedFields = ['nama_lengkap', 'nik', 'id_sertifikat', 'nama_petugas_pinjam', 'nip_petugas_pinjam', 'nama_petugas_kembali', 'nip_petugas_kembali', 'tgl_pinjam', 'tgl_kembali', 'estimasi_kembali', 'status'];

    public function tambahData($data_peminjam_sertifikat)
    {
        return $this->db->table('data_peminjam_sertifikat')->insert($data_peminjam_sertifikat);
    }
}
