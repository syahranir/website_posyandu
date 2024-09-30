<?php namespace App\Controllers;

use App\Models\tesModel;

class tes extends BaseController
{
    protected $tes;

    function __construct()
    {
        $this->tes = new tesModel();
    }

    public function index ()
    {
        $data['tes'] = $this->tes->findAll();
        return view('tes/index', $data);
    }

    Public function create()
    {
        //echo ('mha/create');
        return view ('tes/create');
    }
    
    public function store()
    {
        $this->tes->insert([
            'npm'=> $this->request->getVar('npm'),
            'nama'=> $this->request->getVar('nama'),
            'alamat'=> $this->request->getVar('alamat')
        ]);

        return redirect ()->to('/tes');
    }

    public function delete($id)
    {
        $this->tes->delete($id);
        return redirect()->to('/tes');
    }

    public function edit($id)
    {
        $data['tes'] = $this->tes->where('id',$id)->first();
        return view('tes/edit', $data);
    }
 
    public function proses_edit()
    {
        $this->tes->update(
            ['id'=> $this->request->getVar('id')], 
            ['npm'=> $this->request->getVar('npm'),
            'nama'=> $this->request->getVar('nama'),
            'alamat'=> $this->request->getVar('alamat')]
        );
        return redirect ()->to('/tes');
    }
}
?>