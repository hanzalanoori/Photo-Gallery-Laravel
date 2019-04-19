@extends('layouts.app')
@section('content')
<div class="container">
<h1>{{$albums->name}}</h1>
<a class="btn btn-primary" href="/">Go Back</a>
<a class="btn btn-primary" href="/photos/create/{{$albums->id}}">Upload Photo To Album</a>
</div>

@if(count($albums->photos) > 0)
<?php
   $colcount = count($albums->photos);
   $i = 1; ?>
   <br><br><br>
<div class="container">
   <h4>Photos</h4>
   @foreach($albums->photos as $photo)
   @if($i == $colcount)
   <div class="col-md-4">
      <a href="/photos/{{$photo->id }}" >
      <img class="thumbnail" src="/storage/photos{{$photo->album_id }}/{{$photo->photo }}" alt="{{$photo->title }}" >
      </a>
      <br>
      <h4>{{$photo->title}}</h4>
   </div>
   @else
   <div class="col-md-4">
   <a href="/photos/{{$photo->id }}" >
      <img class="thumbnail" src="/storage/photos{{$photo->album_id }}/{{$photo->photo }}" alt="{{$photo->title }}" >
      </a>
      <br>
      <h4>{{$photo->title}}</h4>
      @endif
      @if($i % 3 == 0)
   </div>
   <div class="row center-text">
      @else
   </div>
   @endif
   <?php $i++; ?>
   @endforeach
</div>
@else
<br><br><br><br>
<div class="container">
<p>No Image To Display</p>
</div>
@endif
@endsection
