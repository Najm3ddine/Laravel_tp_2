@extends('layouts.app')
@section('title', 'Ajouter un article')
@section('titleHeader', 'Ajouter un article')
@section('content')
    <div class="row mt-4 justify-content-center">
        <div class="col-6">
            <div class="card">
                <form method="post">
                    @csrf
                    <div class="card-header">
                        Formulaire
                    </div>
                    <div class="card-body">
                        <label for="title">Titre en Francais</label>
                        <input type="text" id="title_fr" name="title_fr" class="form-control">
                        <label for="title">Titre en Anglais</label>
                        <input type="text" id="title_en" name="title_en" class="form-control">
                        <label for="article">Article en Francais</label>
                        <textarea name="body_fr" id="article" class="form-control"></textarea>
                        <label for="article">Article en Anglais</label>
                        <textarea name="body_en" id="article" class="form-control"></textarea>
                    </div>
                    <div class="card-footer text-center">
                        <input type="submit" class="btn btn-success" value="Save">
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
