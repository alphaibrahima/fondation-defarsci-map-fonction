@extends('Layouts.master')

@section('title', 'Declaration Probleme')


@section('content')    
<div class="container mb-4">
    <div class="row">
        <div class="col-2"></div>
        <div class="col-8">

            <div class="pull-left text-center mb-2">
                <h2>Formulaire - De Declaration Probleme</h2>
            </div>
            <div class="pull-right text-center mb-4">
                <a class="hover " href="{{ route('problemes.index') }}"> Liste Des Problemes</a>
            </div>

            @if(session('status'))
            <div class="alert alert-success mb-1 mt-1">
                {{ session('status') }}
            </div>
        @endif
        
        <form action="{{ route('problemes.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
        
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-6">
                    <div class="form-group">
                        <strong>Nom :</strong>
                        <input type="text" name="nom" class="form-control" >
                    @error('nom')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                    </div>
                </div>
    
                <div class="col-xs-12 col-sm-6 col-md-6">
                    <div class="form-group">
                        <strong>Prenom :</strong>
                        <input type="text" name="prenom" class="form-control" >
                    @error('prenom')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                    </div>
                </div>
    
                
                <div class="col-xs-12 col-sm-6 col-md-6">
                    <div class="form-group">
                        <strong>Telephone :</strong>
                        <input type="text" name="tel" class="form-control" >
                        @error('tel')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                
                <div class="col-xs-12 col-sm-6 col-md-6">
                    <div class="form-group">
                        <strong>Email :</strong>
                        <input type="text" name="email" class="form-control" >
                    @error('email')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                    </div>
                </div>
    
            <div class="col-xs-12 col-sm-6 col-md-6">
                    <div class="form-group">
                        <strong>Lieu :</strong>
                        <input type="text" name="lieu" class="form-control" >
                    @error('lieu')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                    </div>
                </div>
    
                <div class="col-xs-12 col-sm-6 col-md-6">
                    <div class="form-group">
                        <strong>Lien Avec Le Lieu :</strong>
                        <input type="text" name="lien_avec_lieu" class="form-control" >
                    @error('lien_avec_lieu')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                    </div>
                </div>
    
            <div class="col-xs-12 col-sm-6 col-md-6">
                    <div class="form-group">
                        <strong>Profession :</strong>
                        <input type="text" name="profession" class="form-control" >
                    @error('profession')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                    </div>
            </div>
    
            <div class="col-xs-12 col-sm-6 col-md-6">
                <div class="form-group">
                    <strong>Nombre Population :</strong>
                    <input type="text" name="nbre_population" class="form-control" >
                    @error('nbre_population')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
            </div>
    
            <div class="col-xs-12 col-sm-5 col-md-5">
                <div class="form-group">
                    <strong>Latitude :</strong>
                    <input type="text" name="latitude" id="latitude" class="form-control" >
                    @error('Localisation')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="col-xs-12 col-sm-5 col-md-5">
                <div class="form-group">
                    <strong>Longitude :</strong>
                    <input type="text" name="long" id="longitude" class="form-control" >
                    @error('Localisation')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="col-xs-12 col-sm-2 col-md-2 mt-3">
                <a class="btn btn-outline-danger mt-1" id="get-location" style="border-radius: 25%;">
                  <i class="fas fa-map-marker-plus" style="font-size: 30px; "></i>
                </a>
            </div>
    
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Details :</strong>
                    <textarea class="form-control" style="height:150px" name="details" ></textarea>
                    @error('details')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
            </div>
                
    
                <button type="submit" class="btn btn-success ml-3">Envoyer</button>
            </div>
        
        </form>
        </div>
        <div class="col-2"></div>
    </div>
</div>


@stop

@section('script')
    {{-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha256-4+XzXVhsDmqanXGHaHvgh1gMQKX40OUvDEBTu8JcmNs=" crossorigin="anonymous"></script> --}}
    <script>
        $(document).ready(function(){
            let button = document.getElementById("get-location");
            let latText = document.getElementById("latitude");
            let longText = document.getElementById("longitude");

            button.addEventListener("click", function() {
            navigator.geolocation.getCurrentPosition(function(position) {
                let lat = position.coords.latitude;
                let long = position.coords.longitude;

                latText.value = lat;
                longText.value = long;
                // event.preventDefault();
            });
            });

        });
    </script>
@stop