<?php

namespace App\Models;

use CodeIgniter\Model;

class M_brand extends Model
{
    
    protected $table                = 'merek_laptop';
    protected $primaryKey           = 'nama_merek';

    // Dates
    protected $useTimestamps        = true;
    

}