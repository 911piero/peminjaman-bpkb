<?php

namespace App\Controllers;

class Sertifikat extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Home Sertifikat | Aplikasi Digitalisasi',
            'page_title' => 'Home Sertifikat',
        ];

        return view('sertifikat/index', $data);
    }
}
