@extends('layouts.app')
@section('content')
@if(count($albums) > 0)
<?php
   $colcount = count($albums);
   $i = 1; ?>
<div class="container">
   <h1>Albums</h1>
   @foreach($albums as $album)
   @if($i == $colcount)
   <div class="col-md-4">
      <a href="albums/{{$album->id }}" >
      <img class="thumbnail" src="storage/album_covers/{{$album->cover_image }}" alt="{{$album->name }}" >
      </a>
      <br>
      <h4>{{$album->name }}</h4>
   </div>
   @else
   <div class="col-md-4">
      <a href="albums/{{$album->id }}" >
      <img class="thumbnail" src="storage/album_covers/{{$album->cover_image }}" alt="{{$album->name }}" >
      </a>
      <br>
      <h4>{{$album->name }}</h4>
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
<p>No Text To Display</p>
@endif
@endsection
