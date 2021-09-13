@extends('Layouts.master')

@section('title', 'Listes Des Projets')


@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-12">

                <div class="text-center">
                    <h2>Listes Des Projets </h2>
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
                        </td>
                        <td>
                            {{ $post->name }}
                        </td>
                        <td>
                            {{ Str::limit($post->descriptions, 90) }}
                            <span>  <a class="btn btn-primary mr-2" href=" {{ url('/projetlisteContribuez/details/'.$post->id) }}">lire la suite</a> </span>
                        </td>
            
                        <td style="">
                            <div>
                                <a class="btn btn-primary mr-2" href="{{ url('/projetlisteContribuez/contibution/'.$post->id) }}">
                                    Contribuer 
                                </a>
                            </div>
                        </td>
            
                    </tr>
                    @endforeach
                </table>

            </div>
        </div>
    </div>

    

@endsection