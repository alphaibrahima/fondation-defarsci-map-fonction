{{--  --}}
@extends('Layouts.master')

@section('title', 'Ajout Des Projets')


@section('content')

<div id="carouselExampleIndicators" class="carousel slide mb-2" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active ">
       <img src="{{ asset('/sta_img/12.jpg') }}" class="img-fluid qsn" alt="">
      </div>
      <div class="carousel-item ">
        <img src="{{ asset('/sta_img/13.jpg') }}" class="img-fluid qsn" alt="">
      </div>
      <div class="carousel-item ">
        <img src="{{ asset('/sta_img/14.jpg') }}" class="img-fluid qsn" alt="">
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

<div class="container text-center">
    <h2>A Propos</h2>
    <p >
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum, voluptatum odio iure adipisci, 
        expedita suscipit vitae consequuntur quibusdam officiis veniam quam laboriosam vel, reprehenderit 
        in accusamus corporis rem eveniet error.
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum, voluptatum odio iure adipisci, 
        expedita suscipit vitae consequuntur quibusdam officiis veniam quam laboriosam vel, reprehenderit 
        in accusamus corporis rem eveniet error.
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum, voluptatum odio iure adipisci, 
        expedita suscipit vitae consequuntur quibusdam officiis veniam quam laboriosam vel, reprehenderit 
        in accusamus corporis rem eveniet error.
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum, voluptatum odio iure adipisci, 
        expedita suscipit vitae consequuntur quibusdam officiis veniam quam laboriosam vel, reprehenderit 
        in accusamus corporis rem eveniet error.
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum, voluptatum odio iure adipisci, 
        expedita suscipit vitae consequuntur quibusdam officiis veniam quam laboriosam vel, reprehenderit 
        in accusamus corporis rem eveniet error.
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum, voluptatum odio iure adipisci, 
        expedita suscipit vitae consequuntur quibusdam officiis veniam quam laboriosam vel, reprehenderit 
        in accusamus corporis rem eveniet error.
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum, voluptatum odio iure adipisci, 
        expedita suscipit vitae consequuntur quibusdam officiis veniam quam laboriosam vel, reprehenderit 
        in accusamus corporis rem eveniet error.
    </p>
</div>

<div class="container text-center">
    <h2> Notre Equipe </h2>
    <div class="row  mb-4">

        <div class="col-3">
            <div class="card" >
                <img src="{{ asset('/sta_img/5.jpeg') }}" class="img-fluid " alt="" style="border-radius:100%">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                 
                  <a href="#" class="btn btn-sm btn-primary">Facebook</a>
                  <a href="#" class="btn btn-sm btn-info">Linkeding</a>
                  <a href="#" class="btn btn-sm btn-danger">Twiter</a>
                </div>
            </div>
        </div>

        <div class="col-3">
            <div class="card" >
                <img src="{{ asset('/sta_img/5.jpeg') }}" class="img-fluid " alt="" style="border-radius:100%">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  
                  <a href="#" class="btn btn-sm btn-primary">Facebook</a>
                  <a href="#" class="btn btn-sm btn-info">Linkeding</a>
                  <a href="#" class="btn btn-sm btn-danger">Twiter</a>
                </div>
            </div>
        </div>

        <div class="col-3">
            <div class="card" >
                <img src="{{ asset('/sta_img/5.jpeg') }}" class="img-fluid " alt="" style="border-radius:100%">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  
                  <a href="#" class="btn btn-sm btn-primary">Facebook</a>
                  <a href="#" class="btn btn-sm btn-info">Linkeding</a>
                  <a href="#" class="btn btn-sm btn-danger">Twiter</a>
                </div>
            </div>
        </div>

        <div class="col-3">
            <div class="card" >
                <img src="{{ asset('/sta_img/5.jpeg') }}" class="img-fluid " alt="" style="border-radius:100%">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  
                  <a href="#" class="btn btn-sm btn-primary">Facebook</a>
                  <a href="#" class="btn btn-sm btn-info">Linkeding</a>
                  <a href="#" class="btn btn-sm btn-danger">Twiter</a>
                </div>
            </div>
        </div>

    </div>
</div>

@stop