<?php

namespace App\Controllers\Master;

use App\Controllers\BaseController;
use App\Models\Master\JabatanModel;


class JabatanController extends BaseController
{
    private $jabatanModel;

    public function __construct()
    {
        $this->jabatanModel =  new JabatanModel();
    }

    public function index()
    {
        $data = [
            'title'         => 'Master Jabatan  - SIAP APP',
            'jabatan'       => $this->jabatanModel->findAll()
        ];

        return view('master/jabatan/index', $data);
    }

    public function show()
    {
        $jabatan = $this->jabatanModel->find(1);

        dd($jabatan);
    }
}
