<?php 
namespace App\Models;
use CodeIgniter\Model;
 
class Bidan_model extends Model
{
    protected $table = 'Bidan';
    
    public function getBidan($id = false)
    {
        if($id === false){
            return $this->findAll();
        }else{
            return $this->getWhere(['id_bidan' => $id]);
        }   
    }

    public function saveBidan($data)
    {
        $builder = $this->db->table($this->table);
        return $builder->insert($data);
    }

    public function edit($data,$id)
    {
        $builder = $this->db->table($this->table);
        $builder->where('id_bidan', $id);
        return $builder->update($data);
    }

    public function hapusBidan($id)
    {
        $builder = $this->db->table($this->table);
        return $builder->delete(['id_bidan' => $id]);
    }
 
}