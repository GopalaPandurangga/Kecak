<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = "Daftar News";
        $news = News::all();
        return view ('backpage.daftarnews', compact('title','news'));
    }
    public function index2()
    {
        $news = News::all();
        return response()->json($news);

    }
    public function news()
    {
        $news = News::all();
        return view ('frontend.news', compact('news'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = "Input Data";
        return view('backpage.inputnews', compact('title'));
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
            
            $response = News::create($validasi);
            return response()->json([
                'success'=> true,
                'message'=>'success',
                'body'=>$response
            ]);
           
            return redirect('/news')->with('success','Data Successfully save');
            
    
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
    public function show($news_id)
    {
        $news = News::findOrFail($news_id);
        return view ('frontend.detailnews', compact('news'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $news=News::find($id);
        $title = "Edit Data";
        
        return view('backpage.inputnews', compact('title', 'news'));
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
        
        if($request->hasFile('photo')){
            $fileName=time().$request->file('photo')->getClientOriginalName();
            $path = $request -> file('photo')->storeAs('covers', $fileName);
            $validasi['photo']=$path;
            $news=News::find($id);
            Storage::delete($news->photo);
        }
        
        $validasi['user_id']=Auth::id();
        News::where('id', $id)->update($validasi);
        return redirect('/news')->with('success','Data Successfully Update');
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
