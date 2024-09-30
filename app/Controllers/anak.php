<?php
namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\Anak_model;

class Anak extends Controller
{
    public function index()
    {
        $model = new Anak_model;
        $data['title'] = 'Data Anak';
        $data['getAnak'] = $model->getAnak();
        echo view('header_view', $data);
        echo view('anak_view', $data);
    }

    public function tambah()
    {
        $data['title']     = 'Tambah Data Anak';
        echo view('header_view', $data);
        echo view('tambahanak_view', $data);
    }

    public function add()
    {
        $model = new Anak_model;
        $data = array(
            'nama_anak' => $this->request->getPost('nama_anak'),
            'tanggal_lahir'         => $this->request->getPost('tanggal_lahir'),
            'jk'  => $this->request->getPost('jk'),
            'nama_ibu'  => $this->request->getPost('nama_ibu')
        );
        $model->saveAnak($data);
        echo '<script>
                alert("Sukses Tambah Data Anak");
                window.location="'.base_url('anak').'"
            </script>';

    }

    public function edit($id)
    {
        $model = new Anak_model;
        $getAnak = $model->getAnak($id)->getRow();
        if(isset($getAnak))
        {
            $data['anak'] = $getAnak;
            $data['title']  = 'Edit '.$getAnak->nama_anak;
            echo view('header_view', $data);
            echo view('editanak_view', $data);
        }else{

            echo '<script>
                    alert("ID Anak '.$id.' Tidak ditemukan");
                    window.location="'.base_url('anak').'"
                </script>';
        }
    }

    public function update()
    {
        $model = new Anak_model;
        $id = $this->request->getPost('id_anak');
        $data = array(
            'nama_anak' => $this->request->getPost('nama_anak'),
            'tanggal_lahir'         => $this->request->getPost('tanggal_lahir'),
            'jk'  => $this->request->getPost('jk'),
            'anak_ke'  => $this->request->getPost('anak_ke'),
            'nama_ibu'  => $this->request->getPost('nama_ibu'),
            'nama_ayah'  => $this->request->getPost('nama_ayah'),
            'alamat'  => $this->request->getPost('alamat')
        );
        $model->edit($data,$id);
        echo '<script>
                alert("Sukses Edit Data Anak");
                window.location="'.base_url('anak').'"
            </script>';
    }

    public function hapus($id)
    {
        $model = new Anak_model;
        $getAnak = $model->getAnak($id)->getRow();
        if(isset($getAnak))
        {
            $model->hapusAnak($id);
            echo '<script>
                    alert("Hapus Data Anak");
                    window.location="'.base_url('Anak').'"
                </script>';

        }else{

            echo '<script>
                    alert("Hapus Gagal !, ID Anak '.$id.' Tidak ditemukan");
                    window.location="'.base_url('Anak').'"
                </script>';
        }
    }

}