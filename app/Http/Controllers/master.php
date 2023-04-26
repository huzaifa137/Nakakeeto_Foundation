<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class master extends Controller
{
    public function home(){
        return view ('home');
    }

    public function about(){
        return view('about');
    }

    public function service(){
        return view('service');
    }

    public function projects(){
        return view('project');
    }

    public function contact(){
        return view('contact');
    }
}
