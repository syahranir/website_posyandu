<?php

namespace App\Models;

use CodeIgniter\Model;

class Login_Model extends Model
{
    protected $table = "admin";
    protected $primaryKey = "username";
    protected $returnType = "object";
    protected $useTimestamps = true;
    protected $allowedFields = ['usn_admin', 'pass_admin'];
}