<?php

namespace App\Controllers;
use App\Models\M_laptop;
class spesifikasi extends BaseController
{   
    protected $M_laptop;
    public function __construct()
    {
        $this->M_laptop = new M_laptop();
    }
    public function index()
    {
        $laptop = $this->M_laptop->findAll();
        $data =[
            'laptop' => $laptop,
            'title' => 'home'
        ];
        
        echo view('layouts/header', $data);
        echo view('layouts/navbar');
        echo view('v_home',$data);
        echo view('layouts/footer');

    }
}
