<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $name="Ali Ahmad";
        return view('welcome')->with('name',$name);
    }

    public function about(){
        return view('pages.about');
    }

    public function form(){
        return view ('pages.form');
    }

    public function services(){
        $data=[
            'title'=>'Our Services',
            'services'=>['php','Laravel','Mysqli','Html']
        ];
        return view('pages.services')->with('data',$data);
    }
}
