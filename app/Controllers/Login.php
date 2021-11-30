<?php

namespace App\Controllers;

class Login extends BaseController
{
    public function index()
    {

        $ModelAdmin = new \App\Models\ModelAdmin();
        $login = $this->request->getPost('login');
        if ($login) {
            $admin_username = $this->request->getPost('admin_username');
            $admin_password = $this->request->getPost('admin_password');

            if ($admin_username == '' or $admin_password == '') {
                $err = " Masukan Username dan Password";
            }
            if (empty($err)) {
                $dataAdmin = $ModelAdmin->where("admin_username", $admin_username)->first();
                if ($dataAdmin == '') {
                    $err = "Username salah";
                }
                else {
                    if ($dataAdmin['admin_password'] != md5($admin_password)) {
                    $err = "Password salah"; }
                } 
            }
            if (empty($err)) {
                $dataSesi = [
                    'admin_id' => $dataAdmin['admin_id'],
                    'admin_username' => $dataAdmin['admin_username'],
                    'admin_password' => $dataAdmin['admin_password'],
                ];
                session()->set($dataSesi);
                return redirect()->to(base_url('admin'));
            }
            if ($err) {
                session()->setFlashdata('admin_username', $admin_username);
                session()->setFlashdata('error', $err);
                return redirect()->to(base_url('login'));
            }
        }
        
        $data = [
            'title' => 'Login'
        ];
        echo view('layouts/header', $data);
        echo view('layouts/navbar');
        echo view('login_view');
        echo view('layouts/footer');
    }
    public function logout()
    {
        session()->destroy();
        return redirect()->to(base_url());
    }
}
