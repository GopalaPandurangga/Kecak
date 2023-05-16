<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Package;
use App\Models\comunity;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;


class PackageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $package = Package::all();
        $title = "Package List";
        
        return view('backpage.daftarpackage', compact('title', 'package'));
       
    }
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = "Add Some Package";
        $comunities = comunity::all();
        return view('backpage.inputpackage', compact('title', 'comunities'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $message=[
            'required'=> 'attribute must complete',
            'date'=> 'attribute must date',
            'numeric'=> 'attribute must number',
        ];
        $validasi=$request -> validate([
            // 'package_id'=>'required',
            'package_code'=>'required|numeric',
            'package_name'=>'required',
            'package_desc'=>'required',
            // 'location_id'=>'required',
            'community_id'=>'required',
            'feature_image'=>'required|mimes:jpg,bmp,png|max:1024'
        ],$message);
        //$fileName = time().$request->file('cover')->getClientOriginalName();
         $path = $request -> file('feature_image')->storeAs('photo',$fileName);
         $validasi['package_id']=Auth::id();
        $validasi['feature_image']=$path;
        Package::create($validasi);
        return redirect('daftarpackage')->with('success','Data Successfully save');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $comunities = comunity::all();
        $package=Package::find($id);
        $title = "Edit Data";
        
        return view('backpage.inputpackage', compact('title', 'package','comunities'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $message=[
            'required'=> 'attribute must complete',
            'date'=> 'attribute must date',
            'numeric'=> 'attribute must number',
        ];
        $validasi=$request -> validate([
            // 'package_id'=>'required',
            'package_code'=>'required',
            'package_name'=>'required',
            'package_desc'=>'required',
            // 'location_id'=>'required',
            'community_id'=>'required',
            
        ],$message);
        
        if($request->hasFile('feature_img')){
            $fileName=time().$request->file('feature_image')->getClientOriginalName();
            $path = $request -> file('feature_image')->storeAs('photo', $fileName);
            $validasi['feature_image']=$path;
            $package=Package::find($id);
            Storage::delete($package->feature_image);
        }
        
        $validasi['package_id']=Auth::id();
        Package::where('id', $id)->update($validasi);
        return redirect('daftarpackage')->with('success','Data Successfully Update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $package=Package::find($id);
        if($package != null){
            // Storage::delete($berita->cover);
            $package=Package::find($package->package_id);
            Package::where('package_id', $id)->delete();
        }
        
        return redirect('daftarpackage')->with('success','Data Successfully Deleted');
    }
}
