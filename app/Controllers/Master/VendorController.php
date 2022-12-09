<?php

namespace App\Controllers\Master;

use App\Controllers\BaseController;
use App\Models\Master\Vendor;

class VendorController extends BaseController
{
    private $vendor;

    public function __construct()
    {
        $this->vendor = new Vendor();
    }

    public function index()
    {
        $data = [
            'title'     => 'Data Vendor - MySIAP'
        ];

        return view('master/vendor/index', $data);
    }

    public function getData()
    {
        try{
            $data = $this->vendor->findAll();

            return $this->response->setJSON([
                'success'   => true,
                'message'   => 'Get Data Vendor Successfully',
                'results'   => $data,
                'errors'    => []
            ], 200);

        }catch(\Exception $e){
            return $this->response->setJSON([
                'success'   => false,
                'message'   => 'Internal Server Error',
                'results'   => [],
                'errors'    => $e->getMessage()
            ], 500);
        }
    }
}
