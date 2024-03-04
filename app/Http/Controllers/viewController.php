<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class viewController extends Controller
{
    public function index(){
        return view('client/login_logout');
    }
    public function homepage() {
        return view('client/home');
    }
    public function login( Request $request){
        if($request->input('Signup')){
            return view('client/sign_up');
        }else if($request->input('login')){
            return redirect('homepage');
        }
    }
    public function sigUp(){
        return view('client/sign_up');
    }
    public function showcomputer(){
        return view('client/productcomputer');
    }
    public function showairpot(){
        return view('client/productairpot');
    }
    public function showphone(){
        return view('client/productphone');
    }
    public function showgame(){
        return view('client/productgame');
    }
}
