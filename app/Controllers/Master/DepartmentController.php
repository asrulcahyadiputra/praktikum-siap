<?php

namespace App\Controllers\Master;

use App\Controllers\BaseController;
use App\Models\Master\Department;
use CodeIgniter\HTTP\Request;
use CodeIgniter\Validation\Exceptions\ValidationException;

class DepartmentController extends BaseController
{

    private $deparment;

    public function __construct()
    {
        $this->deparment = new Department();
    }

    public function index()
    {
        $data = [
            'title' => 'Data Depatment - SIAP 2022'
        ];

        return view('master/departments/index',$data);
    }

    public function getData()
    {
        try{
            $responseData = $this->deparment->findAll();

            return $this->response->setJSON([
                'succcess'      => true,
                'message'       => 'Get Data Departments Successfully',
                'results'       => $responseData,
                'errors'        => [],
            ], 200);

        }catch(\Exception $e){
            return $this->response->setJSON([
                'succcess'      => false,
                'message'       => 'Internal Server Error',
                'results'       => [],
                'errors'        => $e->getMessage(),
            ], 500);
        }
    }

    public function store(Request $request)
    {
        try{
            try{
                $this->validate([
                    'department_name'   => 'required|max_length[50]'
                ]);

                $dataToInsert = [
                    'department_name'   =>   $request->getPost('depatment_name')
                ];


            }catch (ValidationException $e){
                return $this->response->setJSON([
                    'succcess'      => false,
                    'message'       => 'Internal Server Error',
                    'results'       => [],
                    'errors'        => $e->getMessage(),
                ], 500);
            }
        }catch(\Exception $e){
            return $this->response->setJSON([
                'succcess'      => false,
                'message'       => 'Internal Server Error',
                'results'       => [],
                'errors'        => $e->getMessage(),
            ], 500);
        }
    }

    public function update(Request $request)
    {

    }
}
