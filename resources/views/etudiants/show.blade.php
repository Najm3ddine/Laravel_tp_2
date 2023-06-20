@extends('layouts/app');
@section('title', "Etudiants")
@section('titleHeader','Etudiant')

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card mt-4">
            <div class="card-header">
                <h3>Informations personnelles</h3>
            </div>
            <div class="card-body">
                <p>Nom complet: {{$etudiant->nom}}</p>
                <p>Email: {{$etudiant->email}}</p>
                <p>Adresse: {{$etudiant->adress}}</p>
                <p>Telephone: {{$etudiant->phone}}</p>
                <p>Email: {{$etudiant->email}}</p>
                <p>Date de naissance: {{$etudiant->date_de_naissance}}</p>
                <p>Ville: {{$etudiant->ville ?-> nom}}</p>
            </div>
        </div>
    </div>
    <div class="col-4">
        <a href="{{route('etudiants.index')}}" class="btn btn-primary btn sm mt-3">Precedent</a>
        <a href="{{route('etudiants.edit', $etudiant->id)}}" class="btn btn-success mt-3">Modifier</a>

        <button type="button" class="btn btn-danger col-3 mt-3" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
            Effacer
        </button>
    </div>
</div>

{{-- modal de confirmation de suppression --}}

<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Effacer</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Etes vous sures de vouloir effacer: {{$etudiant->nom}}?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <form action="/etudiants-destroy/{{ $etudiant->id }}" method="post">
                    @csrf
                        @method('delete')
                    <input type="submit" value="Effacer" class="btn btn-danger">
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
