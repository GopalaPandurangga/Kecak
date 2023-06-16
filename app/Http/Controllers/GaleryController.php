<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Galery;

class GaleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function galery (){
        $galeries = Galery::all();
        return view ('frontend.galery', compact('galeries'));
    }
    public function index()
    {
        $title = "Daftar Galery";
        $galeries = Galery::all();
        return view ('backpage.daftargalery', compact('title','galeries'));
    }
    public function index2()
    {
        $galeries = Galery::all();
        return response()->json($galeries);

    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       
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
            
            'title'=>'required',
            'desc'=>'required',
            'photo'=>'required|mimes:jpg,bmp,png,webp'
        ]);
        
        try {
            //  $fileName = time().$request->file('cover')->getClientOriginalName();
             $path = $request -> file('photo')->store('covers');
             $validasi['photo']=$path;
            
            $response = Galery::create($validasi);
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($galery_id)
    {
        try{
            $galeries=Galery::find($galery_id);
            $galeries->delete();
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
