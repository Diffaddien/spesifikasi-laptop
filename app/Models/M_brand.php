<?php

namespace App\Models;

use CodeIgniter\Model;

class M_brand extends Model
{
    
    protected $table                = 'brand_laptop';
    protected $primaryKey           = 'nama_brand';

    // Dates
    protected $useTimestamps        = true;
    

}