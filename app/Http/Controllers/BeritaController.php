<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Berita;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;


class BeritaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $berita = Berita::all();
        $title = "Testimonial";
        
        return view('backpage.berita', compact('title', 'berita'));
       
    }
    public function testi (){
        $berita = Berita::all();
        return view('frontend.testimonial', compact('berita'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = "Input Data";
        return view('backpage.inputberita', compact('title'));
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
            'title'=>'required|unique:beritas|max:255',
            'testimonial'=>'required',
            'messages'=>'required',
            'rate'=>'required',
        ],$message);
        //$fileName = time().$request->file('cover')->getClientOriginalName();
        // $path = $request -> file('cover')->store('covers');
         $validasi['user_id']=Auth::id();
        // $validasi['cover']=$path;
        Berita::create($validasi);
        return redirect('/')->with('success','Data Successfully save');
        
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
        $berita=Berita::find($id);
        $title = "Edit Data";
        
        return view('backpage.inputberita', compact('title', 'berita'));
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
            'title'=>'required|unique:beritas|max:255',
            'description'=>'required',
            
        ],$message);
        
        if($request->hasFile('cover')){
            $fileName=time().$request->file('cover')->getClientOriginalName();
            $path = $request -> file('cover')->storeAs('covers', $fileName);
            $validasi['cover']=$path;
            $berita=Berita::find($id);
            Storage::delete($berita->cover);
        }
        
        $validasi['user_id']=Auth::id();
        Berita::where('id', $id)->update($validasi);
        return redirect('berita')->with('success','Data Successfully Update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $berita=Berita::find($id);
        if($berita != null){
            // Storage::delete($berita->cover);
            $berita=Berita::find($berita->id);
            Berita::where('id', $id)->delete();
        }
        
        return redirect('berita')->with('success','Data Successfully Deleted');
    }
}
