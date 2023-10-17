<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){
         return view('welcome');
     }
     public function about(){
         return '[ Nama : Wandi Sidik Permana ] <br> [ NIM : D212011045 ] <br> [ Kelas : KA-7B ]';
     }
     public function contact(){
         return 'sidikwandi@gmai.com';
     }
}
