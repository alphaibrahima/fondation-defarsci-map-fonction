@extends('Layouts.master')

@section('title', 'Listes Des Projets')


@section('content')
<div class="container-fluid">
    <div class="row">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" >
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
              
            </ol>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img class="d-block w-100" src="{{ asset('/sta_img/12.jpg') }}" alt="First slide" >
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" src="{{ asset('/sta_img/13.jpg') }}" alt="Second slide" >
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
</div>  

<div class="container mt-4">
    <div class="row">
        @foreach ($data as $post)
        <div class="col-12 col-sm-3 col-md-4 mt-2">
            <div class="card" >
                <img class="card-img-top" src="{{ Storage::url($post->image) }}" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title">{{ $post->name }}</h5>
                  <p class="card-text">
                      {{ Str::limit($post->description, 60) }}
                      <span>
                        <a class="text-muted" href=" {{ url('/projetlisteContribuez/details/'.$post->id) }}">
                            lire la suite
                        </a> 
                    </span>
                  </p>
                  <a href="{{ url('/projetlisteContribuez/contibution/'.$post->id) }}" class="btn btn-primary">Contribuez ?</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
    

@endsection