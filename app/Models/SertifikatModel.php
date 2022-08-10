<?php

namespace App\Models;

use CodeIgniter\Model;

class SertifikatModel extends Model
{
    protected $table = 'investasi';
    protected $primaryKey = 'id';
    protected $useTimestamps = true;
    protected $dateformat = 'date';



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
}
