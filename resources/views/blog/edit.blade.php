@extends('layouts.app')
@section('title', 'Modifier un article')
@section('titleHeader', 'Modifier un article')
@section('content')
    <div class="row mt-4 justify-content-center">
        <div class="col-6">
            <div class="card">
                <form method="post">
                    @csrf
                    @method('put')
                    <div class="card-header">
                        Formulaire
                    </div>
                    <div class="card-body">
                        <label for="title">Title en Francais</label>
                        <input type="text" id="title_fr" name="title_fr" class="form-control" value="{{$blogPost->title_fr}}">
                        <label for="title">Title en Anglais</label>
                        <input type="text" id="title_en" name="title_en" class="form-control" value="{{$blogPost->title_en}}">
                        <label for="article">Article</label>
                        <textarea name="body_fr" id="article_fr" class="form-control">{{$blogPost->body_fr}}</textarea>
                        <label for="article">Article en Anglais</label>
                        <textarea name="body_en" id="article_en" class="form-control">{{$blogPost->body_en}}</textarea>
                    </div>
                    <div class="card-footer text-center">
                        <input type="submit" class="btn btn-success" value="Save">
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
