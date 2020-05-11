<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Shop Homepage - Start Bootstrap Template</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  @yield('style')
  <!-- Custom styles for this template -->
  <link href="css/master.css" rel="stylesheet">
  <link href="{{asset('css/fontawesome.min.css')}}" rel="stylesheet">

</head>

<body>

  <!-- Navigation -->
  @include('partials.navbar')

  <!-- Page Content -->
  <div class="container">
    <br>
    @include('partials.flash')
    <div class="row">
      
      <div class="col-lg-3">
        <h1 class="my-4">Category</h1>
        <div class="list-group">
            <a class="list-group-item active" href="{{url('/getfilms',['genre' => 'All'])}}" >All</a>
            <a class="list-group-item " href="{{url('/getfilms',['genre' => 'Action'])}}" >Action</a>
            <a class="list-group-item " href="{{url('/getfilms',['genre' => 'Adventure'])}}" >Adventure</a>
            <a class="list-group-item " href="{{url('/getfilms',['genre' => 'Animation'])}}" >Animation</a>
            <a class="list-group-item " href="{{url('/getfilms',['genre' => 'Crime'])}}" >Crime</a>
            <a class="list-group-item" href="{{url('/getfilms',['genre' => 'Documentary'])}}" >Documentary</a>
            <a class="list-group-item" href="{{url('/getfilms',['genre' => 'History'])}}" >History</a>
            <a class="list-group-item" href="{{url('/getfilms',['genre' => 'Horror'])}}" >Horror</a>
            <a class="list-group-item" href="{{url('/getfilms',['genre' => 'Science'])}}" >Science</a>
        </div>

      </div>
      <!-- /.col-lg-3 -->

      <div class="col-lg-9">

        <div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
              <img class="d-block img-fluid" src="{{ asset('images/img1.jpg') }}" alt="First slide">
            </div>
            <div class="carousel-item">
              <img class="d-block img-fluid" src="{{ asset('images/img2.jpg') }}" alt="Second slide">
            </div>
            <div class="carousel-item">
              <img class="d-block img-fluid" src="{{ asset('images/img3.jpg') }}" alt="Third slide">
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
        </div>
        <!-- /.row -->
      </div>
      <!-- /.col-lg-9 -->
    </div>
    <!-- /.row -->
  </div>
  <div class="container">


    <!-- Call to Action Well -->
    <div class="">
        <p class="text-white m-0">This call to action card is a great place to showcase some important information or display a clever tagline!</p>
    </div>

    <!-- Content Row -->
    @yield('content_films')

 </div>
  <!-- /.container -->
  <!-- Page Content -->
  <div class="container">

    <!-- Call to Action Well -->
    <div class="card text-white bg-secondary my-5 py-4 text-center">
        <p class="text-white m-0">This call to action card is a great place to showcase some important information or display a clever tagline!</p>
    </div>

    <!-- Content Row -->
    @yield('content_films')

  </div>
  <!-- /.container -->
  <!-- Footer -->
  <footer class="py-5 bg-dark">
    <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; Your Website 2020 <a href="">Karimbousaid.com</a></p>
        <div class="col-md-12 col-lg-12 text-md-center">
          <p class="mb-0 list-unstyled">
            <a class="mr-md-3" href="#">Terms</a>
            <a class="mr-md-3" href="#">Privacy</a>
            <a class="mr-md-3" href="#">Contact</a>
          </p>
        </div>
    </div>
    <!-- /.container -->
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
