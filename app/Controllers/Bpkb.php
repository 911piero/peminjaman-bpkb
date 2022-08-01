<?php

namespace App\Controllers;

use App\Models\BpkbModel;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

use \Hermawan\DataTables\DataTable;

class Bpkb extends BaseController
{
    protected $BpkbModel;

    public function __construct()
    {
        $this->BpkbModel = new BpkbModel();
    }


    public function index()
    {

        $getBpkb = $this->BpkbModel->getBpkb();
        $resultBpkb = $this->BpkbModel->getBpkb()->resultID->num_rows;

        $data = [
            'title' => 'Home | Aplikasi Peminjaman BPKB',
            'results' => $resultBpkb,
            'getBpkb' => $getBpkb,
            'page_title' => 'Dashboard BPKB',
        ];

        return view('master_bpkb/index', $data);
    }

    public function listData()
    {
        if ($this->request->isAJAX()) {
            $db = db_connect();
            $builder = $db->table('data_bpkb')
                ->join('bpkb_model_kendaraan', 'bpkb_model_kendaraan.id_model = data_bpkb.model')
                ->select('id_bpkb, nomor_registrasi, merk, nama_pemilik, bpkb_model_kendaraan.model, warna, status')
                ->where('isActive', 1);

            return DataTable::of($builder)
                ->add('action', function ($row) {
                    return '<a href="/bpkb/detail/' . $row->id_bpkb . '" class="btn-sm btn-primary">DETAILS</a>';
                })
                ->toJson(true);
        }
    }

    public function detail($id)
    {

        $data = $this->BpkbModel->getDetail($id);

        $no_bpkb = $data['nomor_bpkb'];
        $getImg = $this->BpkbModel->getImg($no_bpkb);
        $data = [
            'title' => 'Detail BPKB',
            'page_title' => 'Detail BPKB',
            'bpkb' => $data,
            'getImg' => $getImg,
            'validation' => \Config\Services::validation()
        ];
        return view('master_bpkb/detail_bpkb', $data);
    }

