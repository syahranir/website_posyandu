<?php
 
 namespace App\Models;
 use CodeIgniter\Model;
 
class Home extends Modul
{
    public function index()
    {
        return view('home_view');
    }
}