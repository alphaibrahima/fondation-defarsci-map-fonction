
@extends('Layouts.master')

@section('title', 'Editer Le Projets')


@section('content')

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2 class="text-center" >Editer</h2>
            </div>
            <div class="pull-right text-center">
                <a class="text-primary " href="{{ route('problemes.index') }}" enctype="multipart/form-data"> Retour</a>
            </div>
        </div>
    </div>

    @if(session('status'))
    <div class="alert alert-success mb-1 mt-1">
        {{ session('status') }}
    </div>
    @endif

    <div class="container">
        <div class="row">
            <div class="col-2"></div>
            <div class="col-8">
                <form action="{{ route('problemes.update',$probleme->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                        <div class="row">
                            <div class="col-xs-12 col-sm-6 col-md-6">
                                <div class="form-group">
                                    <strong>Nom :</strong>
                                    <input type="text" name="nom"  value="{{ $probleme->nom }}" class="form-control" placeholder="Sow">
                                @error('nom')
                                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                @enderror
                                </div>
                            </div>
                    
                            <div class="col-xs-12 col-sm-6 col-md-6">
                                <div class="form-group">
                                    <strong>Prenom :</strong>
                                    <input type="text" name="prenom" value="{{ $probleme->prenom }}" class="form-control" placeholder="Mamadou">
                                @error('prenom')
                                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                @enderror
                                </div>
                            </div>
                    
                            <div class="col-xs-12 col-sm-6 col-md-6">
                                <div class="form-group">
                                    <strong>Email :</strong>
                                    <input type="text" name="email" value="{{ $probleme->email }}" class="form-control" placeholder="mamadou@gmail.com">
                                @error('email')
                                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                @enderror
                                </div>
                            </div>
                    
                            <div class="col-xs-12 col-sm-6 col-md-6">
                                <div class="form-group">
                                    <strong>Prenom :</strong>
                                    <input type="text" name="tel" value="{{ $probleme->tel }}" class="form-control" placeholder="77 273 44 66">
                                @error('tel')
                                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                @enderror
                                </div>
                            </div>
                    
                            <div class="col-xs-12 col-sm-6 col-md-6">
                                <div class="form-group">
                                    <strong>Lieu :</strong>
                                    <input type="text" name="lieu" value="{{ $probleme->lieu }}" class="form-control" placeholder="Matam">
                                @error('lieu')
                                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                @enderror
                                </div>
                            </div>
                    
                            <div class="col-xs-12 col-sm-6 col-md-6">
                                <div class="form-group">
                                    <strong>Lien Avec Le Lieu :</strong>
                                    <input type="text" name="lien_avec_lieu" value="{{ $probleme->lien_avec_lieu }}" class="form-control" placeholder="Domicile">
                                @error('lien_avec_lieu')
                                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                @enderror
                                </div>
                            </div>
                    
                            <div class="col-xs-12 col-sm-6 col-md-6">
                                <div class="form-group">
                                    <strong>Profession :</strong>
                                    <input type="text" name="profession" value="{{ $probleme->profession }}" class="form-control" placeholder="Commerçant">
                                @error('profession')
                                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                @enderror
                                </div>
                            </div>
                    
                            <div class="col-xs-12 col-sm-6 col-md-6">
                                <div class="form-group">
                                    <strong>Nombre Population :</strong>
                                    <input type="text" name="nbre_population" value="{{ $probleme->nbre_population }}" class="form-control" placeholder="100 000">
                                @error('nbre_population')
                                    <div class="alert alert-danger mt-1 mb-1">{{$message }}</div>
                                @enderror
                                </div>
                            </div>
                    
                            <div class="col-xs-12 col-sm-5 col-md-5">
                                <div class="form-group">
                                    <strong>Latitude :</strong>
                                    <input type="text" name="latitude" id="latitude" value="{{ $probleme->latitude }}" class="form-control" placeholder="">
                                    @error('Latitude')
                                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-5 col-md-5">
                                <div class="form-group">
                                    <strong>Longitude :</strong>
                                    <input type="text" name="long" id="longitude" value="{{ $probleme->longitude }}" class="form-control" placeholder="">
                                    @error('Longitude')
                                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-2 col-md-2 mt-3">
                                <a class="btn btn-danger mt-1" id="get-location" style="border-radius: 25%;">
                                  <i class="fas fa-map-marker-plus" style="font-size: 30px; "></i>
                                </a>
                            </div>
                    
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Details :</strong>
                                    <textarea class="form-control" style="height:150px" name="details">
                                    {{$probleme->details}}
                                    </textarea>
                                    @error('details')
                                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        
                        <button type="submit" class="btn btn-success ml-3">Mise à Jour </button>
                    
                    </div>
            
                </form>
            </div>
            <div class="col-2"></div>
        </div>
    </div>


@stop

@section('script')
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha256-4+XzXVhsDmqanXGHaHvgh1gMQKX40OUvDEBTu8JcmNs=" crossorigin="anonymous"></script>
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