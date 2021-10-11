<?php

namespace App\Controllers;

//use App\Models\RestaurantModel;
use CodeIgniter\RESTful\ResourceController; //import
use CodeIgniter\API\ResponseTrait;    //สร้างเซตของคำตอบ

class Restaurant extends ResourceController {    //ประกาศclass
    use ResponseTrait;
    protected $modelName = 'App\Models\RestaurantModel';    //ประกาศModel
    protected $format = 'json';     //กำหนดค่าใหม่

    //Get all Restaurants
    public function index() {   //ประกาศฟังก์ชัน
        $data['restaurants'] = $this->model->orderBy('id', 'DESC')->findAll();    //สร้างตัวแปรมาเก็บ ที่จะไปดึงจากฐานข้อมูล //เอามาทุกอันโดยเรียงตาม id
        return $this->respond($data);
    }

    //Get Restaurants by Id
    public function show($id = null) {   //ประกาศฟังก์ชัน
        $data = $this->model->getWhere(['id' => $id])->getResult();    //สร้างตัวแปรมาเก็บ ที่จะไปดึงจากฐานข้อมูล //เอามาทุกอันโดยเรียงตาม id
            if ($data) {
                return $this->respond($data);
            } else {
                return $this->failNotFound('No Restaurant found with id: ' . $id);
            }
    }
}