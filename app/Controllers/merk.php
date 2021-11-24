<?php

namespace App\Controllers;
use App\Models\M_laptop;
use App\Models\M_brand;
class merk extends BaseController
{   

    protected $M_laptop, $M_brand;
    public function __construct()
    {
        $this->M_laptop = new M_laptop();
        $this->M_brand = new M_brand();
    }
    public function asus()
    {   
        $laptop = $this->M_laptop->findAll();
        $merek =  $this->M_brand->findAll();
        $data =[
            'laptop' => $laptop,
            'merek' => $merek,
            'title' => "laptop - asus"
        ];
       
        echo view('layouts/header', $data);
        echo view('layouts/navbar');
        echo view('merk_laptop/asus');
        echo view('layouts/footer');
    } 
    public function acer()
    {
        $laptop = $this->M_laptop->findAll();
        $merek =  $this->M_brand->findAll();
        $data =[
            'laptop' => $laptop,
            'merek' => $merek,
            'title' => "laptop - acer"
        ];
        echo view('layouts/header', $data);
        echo view('layouts/navbar');
        echo view('merk_laptop/acer');
        echo view('layouts/footer');
    }
    public function lenovo()
    {
        $laptop = $this->M_laptop->findAll();
        $merek =  $this->M_brand->findAll();
        $data =[
            'laptop' => $laptop,
            'merek' => $merek,
            'title' => "laptop - lenovo"
        ];
        echo view('layouts/header', $data);
        echo view('layouts/navbar');
        echo view('merk_laptop/lenovo');
        echo view('layouts/footer');
    }
    public function xiaomi()
    {
        $laptop = $this->M_laptop->findAll();
        $merek =  $this->M_brand->findAll();
        $data =[
            'laptop' => $laptop,
            'merek' => $merek,
            'title' => "laptop - xiaomi"
        ];
        echo view('layouts/header', $data);
        echo view('layouts/navbar');
        echo view('merk_laptop/xiaomi');
        echo view('layouts/footer');
    }
}
