@extends('layouts.app')


@section('content')
<div class="container">
<h1>Upload Photo</h1>
<form  method="POST" action="{{url('photos/store')}}" enctype="multipart/form-data">
   <div class="form-group">
      <label for="Name">Photo</label>
      <input type="text" class="form-control" name="title" placeholder="Photo">
      <input type="hidden" class="form-control" name="album_id" placeholder="Photo" value={{$album_id}}>
      <label for="Name">Photo Description</label>
      <textarea name="album_desc" id="" style="margin: 0px;height: 342px;width: 1140px;" placeholder="Photo Description"></textarea>
      {{csrf_field()}}
      <label for="Name">File</label>
      <input type="file" class="form-control" name="photo">
      <br>
      <button type="submit" class="btn btn-primary btn-outline">
      <i class="ti-save-alt"></i> Save
      </button>
   </div>
</form>
</div>
@endsection