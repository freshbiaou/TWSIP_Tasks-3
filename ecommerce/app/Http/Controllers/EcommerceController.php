<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EcommerceController extends Controller
{
    public function connexion(){
        return view('sans_connexion');
    }
    
    public function index(){
        return view('index');
    }

    public function about(){
        return view('about');
    }

    public function contact(){
        return view('contact');
    }

    public function blog(){
        return view('blog');
    }
}
