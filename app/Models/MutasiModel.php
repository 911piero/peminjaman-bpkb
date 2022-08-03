<?php

namespace App\Models;

use CodeIgniter\Model;

class MutasiModel extends Model
{
    protected $table = 'data_mutasi';
    protected $primaryKey = 'id_mutasi';
    protected $useTimestamps = true;
    protected $dateformat = 'date';
    protected $allowedFields = ['nomor_registrasi_lama', 'nomor_registrasi_baru', 'tgl_mutasi', 'jenis_mutasi'];


    public function perubahan_data($data_mutasi)
    {
        $this->db->table('data_mutasi')->insert($data_mutasi);

        return $this->db->table('data_bpkb')
            ->set('nomor_registrasi', $data_mutasi['nomor_registrasi_baru'])
            ->where('nomor_registrasi', $data_mutasi['nomor_registrasi_lama'])
            ->update();
    }
    public function getBpkb()
    {
        return $this->db->table('data_bpkb')
            ->join('bpkb_bahan_bakar', 'bpkb_bahan_bakar.id_bahan_bakar = data_bpkb.bahan_bakar')
            ->join('bpkb_model_kendaraan', 'bpkb_model_kendaraan.id_model = data_bpkb.model')
            ->join('bpkb_warna_tnkb', 'bpkb_warna_tnkb.id_warna_tnkb = data_bpkb.warna_tnkb')
            ->where('isActive', 1)
            ->get()->getResultArray();
    }

    public function penghapusan_data($data_mutasi)
    {
        $this->db->table('data_mutasi')->insert($data_mutasi);


        return $this->db->table('data_bpkb')
            ->set('isActive', 0)
            ->where('nomor_registrasi', $data_mutasi['nomor_registrasi_lama'])
            ->update();
    }

    public function findRegistrasi($no_reg)
    {
        return $this->db->table('data_bpkb')
            ->select('nomor_registrasi')
            ->where('nomor_registrasi', $no_reg)
            ->get()->getRowArray();
    }
}
