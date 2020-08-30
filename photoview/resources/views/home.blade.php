@extends('layouts.app')

@section('content')
@include('inc.messages')
<main role="main secondary-bg text-white">
    <section class="jumbotron text-center secondary-bg text-white">
      <div class="container">
        <h1>PhotoView</h1>
        <p class="lead text-white">Create your own customized album and show it to your friends</p>
        <p>
          <a href="/create" class="btn btn-primary my-2">Create an Album</a>
          <a href="/albums" class="btn btn-secondary my-2">Watch Recent albums</a>
        </p>
      </div>
    </section>
    <div id="carouselExampleIndicators" class="container-fluid p-4 carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="d-block w-100" src="/assets/1.jpg"  alt="First slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="/assets/2.jpg" alt="Second slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="/assets/3.jpg" alt="Third slide">
          </div>
          <div class="carousel-item active">
            <img class="d-block w-100" src="/assets/4.jpg"  alt="Fourth slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="/assets/5.jpg" alt="Fifth slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="/assets/6.jpg" alt="Sixth slide">
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
     
        </main>

        @endsection