{{--  --}}
@extends('Layouts.master')

@section('title', 'Ajout Des Projets')


@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Listes Des Projets </h2>
            </div>
            <div class="pull-right mb-2">
                <a class="btn btn-success" href="{{ url('/ajout-projet') }}"> Ajouter</a>
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
            <th>Image</th>
            <th>Nom</th>
            <th>Status</th>
            <th>Probleme</th>
            <th>Details</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($data as $post)
        <tr>
            <td>
                {{ $post->id }}
            </td>
            <td>
                <img src="{{ Storage::url($post->image) }}" height="75" width="75" alt="" />
            </td>
            <td>
                {{ $post->name }}
            </td>
            <td>
                {{ $post->status }}
            </td>
            <td>
                {{ $post->probleme->lieu }}
            </td>
            <td>
                {{ $post->descriptions }}
            </td>

            <td style="display: flex">
                <div>
                    <a class="btn btn-primary mr-2" href="{{ url('/edit-projet/'.$post->id) }}">Edit</a>
                </div>

                <form action="{{ url('/sup-projet/'.$post->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
    
                    <button type="submit" class="btn btn-danger">Sup</button>
                </form>

            </td>

        </tr>
        @endforeach
    </table>

    {{-- {!! $data->links() !!} --}}

@stop