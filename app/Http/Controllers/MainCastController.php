<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MainCast;

class MainCastController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = "Daftar Content";
        $cast = MainCast::all();
        return view ('backpage.daftarmaincast', compact('title','cast'));
    }
    public function index2()
    {
        $cast = MainCast::all();
        return response()->json($cast);

    }
   

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = "Input Data";
        return view('backpage.inputcast', compact('title'));
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
            
            'title'=>'required|unique:main_casts',
            'desc'=>'required',
            'photo'=>'required|mimes:jpg,bmp,png,webp'
        ]);
        
        try {
            //  $fileName = time().$request->file('cover')->getClientOriginalName();
             $path = $request -> file('photo')->store('covers');
             $validasi['photo']=$path;
            
            $response = MainCast::create($validasi);
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
    public function edit($maincast_id)
    {
        $cast=MainCast::find($maincast_id);
        $title = "Edit Data";
        
        return view('backpage.inputcast', compact('title', 'cast'));
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
            
            'title'=>'required|unique:main_casts',
            'desc'=>'required',
            'photo'=>'required|mimes:jpg,bmp,png,webp'
        ]);
        
        try {
            //  $fileName = time().$request->file('cover')->getClientOriginalName();
            if($request->file('photo')){
                $path = $request -> file('photo')->store('covers');
                $validasi['photo']=$path;
            }
            
            $response = MainCast::find($id);
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
        //
    }
}
