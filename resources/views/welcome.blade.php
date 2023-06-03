@extends('layout/app');
@section('title', config('app.name'))
@section('titleHeader', config('app.name'))

@section('content')
    <div class="row">
            <div class="col-12 text-center">
                <strong></strong>
                <a href="{{route('etudiants.index')}}" class="btn btn-outline-primary mt-5">Afficher la liste des étudiants</a>
            </div>
        </div>
    </div>
@endsection
