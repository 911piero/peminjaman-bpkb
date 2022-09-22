<?php

namespace App\Controllers;

use App\Models\GambarModel;
use PhpOffice\PhpSpreadsheet\Reader\Xml\Style;

class GambarController extends BaseController
{
    protected $GambarModel;
    public function __construct()
    {
        $this->GambarModel = new GambarModel();
    }

    public function save()
    {
        $gambar = new GambarModel();
        $fotoBpkb = $this->request->getFile('foto_bpkb');
        $namaFoto = $fotoBpkb->getRandomName();
        $gambar->insert([
            'link' => $namaFoto,
            'nomor_bpkb' => $this->request->getVar('nomor_bpkb'),
            'keterangan' => $this->request->getPost('keterangan')
        ]);
        $fotoBpkb->move('foto_bpkb/', $namaFoto);
        return redirect()->to($_SERVER['HTTP_REFERER']);
    }

    public function delete($id)
    {
        //cari gambar berdasarkan id
        $fotoBpkb = $this->GambarModel->find($id);

        unlink('foto_bpkb/' . $fotoBpkb['link']);

        $this->GambarModel->delete($id);
        session()->setFlashdata('pesan', 'Foto Telah Terhapus');
        return redirect()->to($_SERVER['HTTP_REFERER']);
    }
}
