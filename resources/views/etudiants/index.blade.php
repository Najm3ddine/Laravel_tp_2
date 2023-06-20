@extends('layouts/app');
@section('title', config('app.name'))
@section('titleHeader',  __('lang.students_show'))

@section('content')
    <div class="row">
    <div class="col text-end">
        <a href="{{route('etudiants.create')}}" class="btn btn-outline-primary btn sm mt-4 mb-3">@lang('lang.add_student')</a>
    </div>
</div>
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h4>@lang('lang.students_list')</h4>
            </div>
            <div class="card-body">
                <ul>
                    @forelse ($etudiants as $etudiant)
                    <li><a href="{{route('etudiants.show', $etudiant->id)}}">{{$etudiant->nom}}</a></li>
                    @empty
                    <li class="text-danger"><a href="">Aucun etudiant trouve</a></li>
                    @endforelse
                </ul>
                <a href="/" class="btn btn-primary btn sm mt-3">Precedent</a>
            </div>
        </div>
    </div>
</div>
@endsection
