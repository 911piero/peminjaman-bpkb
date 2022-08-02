<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Main Menu | Aplikasi Digitalisasi',
            'page_title' => 'Dashboard BPKB',
        ];

        return view('home', $data);
    }
}
