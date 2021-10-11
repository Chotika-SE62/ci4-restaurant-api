<?php

namespace App\Models;

use CodeIgniter\Model;  //ไลบลารี่ที่จะใช้

class RestaurantModel extends Model {    //ประกาศเป็นclass ใช้extendsเพื่อสืบทอดคุณสมบัติมา
    //สร้าง model
    protected $table = 'restaurants';    //บอกการเข้าถึงชื่อตาราง 
    protected $primaryKey = "id";    //ใช้ id เป็น primaryKey  
    protected $allowedFields = ['id', 'name', 'type', 'imageurl'];    //เข้าถึงได้ แก้ไขได้ อยู่ในรูปแบบอาเรย์
}
