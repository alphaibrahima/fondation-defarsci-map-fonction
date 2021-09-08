@extends('Layouts.master')

@section('title', 'Les Problemes Declarés')

@section('style')

@section('content')

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Listes Des Projets </h2>
            </div>
            <div class="pull-right mb-2">
                <a class="btn btn-success" href="{{ route('problemes.create') }}"> Ajouter</a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered">
        <tr>
            <th>Id</th>
            <th>Prenoms</th>
            <th>Noms</th>
            <th>Tels</th>
            <th>Email</th>
            <th>Lieu</th>
            <th>Lien Avec Le Lieu</th>
            <th>profession</th>
            <th>Nbre population</th>
            <th>Latitude</th>
            <th>Longitude</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($problemes as $probleme)
        <tr>
            <td>{{ $probleme->id }}</td>
            <td>{{ $probleme->prenom }}</td>
            <td>{{ $probleme->nom }}</td>
            <td>{{ $probleme->tel }}</td>
            <td>{{ $probleme->email }}</td>
            <td>{{ $probleme->lieu }}</td>
            <td>{{ $probleme->lien_avec_lieu }}</td>
            <td>{{ $probleme->profession }}</td>
            <td>{{ $probleme->nbre_population }}</td>
            <td>{{ $probleme->latitude }}</td>
            <td>{{ $probleme->longitude }}</td>
            <td style="display: flex">
                <div>
                    <a class="btn btn-warning btn-sm" href="{{ route('problemes.edit',$probleme->id) }}" 
                        style="margin-right: 2px; color:#fff;">
                        <i class="far fa-edit"></i>
                    </a>
                </div>

                <form action="{{ route('problemes.destroy',$probleme->id) }}" method="POST" class="form-inline">
                    @csrf
                    @method('DELETE')
    
                    <button type="submit" class="btn btn-danger btn-sm">
                        <i class="far fa-trash-alt"></i>
                    </button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>

    {!! $problemes->links() !!}


@stop

@section('script')
    
    <script>
        $(document).ready(function(){

        });
    </script>
@stop