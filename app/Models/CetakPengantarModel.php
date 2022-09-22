<?php

namespace App\Models;

use CodeIgniter\Model;

class CetakPengantarModel extends Model
{
    protected $table = 'data_pejabat';
    protected $primaryKey = 'id_pengantar';
    protected $useTimestamps = true;
    protected $dateformat = 'date';
    protected $allowedFields = ['nama_pejabat', 'nip_pejabat', 'jabatan'];

    public function getPengantar()
    {
        return $this->db
            ->table('data_pejabat')
            ->get()->getResultArray();
    }
}
