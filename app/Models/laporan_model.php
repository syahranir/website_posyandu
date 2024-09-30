<?php 
namespace App\Models;
use CodeIgniter\Model;
 
class Laporan_model extends Model
{
    protected $table = 'anak';
    
    public function getAnak()
    {
        return $this->findAll();
    }

    public function cari($kunci) {
        return $this->table('anak')->like('nama_anak', $kunci);
    }
}