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
        $data = [
            'laptop' => $laptop,
            'merek' => $merek,
            'pilih' => "Asus",
            'title' => "Laptop - Asus"
        ];
       
        echo view('layouts/header', $data);
        echo view('layouts/navbar');
        echo view('v_home', $data);
        echo view('layouts/footer');
    } 
    public function acer()
    {
        $laptop = $this->M_laptop->findAll();
        $merek =  $this->M_brand->findAll();
        $data = [
            'laptop' => $laptop,
            'merek' => $merek,
            'pilih' => "Acer",
            'title' => "Laptop - Acer"
        ];
       
        echo view('layouts/header', $data);
        echo view('layouts/navbar');
        echo view('v_home', $data);
        echo view('layouts/footer');
    }
    public function lenovo()
    {
        $laptop = $this->M_laptop->findAll();
        $merek =  $this->M_brand->findAll();
        $data = [
            'laptop' => $laptop,
            'merek' => $merek,
            'pilih' => "Lenovo",
            'title' => "Laptop - Lenovo"
        ];
       
        echo view('layouts/header', $data);
        echo view('layouts/navbar');
        echo view('v_home', $data);
        echo view('layouts/footer');
    }
    public function xiaomi()
    {
        $laptop = $this->M_laptop->findAll();
        $merek =  $this->M_brand->findAll();
        $data = [
            'laptop' => $laptop,
            'merek' => $merek,
            'pilih' => "Xiaomi",
            'title' => "Laptop - Xiaomi"
        ];
       
        echo view('layouts/header', $data);
        echo view('layouts/navbar');
        echo view('v_home', $data);
        echo view('layouts/footer');
    }
}
