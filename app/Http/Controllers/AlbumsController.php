<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Album;

class AlbumsController extends Controller
{
   public function index(){

    $albums = Album::with('Photos')->get();
    return view('albums.index')->with('albums',$albums);
   }

   public function create(){

    return view('albums.create');
   }

   public function store(Request $request){
       $this->validate($request,[
    'name'=>'required',
    'cover_image'=>'image|max:1999'
       ]);
    
       // file name with extension
    $filenameWithExt = $request->file('cover_image')->getClientOriginalName(); 
     // file name (path info)
    $filename = pathinfo($filenameWithExt,PATHINFO_FILENAME) ;
     // get extension
    $extension = $request->file('cover_image')->getClientOriginalExtension();  
    $fileNameToStore = $filename.'_'.time().'.'.$extension;
  

    $path =$request->file('cover_image')->storeAs('public/album_covers',$fileNameToStore);
    $album = new Album;
    $album->name = $request->input('name');
    $album->description = $request->input('album_desc');
    $album->cover_image = $fileNameToStore;
    $album->save();
    
    return redirect('/albums')->with('success','Album Created');

   }

   public function show($id){
      $album = Album::with('Photos')->find($id);
      return view('albums.show')->with('albums',$album);
     }

    
    
}
