<?php
{
        return $this->db->table('data_bpkb')
            ->join('bpkb_bahan_bakar', 'bpkb_bahan_bakar.id_bahan_bakar = data_bpkb.bahan_bakar')
            ->join('bpkb_model_kendaraan', 'bpkb_model_kendaraan.id_model = data_bpkb.model')
            ->join('bpkb_warna_tnkb', 'bpkb_warna_tnkb.id_warna_tnkb = data_bpkb.warna_tnkb')
            ->get()->getResultArray();
    }