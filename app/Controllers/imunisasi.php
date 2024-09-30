<?php
namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\Imunisasi_model;

class Imunisasi extends Controller
{
    public function index()
    {
        $model = new Imunisasi_model;
        $data['title']  = 'Data Imunisasi';
        $data['getImunisasi'] = $model->getAnak();
        echo view('header_view', $data);
        echo view('imunisasi_view', $data);
    }

    public function edit($id)
    {
        $model = new Imunisasi_model;
        $getImunisasi = $model->getAnak($id)->getRow();
        if(isset($getImunisasi))
        {
            $data['anak'] = $getImunisasi;
            $data['title']  = 'Edit '.$getImunisasi->nama_anak;
            echo view('header_view', $data);
            echo view('tambahimunisasi_view', $data);
        }else{
            echo '<script>
                    alert("ID Anak '.$id.' Tidak ditemukan");
                    window.location="'.base_url('Imunisasi').'"
                </script>';
        }
    }

    public function update()
    {
        $model = new Imunisasi_model;
        $id = $this->request->getPost('id_anak');
        $data = array(
            'nama_anak' => $this->request->getPost('nama_anak'),
            'tanggal_lahir'  => $this->request->getPost('tanggal_lahir'),
            'jk'  => $this->request->getPost('jk'),
            'jenis_imunisasi'  => $this->request->getPost('jenis_imunisasi'),
            'jadwal_imunisasi'  => $this->request->getPost('jadwal_imunisasi')
        );
        $model->edit($data,$id);
        echo '<script>
                alert("Sukses Tambah Imunisasi Anak");
                window.location="'.base_url('Imunisasi').'"
            </script>';

    }
}