<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ShowList;

class ShowController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $shows = ShowList::paginate(2);
        return response()->json($shows);
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
            
            $response = ShowList::create($validasi);
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
    public function destroy($id)
    {
        //
    }
}
