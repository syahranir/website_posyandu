<?php
namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\Laporan_model;

class Laporan extends Controller
{
    public function index()
    {
    	$model = new Laporan_model();
        $data['getAnak'] = $model->getAnak();
        $data['title'] = 'Data Anak';
        $kunci = $this->request->getVar('cari');
        echo view('header_view', $data);


        if ($kunci) {
            $query = $model->cari($kunci);
        } else {
            $query = $model;
        }
        $data['anak'] = $query->paginate(10);

        echo view('laporan_view',$data);
    }
}