<?php

namespace App\Http\Controllers;

use App\Models\Etudiant;
use App\Models\Ville;
use Illuminate\Http\Request;

class CreateController extends Controller
{
    public function create() {
        $villes = Ville::selectVille();
        return view('etudiants.create', ['villes' => $villes]);
    }

    public function store(Request $request){
        $newEtudiant = Etudiant::create ([
            'nom' => $request -> nom,
            'adress' => $request -> adress,
            'phone' => $request -> phone,
            'email' => $request -> email,
            'date_de_naissance' => $request -> date_de_naissance,
            'ville_id' => $request -> ville_id,
            'id' =>  1,
        ]);
        return redirect(route('etudiants.index', $newEtudiant->id));
    }
}
