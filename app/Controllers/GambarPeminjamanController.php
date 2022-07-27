<?php

namespace App\Controllers;

use App\Models\GambarPeminjamanModel;


class GambarPeminjamanController extends BaseController
{
    protected $GambarPeminjamanModel;
    public function __construct()
    {
        $this->GambarPeminjamanModel = new GambarPeminjamanModel();
    }

    public function save()
    {
        $gambar = new GambarPeminjamanModel();
        $fotoPeminjaman = $this->request->getFile('foto_peminjam');
        $namaFoto = $fotoPeminjaman->getRandomName();
        $gambar->insert([
            'nik' => $this->request->getPost('nik'),
            'link' => $namaFoto,
        ]);
        $fotoPeminjaman->move('foto_peminjam/', $namaFoto);
        return redirect()->to($_SERVER['HTTP_REFERER']);
    }

    public function delete($id)
    {
        $this->GambarPeminjamanModel->delete($id);
        return redirect()->to($_SERVER['HTTP_REFERER']);;
    }

}
