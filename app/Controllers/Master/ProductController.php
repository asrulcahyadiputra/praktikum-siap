<?php

namespace App\Controllers\Master;

use App\Controllers\BaseController;
use App\Models\master\Product;

class ProductController extends BaseController
{
    private $product;

    public function __construct()
    {
        $this->product = new Product();
    }

    public function index()
    {
        $data = [
            'title'     => 'Produk - MySIAP',
            'data'      => $this->product->findAll()
        ];


        return view('master/product/index', $data);
    }

    public function getData()
    {
        try{
            $reponseData = $this->product->findAll();

            $data_to_json = [
                'success'    => true,
                'message'    => 'Get Data Product Successfully',
                'results'   => $reponseData,
                'erros'     => [],
            ];

            return $this->response->setJSON($data_to_json, 200);

        }catch(\Exception $e) {
            return $this->response->setJSON([
               'success'    => false,
               'message'    => 'Interal Server Error',
                'results'   => [],
                'erros'     => $e->getMessage(),

            ], 500);
        }
    }

}
