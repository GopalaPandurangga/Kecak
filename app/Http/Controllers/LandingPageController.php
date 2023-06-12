<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LandingPage;
use App\Models\Berita;
use App\Models\MainCast;
use App\Models\Paket;

class LandingPageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = "Daftar Content";
        $content = LandingPage::all();
        return view ('backpage.daftarcontent', compact('title','content'));
    }

    public function content()
    {
        //
        $testi = Berita::first();
        $data1 = LandingPage::first();
        $data2 = LandingPage::skip(1)->first();
        $data3 = LandingPage::skip(2)->first();
        $data = Paket::paginate(3);
        $cast = MainCast::paginate(3);
        return view('frontend.landingpage', compact('testi','data','data1','data2','data3','cast'));
        
    }

    public function index2()
    {
        $data1 = LandingPage::all();
        return response()->json($data1);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = "Input Data";
        return view('backpage.inputcontent', compact('title'));
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
            'landingpages_id'=>'required',
            'title'=>'required',
            'desc'=>'required',
            'photo'=>'required|mimes:jpg,bmp,png,webp'
        ]);
        $validasi['user_id']=Auth::id();
        // $validasi['cover']=$path;
        LandingPage::create($validasi);
        return redirect('backpage.daftarcontent')->with('success','Data Successfully save');
        
        try {
            //  $fileName = time().$request->file('cover')->getClientOriginalName();
             $path = $request -> file('photo')->store('covers');
             $validasi['photo']=$path;
            
            $response = LandingPage::create($validasi);
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
        $content=LandingPage::find($id);
        if($content != null){
            Storage::delete($content->photo);
            $content=LandingPage::find($content->id);
            LandingPage::where('id', $id)->delete();
        }
        
        return redirect('content')->with('success','Data Successfully Deleted');
    }
}
