{{--  --}}
@extends('Layouts.master')

@section('title', 'Ajout Des Projets')


@section('content')
    
    <div class="container">
        <div class="row">
            <div class="col-md-12">

                <!-- Titre & button -->
                <div class="pull-left" style="display:flex; justify-content: center;">
                    <h2 class="m-2"> Projets </h2>

                    <a class="btn btn-outline-success btn-lg m-2 arrondi" href="{{ url('/ajout-projet') }}"> 
                        Ajouter
                    </a>
                </div>

                <!-- Ntification -->

                @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    <p>{{ $message }}</p>
                </div>
                @endif

                <!-- fin n -->

                <!-- Table d'information -->
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
                            {{Str::limit($post->description, 30, $end='.......')}}
                        </td>
            
                        <td style="display:flex; border-bottom:0px; ">
                            <a class="btn btn-primary mr-2" href="{{ url('/edit-projet/'.$post->id) }}">
                                Edit
                            </a>
            
                            <form action="{{ url('/sup-projet/'.$post->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                
                                <button type="submit" class="btn btn-danger">Del</button>
                            </form>
            
                        </td>
            
                    </tr>
                    @endforeach
                </table>
                <!-- fin table -->

            </div>
        </div>
    </div>

    {{-- {!! $data->links() !!} --}}

@stop