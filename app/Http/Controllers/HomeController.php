<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Package;

class HomeController extends Controller
{
    public function index (){
        $package = Package::all();
        return view('frontend.landingpage', compact( 'package'));
}
public function about (){
    return view('frontend.about');
}
public function package (){
    $packages = Package::all ();
    return view('frontend.package', compact('packages'));
}


public function detailpackage (){
    return view ('frontend.detailpackage');
}

public function galery (){
    return view ('frontend.galery');
}



}
