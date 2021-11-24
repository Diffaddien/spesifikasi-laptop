<?php

namespace App\Controllers;
use App\Models\M_laptop;
use App\Models\M_brand;
class spesifikasi extends BaseController
{   
    protected $M_laptop, $M_brand;
    public function __construct()
    {
        $this->M_laptop = new M_laptop();
        $this->M_brand = new M_brand();
    }
    public function index()
    {
        $laptop = $this->M_laptop->findAll();
        $merek =  $this->M_brand->findAll();
        $data =[
            'laptop' => $laptop,
            'merek' => $merek,
            'title' => 'home'
        ];
        
        echo view('layouts/header', $data);
        echo view('layouts/navbar');
        echo view('v_home',$data);
        echo view('layouts/footer');

    }
}
