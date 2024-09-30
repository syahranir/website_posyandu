<?php 
namespace App\Models;
use CodeIgniter\Model;
 
class Anak_model extends Model
{
    protected $table = 'anak';
    
    public function getAnak($id = false)
    {
        if($id === false){
            return $this->findAll();
        }else{
            return $this->getWhere(['id_anak' => $id]);
        }   
    }

    public function saveAnak($data)
    {
        $builder = $this->db->table($this->table);
        return $builder->insert($data);
    }

    public function edit($data,$id)
    {
        $builder = $this->db->table($this->table);
        $builder->where('id_anak', $id);
        return $builder->update($data);
    }

    public function hapusAnak($id)
    {
        $builder = $this->db->table($this->table);
        return $builder->delete(['id_anak' => $id]);
    }
 
}