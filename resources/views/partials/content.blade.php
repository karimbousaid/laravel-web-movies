


<div class="container">
    <br>
    @include('partials.flash')
    <div class="row">

      <div class="col-lg-3">

        <h1 class="my-4">category</h1>
        <div class="list-group">
         <a class="list-group-item active" href="{{url('/getfilms',['genre' => 'All'])}}" >All</a>
         <a class="list-group-item " href="{{url('/getfilms',['genre' => 'Action'])}}" >Action</a>
         <a class="list-group-item " href="{{url('/getfilms',['genre' => 'Drama'])}}" >Drama</a>
         <a class="list-group-item " href="{{url('/getfilms',['genre' => 'Drama'])}}" >Romance</a>
         <a class="list-group-item " href="{{url('/getfilms',['genre' => 'Comedy'])}}" >Comedy</a>
         <a class="list-group-item " href="{{url('/getfilms',['genre' => 'Adventure'])}}" >Adventure</a>
         <a class="list-group-item " href="{{url('/getfilms',['genre' => 'Animation'])}}" >Animation</a>
         <a class="list-group-item " href="{{url('/getfilms',['genre' => 'Crime'])}}" >Crime</a>
         <a class="list-group-item" href="{{url('/getfilms',['genre' => 'Documentary'])}}" >Documentary</a>
         <a class="list-group-item" href="{{url('/getfilms',['genre' => 'Horror'])}}" >Horror</a>
         <a class="list-group-item" href="{{url('/getfilms',['genre' => 'Science'])}}" >Science</a>
        </div>

      </div>
      <!-- /.col-lg-3 -->

      <div class="col-lg-9">
        <br>
        <form class="example" action="{{url('/search')}}" method="GET">
            @csrf
            <input type="text" placeholder="Search.." name="Name">
            <button type="submit"><i class="fa fa-search"></i></button>
         </form>
        <div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
              <img class="d-block img-fluid" src="{{ asset('images/img1.jpg') }}" alt="First slide" >
            </div>
            <div class="carousel-item">
              <img class="d-block img-fluid" src="{{ asset('images/img2.jpg') }}" alt="Second slide" >
            </div>
            <div class="carousel-item">
              <img class="d-block img-fluid" src="{{ asset('images/img3.jpg') }}" alt="Third slide">
            </div>
            <div class="carousel-item">
                <img class="d-block img-fluid" src="{{ asset('images/img4.jpg') }}" alt="Third slide">
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
        <br>  
        <h1 class="display-5" style="color:#007BFF;">Best Series Shows of All Time</h1> <br>
      </div>
    </div>
  </div>
