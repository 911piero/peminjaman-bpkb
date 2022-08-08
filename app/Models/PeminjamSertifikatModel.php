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

    public function tambahData($data_peminjam_sertifikat, $data_gambar)
    {

        $this->db
            ->table('investasi')
            ->set('status', 'Dipinjam')
            ->where('id_sertifikat', $data_peminjam_sertifikat['id_sertifikat'])
            ->update();

        $this->db
            ->table('data_peminjam_sertifikat')
            ->insert($data_peminjam_sertifikat);

        return $this->db
            ->table('peminjam_gambar')
            ->insert($data_gambar);
    }

    public function updateData($id, $data_peminjam_sertifikat)
    {
        $this->db
            ->table('investasi')
            ->set('status', 'Tidak Dipinjam')
            ->where('id_sertifikat', $data_peminjam_sertifikat['id_sertifikat'])
            ->update();

        return $this->db
            ->table('investasi')
            ->set([
                'nama_petugas_kembali' => $data_peminjam_sertifikat['nama_petugas_kembali'],
                'nip_petugas_kembali' => $data_peminjam_sertifikat['nip_petugas_kembali'],
                'tgl_kembali' => $data_peminjam_sertifikat['tgl_kembali'],
                'status' => $data_peminjam_sertifikat['status']
            ])
            ->where('id_peminjam_sertifikat', $id)
            ->update();
    }

    public function getDetail($id)
    {
        return $this->db
            ->table('investasi')
            ->join('data_bpkb', 'data_bpkb.id_bpkb = data_peminjam.id_bpkb')
            ->select('nama_lengkap, nik, data_bpkb.id_bpkb, data_bpkb.nomor_registrasi, nama_petugas_pinjam, nip_petugas_pinjam, nama_petugas_kembali, nip_petugas_kembali, tgl_pinjam, tgl_kembali, data_peminjam.status , ket_lokasi, lokasi_kendaraan, status_kendaraan')
            ->where('id_peminjam', $id)
            ->get()->getRowArray();
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
