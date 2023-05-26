<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Package;

class HomeController extends Controller
{
public function index (){
    
}


public function detailpackage (){
    return view ('frontend.detailpackage');
}

public function galery (){
    return view ('frontend.galery');
}



}
