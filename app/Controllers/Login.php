<?php

namespace App\Controllers;

class Login extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Halaman Login | Aplikasi Digitalisasi',
            'page_title' => 'Dashboard BPKB',
        ];

        return view('login', $data);
    }
}
