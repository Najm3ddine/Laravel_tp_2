<?php

namespace App\Http\Controllers;

use App\Models\Etudiant;
use Illuminate\Http\Request;

class ShowController extends Controller
{
    public function show(Etudiant $etudiant) {
        return view('etudiants.show', ['etudiant'=>$etudiant]);
    }
}
