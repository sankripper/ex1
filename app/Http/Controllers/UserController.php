<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        return "หน้า User";
    }
    public function create(){
        return "สร้าง User";
    }
    public function showname($name){
        return "สวัสดี $name";
    }
    public function shoenameandage($name,$age){
        return "สวัสดี $name อายุ $age";
    }

}
