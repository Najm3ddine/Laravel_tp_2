@extends('layout/app');
@section('title', "Ajouter un etudiant")
@section('titleHeader','Ajouter un etudiant')

@section('content')

<form method="post">
        @csrf {{-- lien pour la securite laravel --}}
        <div class="row mt-4 justify-content-center">
            <div class="col-6">
                <div class="card">
                    <div class="card-header">
                        Formulaire
                    </div>
                    <div class="card-body">
                        <label for="nom">Nom</label>
                        <input type="text" id="nom" name="nom" class="form-control">
                        <label for="adress">Adresse</label>
                        <input type="text" id="adress" name="adress"  class="form-control">
                        <label for="phone">Telephone</label>
                        <input type="number" id="phone" name="phone"  class="form-control">
                        <label for="email">Email</label>
                        <input type="email" id="email" name="email"  class="form-control">
                        <label for="date_de_naissance">Date de naissance</label>
                        <input type="date" id="date_de_naissance" name="date_de_naissance"  class="form-control">

                        <label class=" mt-3">Ville</label>
                        <select name="ville_id" id="ville" class=" form-control">
                            @foreach ($villes as $ville)
                                <option value="{{$ville->id}}">{{$ville->nom}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="card-footer text-center">
                        <input type="submit" class="btn btn-success" value="save">
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection
