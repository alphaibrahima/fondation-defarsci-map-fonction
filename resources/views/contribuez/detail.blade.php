@extends('Layouts.master')

@section('title', 'Listes Des Projets')


@section('content')

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Details</h2>
            </div>
            <div>
              {{ $detail->descriptions }}
            <div>
                <a class="btn btn-primary mr-2" href="">Contribuer</a>
            </div>
        </div>
    </div>
@endsection