<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Package;

class HomeController extends Controller
{
public function index (){
    
}
public function about (){
    return view('frontend.about');
}
public function package (){
    
    return view('frontend.package');
}


public function detailpackage (){
    return view ('frontend.detailpackage');
}

public function galery (){
    return view ('frontend.galery');
}



}
