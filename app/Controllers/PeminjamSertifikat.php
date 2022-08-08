<?php

namespace App\Controllers;

class PeminjamSertifikat extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Home Sertifikat | Aplikasi Digitalisasi',
            'page_title' => 'Home Sertifikat',
        ];

        return view('peminjam_sertifikat/index', $data);
    }
}
