<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class MainController extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'SIAP 2022'
        ];

        return view('main', $data);
    }
}
