
@extends('Layouts.master')

@section('title', 'Editer Le Projet')


@section('content')
    <div class="container">
        <div class="row">
            <div class="col-2"></div>

            <div class="col-8 mb-4">

                <div class="row">
                    <div class="col-lg-12 margin-tb">
                        <div class="pull-left">
                            <h2>Editer</h2>
                        </div>
                        <div class="pull-right">
                            <a class="btn btn-primary" href="{{ url('/projetlistes') }}" enctype="multipart/form-data"> Retour</a>
                        </div>
                    </div>
                </div>
            
                @if(session('status'))
                <div class="alert alert-success mb-1 mt-1">
                    {{ session('status') }}
                </div>
                @endif
                <form action="{{ url('/edit-projet/'.$projet->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
            
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Nom :</strong>
                                <input type="text" name="title" value="{{ $projet->name }}" class="form-control" placeholder="Post Title">
                                @error('name')
                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Probleme</strong>
                                <select class="form-control" name="probleme_id">
                                <option value="{{$projet->probleme->id}}" selected >{{$projet->probleme->lieu}}</option>
                                    @foreach ($problemes as $item)
                                        <option value="{{$item->id}}"  >{{$item->lieu}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Description :</strong>
                                <textarea class="form-control" style="height:150px" name="description" placeholder="Post Description">{{$projet->description}}</textarea>
                                @error('description')
                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Status</strong>
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
                            <input type="file" name="image" class="form-control" value="{{ $projet->image }}" >
                            @error('image')
                            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                        </div>
                        <div class="form-group">
            
                        <img src="{{ Storage::url($projet->image) }}" height="200" width="200" alt="" />
            
            
                        </div>
                    </div>
                        
                        <button type="submit" class="btn btn-primary ml-3">Mise à Jour </button>
                    
                    </div>
            
                </form>
            </div>
            <div class="col-2"></div>
        </div>
    </div>

@stop

