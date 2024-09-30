<?php
namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\Bidan_model;

class Bidan extends Controller
{
    public function index()
    {
        $model = new Bidan_model;
        $data['title']     = 'Data Bidan';
        $data['getBidan'] = $model->getBidan();
        echo view('header_view', $data);
        echo view('bidan_view', $data);
    }

    public function tambah()
    {
        $data['title']  = 'Tambah Data Bidan';
        echo view('header_view', $data);
        echo view('tambahbidan_view', $data);
    }

    public function add()
    {
        $model = new Bidan_model;
        $data = array(
            'nama_bidan' => $this->request->getPost('nama_bidan'),
            'tlp_bidan'  => $this->request->getPost('tlp_bidan'),
            'alamat_bidan'  => $this->request->getPost('alamat_bidan')
        );
        $model->saveBidan($data);
        echo '<script>
                alert("Sukses Tambah Data Bidan");
                window.location="'.base_url('bidan').'"
            </script>';
    }

    public function edit($id)
    {
        $model = new Bidan_model;
        $getBidan = $model->getBidan($id)->getRow();
        if(isset($getBidan))
        {
            $data['bidan'] = $getBidan;
            $data['title']  = 'Edit'.$getBidan->nama_bidan;
            echo view('header_view', $data);
            echo view('editbidan_view', $data);
        }else{
            echo '<script>
                    alert("ID Bidan '.$id.' Tidak ditemukan");
                    window.location="'.base_url('bidan').'"
                </script>';
        }
    }

    public function update()
    {
        $model = new Bidan_model;
        $id = $this->request->getPost('id_bidan');
        $data = array(
            'nama_bidan' => $this->request->getPost('nama_bidan'), 
            'tlp_bidan' => $this->request->getPost('tlp_bidan'),
            'alamat_bidan'  => $this->request->getPost('alamat_bidan')
        );
        $model->edit($data,$id);
        echo '<script>
                alert("Sukses Edit Data Bidan");
                window.location="'.base_url('bidan').'"
            </script>';
    }

    public function hapus($id)
    {
        $model = new Bidan_model;
        $getBidan = $model->getBidan($id)->getRow();
        if(isset($getBidan))
        {
            $model->hapusBidan($id);
            echo '<script>
                    alert("Hapus Data Bidan");
                    window.location="'.base_url('Bidan').'"
                </script>';
        }else{
            echo '<script>
                    alert("Hapus Gagal !, ID Bidan '.$id.' Tidak ditemukan");
                    window.location="'.base_url('Bidan').'"
                </script>';
        }
    }

}