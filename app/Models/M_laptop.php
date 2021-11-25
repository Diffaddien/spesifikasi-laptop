<?php

namespace App\Models;

use CodeIgniter\Model;

class M_laptop extends Model
{
    
    protected $table                = 'spesifikasi';
    protected $primaryKey           = 'laptop_id';
    protected $allowedFields        = ['model','disk','brand','processor','gpu','ram','layar','baterai','gambar'];

    // Dates
    protected $useTimestamps        = true;
    

}