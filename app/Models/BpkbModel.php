<?php

namespace App\Models;

use CodeIgniter\Model;

class BpkbModel extends Model
{
    protected $table = 'data_bpkb';
    protected $primaryKey = 'id_bpkb';
    protected $useTimestamps = true;
    protected $dateformat = 'date';
    protected $allowedFields = ['nomor_registrasi', 'nama_pemilik', 'alamat', 'merk', 'tipe', 'model', 'tahun_pembuatan', 'isi_silinder', 'nomor_rangka', 'nomor_mesin', 'warna', 'bahan_bakar', 'warna_tnkb', 'tahun_registrasi', 'nomor_bpkb', 'kode_lokasi'];


    public function getBpkb()
    {
        return $this->db->table('data_bpkb')
            ->join('bpkb_bahan_bakar', 'bpkb_bahan_bakar.id_bahan_bakar = data_bpkb.bahan_bakar')
            ->join('bpkb_model_kendaraan', 'bpkb_model_kendaraan.id_model = data_bpkb.model')
            ->join('bpkb_warna_tnkb', 'bpkb_warna_tnkb.id_warna_tnkb = data_bpkb.warna_tnkb')
            ->where('isActive', 1)
            ->get();
    }

    public function getDetail($id)
    {
        return $this->db->table('data_bpkb')
            ->join('bpkb_bahan_bakar', 'bpkb_bahan_bakar.id_bahan_bakar = data_bpkb.bahan_bakar')
            ->join('bpkb_model_kendaraan', 'bpkb_model_kendaraan.id_model = data_bpkb.model')
            ->join('bpkb_warna_tnkb', 'bpkb_warna_tnkb.id_warna_tnkb = data_bpkb.warna_tnkb')
            ->where('id_bpkb', $id)
            ->select('id_bpkb, nomor_registrasi, nama_pemilik, alamat, merk, tipe, bpkb_model_kendaraan.model, tahun_pembuatan, isi_silinder, nomor_rangka, nomor_mesin, warna, bpkb_bahan_bakar.bahan_bakar, bpkb_warna_tnkb.warna_tnkb, tahun_registrasi, nomor_bpkb, kode_lokasi')
            ->get()->getRowArray();
    }

    public function getModelKendaraan()
    {
        return $this->db->table('bpkb_model_kendaraan')->get()->getResultArray();
    }

    public function getBahanBakar()
    {
        return $this->db->table('bpkb_bahan_bakar')->get()->getResultArray();
    }

    public function getWarnaPlat()
    {
        return $this->db->table('bpkb_warna_tnkb')->get()->getResultArray();
    }

    public function getImg($no_bpkb)
    {
        return $this->db->table('bpkb_gambar')->where('nomor_bpkb', $no_bpkb)->get()->getResultArray();
    }

    public function tambahData($data_bpkb, $data_gambar)
    {
        $this->db->table('data_bpkb')->insert($data_bpkb);

        return $this->db->table('bpkb_gambar')->insert($data_gambar);
    }
}
