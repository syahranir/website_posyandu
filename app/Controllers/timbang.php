<?php
namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\Timbang_model;

class Timbang extends Controller
{
    public function index()
    {
        $model = new Timbang_model;
        $data['title']     = 'Data Timbang';
        $data['getTimbang'] = $model->getAnak();
        echo view('header_view', $data);
        echo view('timbang_view', $data);
    }

    public function edit($id)
    {
        $model = new Timbang_model;
        $getTimbang = $model->getAnak($id)->getRow();
        if(isset($getTimbang))
        {
            $data['anak'] = $getTimbang;
            $data['title']  = 'Edit '.$getTimbang->nama_anak;
            echo view('header_view', $data);
            echo view('tambahtimbang_view', $data);

        }else{
            echo '<script>
                    alert("ID Anak '.$id.' Tidak ditemukan");
                    window.location="'.base_url('Timbang').'"
                </script>';
        }
    }

    public function update()
    {
        $model = new Timbang_model;
        $id = $this->request->getPost('id_anak');
        $data = array(
            'nama_anak' => $this->request->getPost('nama_anak'),
            'tanggal_lahir'  => $this->request->getPost('tanggal_lahir'),
            'jk'  => $this->request->getPost('jk'),
            'bb'  => $this->request->getPost('bb'),
            'tb'  => $this->request->getPost('tb'),
            'tgl_timbang'  => $this->request->getPost('tgl_timbang')

        );
        $model->edit($data,$id);
        echo '<script>
                alert("Sukses Tambah Timbang Anak");
                window.location="'.base_url('Timbang').'"
            </script>';

    }
}