@extends('layouts.master')



@section('content')


<div class="container" style="margin-top: 50px">
    <div class="row">
      <div class="col-md-12">
      <form action="{{url('films/'.$film->id)}}" method="POST" enctype="multipart/form-data">
        <input type="hidden" name="_method" value="PUT">
        {{ csrf_field() }}
            <div class="form-group">
            <label for="">Name:</label>
            <input type="text" name="Name" class="form-control @error('Name') is-invalid @enderror" value="{{ $film->Name }}">
                  @error('name')
                  <div class="alert alert-danger">{{ $message }}</div>
                  @enderror
            </div>
            <div class="form-group">
                    <label for="">Description</label>
            <textarea name="description" class="form-control @error('description') is-invalid @enderror">{{ $film->description }}</textarea>
                    @error('description')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
            </div> 
            <label for="">Select Image</label><br>
            <input type="file" name="image" class="form-control @error('image') is-invalid @enderror" value="{{old('image')}}">
                @error('image')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            <br>
            <label for="">Select Video</label><br>
            <input type="file" name="video" class="form-control @error('video') is-invalid @enderror" value="{{old('video')}}">
                @error('video')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            <br>
                <label for="etoile">Select Etoiles:</label>
                <select name="etoile">
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                  <option value="6">6</option>
                  <option value="7">7</option>
                  <option value="8">8</option>
                  <option value="9">9</option>
                </select>
                <br>
                <label for="genre" >Select Genre:</label>
                <select id="genre" name="genre">
                  <option value="All">All</option>
                  <option value="Action">Action</option>
                  <option value="Adventure">Adventure</option>
                  <option value="Animation">Animation</option>
                  <option value="Crime">Crime</option>
                  <option value="Documentary">Documentary</option>
                  <option value="Drama">Drama</option>
                  <option value="History">History</option>
                  <option value="Horror">Horror</option>
                  <option value="Science">Science</option>
                </select>
            <div class="form-group">
                <input type="submit" class="form-control btn btn-danger" value="Update">
            </div>
        </form>
      </div>
  </div>
   
@endsection