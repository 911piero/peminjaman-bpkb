<?php

namespace App\Models;

use CodeIgniter\Model;

class GambarPeminjamanModel extends Model
{
    protected $table = 'peminjam_gambar';
    protected $useTimestamps = true;
    protected $primaryKey = 'id_gambar';
    protected $allowedFields = ['nik', 'link'];

}
