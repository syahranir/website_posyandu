<?php
namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\Kader_model;

class Kader extends Controller
{
    public function index()
    {
        $model = new Kader_model;
        $data['title']     = 'Data Kader';
        $data['getKader'] = $model->getKader();
        echo view('header_view', $data);
        echo view('kader_view', $data);
    }

    public function tambah()
    {
        $data['title']     = 'Tambah Data Kader';
        echo view('header_view', $data);
        echo view('tambahkader_view', $data);
    }

    public function add()
    {
        $model = new Kader_model;
        $data = array(
            'nama_kader' => $this->request->getPost('nama_kader'),
            'tlp_kader'         => $this->request->getPost('tlp_kader'),
            'alamat_kader'  => $this->request->getPost('alamat_kader')
        );
        $model->saveKader($data);
        echo '<script>
                alert("Sukses Tambah Data Kader");
                window.location="'.base_url('Kader').'"
            </script>';

    }

    public function edit($id)
    {
        $model = new Kader_model;
        $getKader = $model->getKader($id)->getRow();
        if(isset($getKader))
        {
            $data['kader'] = $getKader;
            $data['title']  = 'Edit'.$getKader->nama_kader;
            echo view('header_view', $data);
            echo view('editkader_view', $data);
        }else{
            echo '<script>
                    alert("ID Kader'.$id.' Tidak ditemukan");
                    window.location="'.base_url('kader').'"
                </script>';
        }
    }

    public function update()
    {
        $model = new Kader_model;
        $id = $this->request->getPost('id_kader');
        $data = array(
            'nama_kader' => $this->request->getPost('nama_kader'),
            'tlp_kader' => $this->request->getPost('tlp_kader'),
            'alamat_kader'  => $this->request->getPost('alamat_kader')
        );
        $model->edit($data,$id);
        echo '<script>
                alert("Sukses Edit Data Kader");
                window.location="'.base_url('kader').'"
            </script>';

    }

    public function hapus($id)
    {
        $model = new Kader_model;
        $getKader = $model->getKader($id)->getRow();
        if(isset($getKader))
        {
            $model->hapusKader($id);
            echo '<script>
                    alert("Hapus Data Kader");
                    window.location="'.base_url('Kader').'"
                </script>';

        }else{

            echo '<script>
                    alert("Hapus Gagal !, ID Kader '.$id.' Tidak ditemukan");
                    window.location="'.base_url('Kader').'"
                </script>';
        }
    }

}