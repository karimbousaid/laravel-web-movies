@extends('layouts.master')

@section('style')
<link href="{{ asset('css/style.css') }}" rel="stylesheet">
@endsection

@include('partials.content')
@section('content')
   @foreach ($films as $film)
   <div class="col-lg-4 col-md-6 mb-4">
      <div class="card" id="serie">   
         <div class="card-header">
         <img class="card-img" src="{{asset('storage/'.$film->image)}}" alt="Card image" width="300px" height="450px">
         </div>  
         <div class="card-body">
            <h1 class="card-title">{{$film->Name}}</h1>
            <div class="container">
               <div class="row">
                  <div class="col-4 metadata">
                     <i class="fa fa-star" aria-hidden="true"></i> 
                     <p>{{$film->etoile}}/10</p>
                  </div>
                  <div class="col-8 metadata">Genre: {{$film->genre}}</div>
               </div>
            </div>      
            <p class="card-text">{{$film->description}}.</p>
            <a class="trailer-preview" href="https://youtu.be/ePbKGoIGAXY" target="new">
               <i class="fa fa-play" aria-hidden="true"></i>
               </a>
               <form action="{{route('films.destroy',['film' => $film->id])}}" method="POST">
                  @method('DELETE')
                  @csrf
                  <a href="{{route('films.show',['film' => $film->id])}}" class="btn btn-primary btn-sm">Show</a>

                  @can('update', $film)
                  <a href="{{url('films/'.$film->id.'/edit')}}" class="btn btn-danger btn-sm">Edit</a>
                  @endcan

                  @can('delete', $film)
                  <button type="submit" onclick="return confirm('Are you sure you want to delete this Movies?')" class="btn btn-dark btn-sm" value="delete">Delete</button>
                  @endcan


               </form>
         </div>
      </div>
   </div>
   @endforeach
</div>
<div class="pagination justify-content-center">{{ $films->links() }}</div>
</div>
@endsection
@section('footer')
    @include('partials.footer')
@endsection