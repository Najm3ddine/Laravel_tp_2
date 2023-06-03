<?php

namespace App\Http\Controllers;

use App\Models\Etudiant;
use App\Models\Ville;
use Illuminate\Http\Request;

class DestroyController extends Controller
{
    public function destroy(Etudiant $etudiant)
    {
        $etudiant -> delete();
        return redirect(route('etudiants.index'));
    }
}
