<?php

namespace App\Controllers;

use App\Models\M_laptop;
use App\Models\M_brand;

class Crud extends BaseController
{
    protected $M_laptop;
    public function __construct()
    {
        $this->M_laptop = new M_laptop();
    }
    
    public function index()
    {
        $data['data']=$this->M_laptop->findAll();
        return view('v_coba', $data);
    }

    public function form_tambah(){
       
        $data = [
            'title' => 'Detail'
        ];

        echo view('layouts/header', $data);
        echo view('CRUD/tambah');
        echo view('layouts/footer');
    }

    public function form_ubah($kd){ //form tambah
        $laptop=$this->M_laptop->find($kd);
        $data = [
            'title' => 'Detail',
            'data' => $laptop
        ];

        echo view('layouts/header', $data);
        echo view('CRUD/update', $data);
        echo view('layouts/footer');
    }

    //proses Crud nya
    public function tambah(){
        $this->M_laptop->save([
            'laptop_id' => $this->request->getVar('laptop_id'),
            'model' => $this->request->getVar('model'),
            'brand' => $this->request->getVar('brand'),
            'processor' => $this->request->getVar('processor'),
            'gpu' => $this->request->getVar('gpu'),
            'ram' => $this->request->getVar('ram'),
            'disk' => $this->request->getVar('disk'),
            'layar' => $this->request->getVar('layar'),
            'baterai' => $this->request->getVar('baterai'),
            'gambar' => $this->request->getVar('gambar'),
        ]); 

        /* $this->M_laptop->insert($this->request->getPost()); */
        return redirect()->to(base_url('admin'));
    }

    public function ubah($kd){
        $this->M_laptop->update($kd,$this->request->getPost());
        return redirect()->to(base_url('admin'));
    }

    public function hapus($kd){
        $this->M_laptop->delete($kd);
        return redirect()->to(base_url('admin'));
    }

}
