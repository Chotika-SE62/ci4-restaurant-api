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
}