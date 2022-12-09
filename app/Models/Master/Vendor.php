<?php

namespace App\Models\Master;

use CodeIgniter\Model;

class Vendor extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'vendors';
    protected $primaryKey       = 'vendor_id';
    protected $keyType          = 'string';
    protected $returnType       = 'array';
    protected $protectFields    = true;
    protected $allowedFields    = ['vendor_id', 'vendor_name', 'vendor_address'];

    // Dates
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';

}
