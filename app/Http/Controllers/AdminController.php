<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function admin(){
        return view('admin/dasbord');
    }
    public function showuser(){
        return view('admin/user');
    }
    public function showcategory(){
        return view('admin/category');
    }
    public function showproduct(){
        return view('admin/product');
    }
    public function showfeedback(){
        return view('admin/feedback');
    }
    public function showaddproduct(){
        return view('admin/addproduct');
    }
}
