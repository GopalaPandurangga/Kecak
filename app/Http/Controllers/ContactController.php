<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contact = Contact::all();
        $title = "Agen Contact";
        
        return view('backpage.daftarcontact', compact('title', 'contact'));
    }
    public function kontak2 (){
        $contact = Contact::all();
        return view('frontend.contact', compact('contact'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = "Input Data";
        return view('backpage.inputcontact', compact('title'));
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
            'contact_name'=>'required|unique:contacts|max:255',
            'description'=>'required',
            'cover'=>'required|mimes:jpg,bmp,png|max:2048'
        ],$message);
        //$fileName = time().$request->file('cover')->getClientOriginalName();
        $path = $request -> file('cover')->store('covers');
        $validasi['contact_id']=Auth::id();
        $validasi['cover']=$path;
        Contact::create($validasi);
        return redirect('kontak')->with('success','Data Successfully save');
        
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
        $contact=Contact::find($id);
        $title = "Edit Data";
        
        return view('backpage.inputpackage', compact('title', 'contact'));
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
            'contact_name'=>'required|unique:contacts|max:255',
            'description'=>'required',
            
        ],$message);
        
        if($request->hasFile('cover')){
            $fileName=time().$request->file('cover')->getClientOriginalName();
            $path = $request -> file('cover')->storeAs('covers', $fileName);
            $validasi['cover']=$path;
            $contact=Contact::find($id);
            Storage::delete($contact->cover);
        }
        
        $validasi['user_id']=Auth::id();
        Contact::where('id', $id)->update($validasi);
        return redirect('kontak')->with('success','Data Successfully Update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $contact=Contact::find($id);
        if($contact != null){
            Storage::delete($contact->cover);
            $contact=Contact::find($contact->id);
            Contact::where('id', $id)->delete();
        }
        
        return redirect('kontak')->with('success','Data Successfully Deleted');
    }
}
