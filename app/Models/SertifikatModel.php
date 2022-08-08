<?php

namespace App\Models;

use CodeIgniter\Model;

class SertifikatModel extends Model
{
    protected $table = 'investasi';
    protected $primaryKey = 'id';
    protected $useTimestamps = true;
    protected $dateformat = 'date';
}
