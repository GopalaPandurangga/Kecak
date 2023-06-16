<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Paket;
// use App\Models\comunity;
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
        $package = Paket::all();
        $title = "Package List";
        return view('backpage.daftarpackage', compact('title', 'package'));
       
    }

    public function index2()
    {
        $package = Paket::paginate(2);
        return response()->json($package);
    }

    public function package (){
        $data = Paket::all();
        return view('frontend.package', compact('data'));
    }

    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = "Add Some Package";
        // $comunities = comunity::all();
        return view('backpage.inputpackage', compact('title'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $validasi=$request -> validate([
            'name'=>'required',
            'rate'=>'required',
            'desc'=>'required',
            'location'=>'required',
            'photo'=>'required|mimes:jpg,bmp,png,webp'
        ]);
        
        try {
            //  $fileName = time().$request->file('cover')->getClientOriginalName();
             $path = $request -> file('photo')->store('covers');
             $validasi['photo']=$path;
            
            $response = Paket::create($validasi);
            return response()->json([
                'success'=> true,
                'message'=>'success',
                'body'=>$response
            ]);
            
    
            } catch (\Throwable $th) {
                return response()->json([
                    'success'=> false,
                    'message'=>'error',
                    'errors'=>$th->getMessage()
                ]);
            }
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($package_id)
    {
        $data = Paket::findOrFail($package_id);
        return view ('frontend.detailpackage', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
        $package=Paket::find($id);
        $title = "Edit Data";
        
        return view('backpage.inputpackage', compact('title', 'package'));
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
        $validasi=$request -> validate([
            'packages_id'=>'required',
            'name'=>'required',
            'rate'=>'required',
            'desc'=>'required',
            'location'=>'required',
            'photo'=>''
        ]);
        
        try {
            //  $fileName = time().$request->file('cover')->getClientOriginalName();
            if($request->file('photo')){
                $path = $request -> file('photo')->store('covers');
                $validasi['photo']=$path;
            }
            $response = Paket::find($id);
            $response -> update($validasi);
            return response()->json([
                'success'=> true,
                'message'=>'success',
                'body'=>$response
            ]);
            // if ($response!=null){
            //     return response()->json([
            //         'success'=> true,
            //         'message'=>'success'
            //     ]);
            // }else{
            //     return response()->json([
            //         'success'=> false,
            //         'message'=>'tidak tersimpan'
            //     ]);
            // }
    
            } catch (\Throwable $th) {
                return response()->json([
                    'success'=> false,
                    'message'=>'error',
                    'errors'=>$th->getMessage()
                ]);
            }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try{
        $package=Paket::find($id);
        $package->delete();
        return response()->json([
            'success'=> true,
            'message'=>'success',
        ]); }
        catch (\Throwable $th) {
            return response()->json([
                'success'=> false,
                'message'=>'error',
                'errors'=>$th->getMessage()
            ]);
        }
        // if($package != null){
        //     // Storage::delete($berita->cover);
        //     $package=Package::find($package->package_id);
        //     Package::where('package_id', $id)->delete();
        // }
        
        // return redirect('daftarpackage')->with('success','Data Successfully Deleted');
    }
}