    public function create()
    {
        $getModelKendaraan = $this->BpkbModel->getModelKendaraan();
        $getBahanBakar = $this->BpkbModel->getBahanBakar();
        $getWarnaPlat = $this->BpkbModel->getWarnaPlat();

        $data = [
            'title' => 'Tambah Data BPKB',
            'page_title' => 'Tambah Data BPKB',
            'model' => $getModelKendaraan,
            'bahan_bakar' => $getBahanBakar,
            'warna_tnkb' => $getWarnaPlat,
            'validation' => \Config\Services::validation()
        ];

        return view('master_bpkb/tambah_bpkb', $data);
    }
    public function save()
    {
        //validasi input
        if (!$this->validate([
            'nomor_regist' => [
                'rules' => 'required|is_unique[data_bpkb.nomor_registrasi]',
                'errors' => [
                    'required' => 'Nomor Registrasi tidak boleh kosong!',
                    'is_unique' => 'Nomor Registrasi sudah terdaftar',
                ]
            ],
            'nama_pem' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Nama Pemilik tidak boleh kosong!'
                ]
            ],
            'alamat' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Nama Pemilik tidak boleh kosong!'
                ]
            ],
            'merk' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Nama Pemilik tidak boleh kosong!'
                ]
            ],
            'tipe' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Nama Pemilik tidak boleh kosong!'
                ]
            ],
            'model' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Model Kendaraan tidak boleh kosong!'
                ]
            ],
            'tahun_pembuatan' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Tahun Pembuatan tidak boleh kosong!'
                ]
            ],
            'isi_silinder' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Isi Silinder tidak boleh kosong!'
                ]
            ],
            'nomor_rangka' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Nomor Rangka tidak boleh kosong!'
                ]
            ],
            'nomor_mesin' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Nomor Mesin tidak boleh kosong!'
                ]
            ],
            'warna' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Warna Kendaraan tidak boleh kosong!'
                ]
            ],
            'bahan_bakar' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Bahan Bakar tidak boleh kosong!'
                ]
            ],
            'warna_plat' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Warna Plat tidak boleh kosong!'
                ]
            ],
            'tahun_regist' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Tahun Registrasi tidak boleh kosong!'
                ]
            ],
            'no_bpkb' => [
                'rules' => 'required|is_unique[data_bpkb.nomor_bpkb]',
                'errors' => [
                    'required' => 'Nomor BPKB tidak boleh kosong!',
                    'is_unique' => 'Nomor BPKB sudah terdaftar.'
                ]
            ],
            'kode_lokasi' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Kode Lokasi tidak boleh kosong!'
                ]
            ],
            'foto_bpkb' => [
                'rules' => 'mime_in[foto_bpkb,image/jpg,image/jpeg,image/png]|is_image[foto_bpkb]',
                'errors' => [
                    'mime_in' => 'Hanya file gambar yang diperbolehkan di upload',
                    'is_image' => 'Hanya file gambar yang diperbolehkan di upload'
                ]
            ]

        ])) {
            return redirect()->to('bpkb/create')->withInput();
        }

        //Ambil File Gambar
        $fotoBpkb = $this->request->getFile('foto_bpkb');

        //nama file
        $namaFoto = $fotoBpkb->getRandomName();

        //memindahkan file
        $fotoBpkb->move('foto_bpkb/', $namaFoto);

        $data_bpkb = array(
            'nomor_registrasi' => $this->request->getVar('nomor_regist'),
            'nama_pemilik' => $this->request->getVar('nama_pem'),
            'alamat' => $this->request->getVar('alamat'),
            'merk' => $this->request->getVar('merk'),
            'tipe' => $this->request->getVar('tipe'),
            'model' => $this->request->getVar('model'),
            'tahun_pembuatan' => $this->request->getVar('tahun_pembuatan'),
            'isi_silinder' => $this->request->getVar('isi_silinder'),
            'nomor_rangka' => $this->request->getVar('nomor_rangka'),
            'nomor_mesin' => $this->request->getVar('nomor_mesin'),
            'warna' => $this->request->getVar('warna'),
            'bahan_bakar' => $this->request->getVar('bahan_bakar'),
            'warna_tnkb' => $this->request->getVar('warna_plat'),
            'tahun_registrasi' => $this->request->getVar('tahun_regist'),
            'nomor_bpkb' => $this->request->getVar('no_bpkb'),
            'kode_lokasi' => $this->request->getVar('kode_lokasi'),
        );

        $data_gambar = array(
            'nomor_bpkb' => $this->request->getVar('no_bpkb'),
            'link' => $namaFoto
        );


        $this->BpkbModel->tambahData($data_bpkb, $data_gambar);

        return redirect()->to('/');
    }

    public function edit($id)
    {
        $dataBpkb = $this->BpkbModel->find($id);
        $getModelKendaraan = $this->BpkbModel->getModelKendaraan($id);
        $getBahanBakar = $this->BpkbModel->getBahanBakar();
        $getWarnaPlat = $this->BpkbModel->getWarnaPlat();

        $dataBpkb = [
            'title' => 'Ubah Data BPKB',
            'page_title' => 'Ubah Data BPKB',
            'bpkb' =>  $dataBpkb,
            'model' => $getModelKendaraan,
            'bahan_bakar' => $getBahanBakar,
            'warna_tnkb' => $getWarnaPlat,
            'validation' => \Config\Services::validation()

        ];

        return view('master_bpkb/edit_bpkb', $dataBpkb);
    }



    public function update($id)
    {
        if (!$this->validate([
            'nama_pem' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Nama Pemilik tidak boleh kosong!'
                ]
            ],
            'alamat' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Alamat tidak boleh kosong!'
                ]
            ],
            'merk' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Merk tidak boleh kosong!'
                ]
            ],
            'tipe' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Tipe tidak boleh kosong!'
                ]
            ],
            'model' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Model Kendaraan tidak boleh kosong!'
                ]
            ],
            'tahun_pembuatan' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Tahun Pembuatan tidak boleh kosong!'
                ]
            ],
            'isi_silinder' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Isi Silinder tidak boleh kosong!'
                ]
            ],
            'nomor_rangka' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Nomor Rangka tidak boleh kosong!'
                ]
            ],
            'nomor_mesin' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Nomor Mesin tidak boleh kosong!'
                ]
            ],
            'warna' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Warna Kendaraan tidak boleh kosong!'
                ]
            ],
            'bahan_bakar' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Bahan Bakar tidak boleh kosong!'
                ]
            ],
            'warna_plat' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Warna Plat tidak boleh kosong!'
                ]
            ],
            'tahun_regist' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Tahun Registrasi tidak boleh kosong!'
                ]
            ],
            'no_bpkb' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Nomor BPKB tidak boleh kosong!',
                    'is_unique' => 'Nomor BPKB sudah terdaftar.'
                ]
            ],
            'kode_lokasi' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Kode Lokasi tidak boleh kosong!'
                ]
            ],
        ])) {
            return redirect()->to('bpkb/edit/' . $id)->withInput();
        }

        $this->BpkbModel->update($id, [
            'nama_pemilik' => $this->request->getVar('nama_pem'),
            'alamat' => $this->request->getVar('alamat'),
            'merk' => $this->request->getVar('merk'),
            'tipe' => $this->request->getVar('tipe'),
            'model' => $this->request->getVar('model'),
            'tahun_pembuatan' => $this->request->getVar('tahun_pembuatan'),
            'isi_silinder' => $this->request->getVar('isi_silinder'),
            'nomor_rangka' => $this->request->getVar('nomor_rangka'),
            'nomor_mesin' => $this->request->getVar('nomor_mesin'),
            'warna' => $this->request->getVar('warna'),
            'bahan_bakar' => $this->request->getVar('bahan_bakar'),
            'warna_tnkb' => $this->request->getVar('warna_plat'),
            'tahun_registrasi' => $this->request->getVar('tahun_regist'),
            'nomor_bpkb' => $this->request->getVar('no_bpkb'),
            'kode_lokasi' => $this->request->getVar('kode_lokasi'),
        ]);

        return redirect()->to('/');
    }

    public function delete($id)
    {
        $this->BpkbModel->delete($id);
        return redirect()->to('/');
    }

    public function bpkbExport()
    {

        $getBpkb = $this->BpkbModel->getBpkb();

        $spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();
        $sheet->setCellValue('A1', 'Nomor Registrasi');
        $sheet->setCellValue('B1', 'Nama Pemilih');
        $sheet->setCellValue('C1', 'Alamat');
        $sheet->setCellValue('D1', 'Merk');
        $sheet->setCellValue('E1', 'Tipe Kendaraan');
        $sheet->setCellValue('F1', 'Model Kendaraan');
        $sheet->setCellValue('G1', 'Tahun Pembuatan');
        $sheet->setCellValue('H1', 'Isi Silinder');
        $sheet->setCellValue('I1', 'Nomor Rangka');
        $sheet->setCellValue('J1', 'Warna');
        $sheet->setCellValue('K1', 'Bahan Bakar');
        $sheet->setCellValue('L1', 'Warna TNKB');
        $sheet->setCellValue('M1', 'Tahun Registrasi');
        $sheet->setCellValue('N1', 'Nomor BPKB');
        $sheet->setCellValue('O1', 'Kode Lokasi');
        $sheet->setCellValue('P1', 'Status');

        $column = 2;

        foreach ($getBpkb as $data) {
            $sheet->setCellValue('A' . $column, $data['nomor_registrasi']);
            $sheet->setCellValue('B' . $column, $data['nama_pemilik']);
            $sheet->setCellValue('C' . $column, $data['alamat']);
            $sheet->setCellValue('D' . $column, $data['merk']);
            $sheet->setCellValue('E' . $column, $data['tipe']);
            $sheet->setCellValue('F' . $column, $data['model']);
            $sheet->setCellValue('G' . $column, $data['tahun_pembuatan']);
            $sheet->setCellValue('H' . $column, $data['isi_silinder']);
            $sheet->setCellValue('I' . $column, $data['nomor_rangka']);
            $sheet->setCellValue('J' . $column, $data['warna']);
            $sheet->setCellValue('K' . $column, $data['bahan_bakar']);
            $sheet->setCellValue('L' . $column, $data['warna_tnkb']);
            $sheet->setCellValue('M' . $column, $data['tahun_registrasi']);
            $sheet->setCellValue('N' . $column, $data['nomor_bpkb']);
            $sheet->setCellValue('O' . $column, $data['kode_lokasi']);
            $sheet->setCellValue('P' . $column, $data['status']);
            $column++;
        }

        //Nama File
        $writer = new Xlsx($spreadsheet);
        $fileName = 'Data BPKB';

        //Redirect ke Download
        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        header('Content-Disposition: attachment;filename=' . $fileName . '.xlsx');
        header('Cache-Control: max-age=0');

        $writer->save('php://output');
    }
}
