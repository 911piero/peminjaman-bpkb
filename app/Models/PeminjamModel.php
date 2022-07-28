<?php

namespace App\Models;

use CodeIgniter\Model;

class PeminjamModel extends Model
{
    protected $table = 'data_peminjam';
    protected $primaryKey = 'id_peminjam';
    protected $useTimestamps = true;
    protected $dateformat = 'date';
    protected $allowedFields = ['nama_lengkap', 'nik', 'id_bpkb', 'nama_petugas_pinjam', 'nip_petugas_pinjam', 'nama_petugas_kembali', 'nip_petugas_kembali', 'lokasi_kendaraan', 'stastus_kendaraan', 'ket_lokasi', 'tgl_pinjam', 'tgl_kembali', 'status'];

    public function tambahData($data_peminjam, $data_gambar)
    {

        $this->db
            ->table('data_bpkb')
            ->set('status', 'Dipinjam')
            ->where('id_bpkb', $data_peminjam['id_bpkb'])
            ->update();

        $this->db
            ->table('data_peminjam')
            ->insert($data_peminjam);

        return $this->db
            ->table('peminjam_gambar')
            ->insert($data_gambar);
    }

    public function updateData($id, $data_peminjam)
    {
        $this->db
            ->table('data_bpkb')
            ->set('status', 'Tidak Dipinjam')
            ->where('id_bpkb', $data_peminjam['id_bpkb'])
            ->update();

        return $this->db
            ->table('data_peminjam')
            ->set([
                'nama_petugas_kembali' => $data_peminjam['nama_petugas_kembali'],
                'nip_petugas_kembali' => $data_peminjam['nip_petugas_kembali'],
                'status' => $data_peminjam['status']
            ])
            ->where('id_peminjam', $id)
            ->update();
    }

    public function getDetail($id)
    {
        return $this->db
            ->table('data_peminjam')
            ->join('data_bpkb', 'data_bpkb.id_bpkb = data_peminjam.id_bpkb')
            ->select('nama_lengkap, nik, data_bpkb.id_bpkb, data_bpkb.nomor_bpkb, nama_petugas_pinjam, nip_petugas_pinjam, nama_petugas_kembali, nip_petugas_kembali, tgl_pinjam, tgl_kembali, data_peminjam.status')
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
