<?php

namespace App\Models;

use CodeIgniter\Model;

class GambarModel extends Model
{
    protected $table = 'bpkb_gambar';
    protected $useTimestamps = true;
    protected $primaryKey = 'id_gambar';
    protected $allowedFields = ['id_bpkb', 'nomor_bpkb', 'link'];

    public function getId($id_gambar)
    {
        return $this->db->table('bpkb_gambar')->where('bpkb_gambar' . $id_gambar)->get()->getResultArray();
    }

    public function getImg($no_bpkb)
    {
        return $this->db->table('bpkb_gambar')->where('nomor_bpkb', $no_bpkb)->get()->getResultArray();
    }

    public function tambahData($data_gambar)
    {

        return $this->db->table('bpkb_gambar')->insert($data_gambar);
    }
}
