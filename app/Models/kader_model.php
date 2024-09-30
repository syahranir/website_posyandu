<?php 
namespace App\Models;
use CodeIgniter\Model;
 
class Kader_model extends Model
{
    protected $table = 'Kader';
    
    public function getKader($id = false)
    {
        if($id === false){
            return $this->findAll();
        }else{
            return $this->getWhere(['id_kader' => $id]);
        }   
    }

    public function saveKader($data)
    {
        $builder = $this->db->table($this->table);
        return $builder->insert($data);
    }

    public function edit($data,$id)
    {
        $builder = $this->db->table($this->table);
        $builder->where('id_kader', $id);
        return $builder->update($data);
    }

    public function hapusKader($id)
    {
        $builder = $this->db->table($this->table);
        return $builder->delete(['id_kader' => $id]);
    }
 
}