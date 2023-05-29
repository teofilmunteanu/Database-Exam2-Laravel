<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
   public function index(){
       return view('index');
   }
   
   public function login(){
       return view('index');
   }
   
//   public function signup(){
//       return view('signup');
//   }
//   
//   public function main(){
//       return view('main');
//   }
}
