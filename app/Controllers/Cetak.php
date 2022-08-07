<?php

namespace App\Controllers;

class Cetak extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Cetak',
            'page_title' => 'Cetak',
        ];

        return view('peminjaman_bpkb/cetak', $data);
    }
}
