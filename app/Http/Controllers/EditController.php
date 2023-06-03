<?php

namespace App\Http\Controllers;

use App\Models\Etudiant;
use App\Models\Ville;
use Illuminate\Http\Request;

class EditController extends Controller
{
    public function edit(Etudiant $etudiant){
        $villes = Ville::selectVille();
        return view('etudiants.edit', ['etudiant' => $etudiant], ['villes' => $villes]);
    }

    public function update(Request $request, Etudiant $etudiant)
    {
        $etudiant -> update([
            'nom' => $request -> nom,
            'adress' => $request -> adress,
            'phone' => $request -> phone,
            'email' => $request -> email,
            'date_de_naissance' => $request -> date_de_naissance,
        ]);

        return redirect(route('etudiants.show', $etudiant));
    }
}
