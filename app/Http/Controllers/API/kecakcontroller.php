<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Berita;

class kecakcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data = Berita::paginate(5);    
        return response()->json($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $validasi=$request -> validate([
            'user_id'=>'required',
            'title'=>'required|unique:beritas|max:255',
            'testimonial'=>'required',
            'messages'=>'required',
            'rate'=>'required',
        ]);
        try {
        $response = Berita::create($validasi);
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
    public function destroy($id)
    {
        //
    }
}
