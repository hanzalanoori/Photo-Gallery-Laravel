@extends('layouts.app')
@section('content')
<div class="container">
<h3>{{$photo->title}}</h3>
<p>{{$photo->description}}</p>
<a class="btn btn-primary" href="/albums/{{$photo->album_id}}">Back To Gallery</a>
<hr>
<img  src="/storage/photos{{$photo->album_id }}/{{$photo->photo }}" alt="{{$photo->title }}" >



   <div class="form-group">
     
      <input type="hidden" class="form-control" name="album_id" placeholder="Photo" value={{$photo->album_id }}>
      <br><br>
  <a href="/photos/delete/{{$photo->id}}">
      <button type="submit" class="btn btn-danger btn-outline" href="/photos/delete/{{$photo->id}}">
      <i class="ti-save-alt"></i> Delete
      </button></a>
   </div>

</div>

@endsection
