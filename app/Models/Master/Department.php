<?php

namespace App\Models\Master;

use CodeIgniter\Model;

class Department extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'departments';
    protected $primaryKey       = 'department_id';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = 'array';
    protected $allowedFields    = ['department_name'];

    // Dates
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';


}
