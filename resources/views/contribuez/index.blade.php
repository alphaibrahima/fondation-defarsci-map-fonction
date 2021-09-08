@extends('Layouts.master')

@section('title', 'Listes Des Projets')


@section('content')

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Listes Des Projets </h2>
            </div>
        </div>
    </div>

    <table class="table table-bordered">
        <tr>
            <th>Id</th>
            <th>Image</th>
            <th>Nom</th>
            <th>Description</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($data as $post)
        <tr>
            <td>
                {{ $post->id }}
            </td>
            <td>
                <img src="{{ Storage::url($post->image) }}" height="75" width="75" alt="" />
                <img src="{{ URL::asset($post->image) }}" height="75" width="75" alt="" />
            </td>
            <td>
                {{ $post->name }}
            </td>
            <td>
                {{ Str::limit($post->descriptions, 90) }}
                <span>  <a class="btn btn-primary mr-2" href=" {{ url('/projetlisteContribuez/details/'.$post->id) }}">lire la suite</a> </span>
            </td>

            <td style="display: flex">
                <div>
                    <a class="btn btn-primary mr-2" href="">Contribuer</a>
                </div>
            </td>

        </tr>
        @endforeach
    </table>

@endsection