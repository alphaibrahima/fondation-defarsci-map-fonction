@extends('Layouts.master')

@section('title', 'Listes Des Projets')


@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>{{ Str::upper($detail->name) }}</h2>
            </div>
            <img src="{{ Storage::url($detail->image) }}" alt="">
            <div>
              {{ $detail->description }}
            <div>
                <a class="btn btn-primary mt-4" href="{{ url('/projetlisteContribuez/contibution/'.$detail->id) }}">
                    Contribuez ?
                </a>
            </div>
        </div>
    </div>
</div>
@endsection