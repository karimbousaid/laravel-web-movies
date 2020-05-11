@extends('layouts.master')


@section('content')

<br><br>
<div class="container" style="margin-top: 50px"> 
<div class="row"> 
  <div class="col-sm-10">
    <img src="{{asset('storage/'.$film->image)}}" border=3 align=left  style="margin-right: 30px;border: 2px groove rgba(28,110,164,0.2);
    border-radius: 10px 10px 10px 10px;">
      <div class="content">
        <h1 class="display-4">{{$film->Name}}</h1>
        <strong>Description:</strong><p class="lead">{{$film->description}}</p>
        <strong>Genres:</strong><p class="lead">{{$film->genre}}</p>
        <strong>Evaluation:</strong><p class="lead">{{$film->etoile}} <i class="fa fa-star" aria-hidden="true" style="color:#F2C524"></i></p>
        <p class="lead">
          <a class="btn btn-primary btn-lg" href="#video" role="button">Watch Trailer</a>
        </p>
      </div>
  </div>
</div>
</div>

<div class="container" id="video" style="margin-top:50px;">
    <div class="row">
      <div class="col-md-12">
        <video width="1000" height="600" controls>
            <source src="{{asset('storage/'.$film->video)}}" type="video/mp4">
          </video>
      </div>
</div>
   
@endsection
