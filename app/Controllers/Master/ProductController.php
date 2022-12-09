<?php

namespace App\Controllers\Master;

use App\Controllers\BaseController;
use App\Models\master\Product;
use GuzzleHttp\Client;


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

    public function getDataBankSampahBandungKulon()
    {
        $client = new Client();

        $response = $client->request('get', 'http://data.bandung.go.id/index.php/portal/api/ecce2563-418d-40b5-95e3-13ecc12cd16f');

        $body = $response->getBody();

        $data = json_decode($body);

        return $this->response->setJSON($data->data, 200);

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
