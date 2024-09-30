<?php

namespace App\Models;

use CodeIgniter\Model;

class tesModel extends Model
{
    protected $table = "mha";
    protected $primaryKey = "id";
    protected $returnType = "object";
    protected $useAutoIncerement = true;
    protected $allowedFields = ['id', 'npm', 'nama', 'alamat'];
}
?>