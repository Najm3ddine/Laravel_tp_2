@extends('layouts/app');
@section('title', config('app.name'))
@section('titleHeader', __('lang.students_show'))

@section('content')
    <div class="row">
            <div class="col-12 text-center">
                <a href="{{route('etudiants.index')}}" class="btn btn-outline-primary mt-5">@lang('lang.students_show')</a>
            </div>
        </div>
    </div>
@endsection
