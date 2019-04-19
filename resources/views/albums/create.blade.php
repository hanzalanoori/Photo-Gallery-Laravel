@extends('layouts.app')


@section('content')
<div class="container">
<h1>Albums</h1>
<form  method="POST" action="{{url('albums/store')}}" enctype="multipart/form-data">
   <div class="form-group">
      <label for="Name">Album</label>
      <input type="text" class="form-control" name="name" placeholder="Album">
      <label for="Name">Album Description</label>
      <textarea name="album_desc" id="" style="margin: 0px;height: 342px;width: 1140px;" placeholder="Album Description"></textarea>
      {{csrf_field()}}
      <label for="Name">File</label>
      <input type="file" class="form-control" name="cover_image">
      <br>
      <button type="submit" class="btn btn-primary btn-outline">
      <i class="ti-save-alt"></i> Save
      </button>
   </div>
</form>
</div>
@endsection