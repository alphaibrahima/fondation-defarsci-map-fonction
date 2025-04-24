
@extends('Layouts.master')

@section('title', 'Ajout Des Projets')


@section('content')
    <div class="row">
        <div class="col-md-3">
        </div>

        <div class="col-md-6">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left mb-2">
                    <h2>Ajouter Des Projets</h2>
                </div>
                <div class="pull-right">
                    <a class="btn btn-primary" href="{{ url('/projetlistes') }}"> Retour </a>
                </div>
            </div>
        {{-- </div> --}}
        
        @if(session('status'))
            <div class="alert alert-success mb-1 mt-1">
                {{ session('status') }}
            </div>
        @endif
        
        <form action="{{ url('/ajout-projet') }}" method="POST" enctype="multipart/form-data">
             @csrf
        
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Projet :</strong>
                        <input type="text" name="title" class="form-control" placeholder="Nom Probleme">
                    @error('title')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                    </div>
                </div>
    
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Descritpion Du Projet :</strong>
                        <textarea class="form-control" style="height:150px" name="description" placeholder="Description"></textarea>
                        @error('description')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div> 
                
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Probleme</strong>
                        <select class="form-control" name="probleme_id">
                            @foreach ($problemes as $item)
                                <option value="{{$item->id}}">{{$item->lieu}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
    
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Status : </strong>
                        <select class="form-control" name="status">
                            <option value="Non resolu">Non resolu</option>
                            <option value="En etude">En etude</option>
                            <option value="En cours de traitement">En cours de traitement</option>
                            <option value="Resolu">Resolu</option>
                        </select>
                    </div> 
                </div>

                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Image :</strong>
                        <input type="file" name="image" class="form-control" >
                        @error('image')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                    </div>
                </div>
                <button type="submit" class="btn btn-primary ml-3">Envoyer</button>
            </div>
        
        </form>            
        </div>
        <div class="col-md-3">
    </div>
@stop