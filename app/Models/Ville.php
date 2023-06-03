<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;


class Ville extends Model
{
    use HasFactory;

    // methode globale pour la requette OrderBy category
    static public function selectVille(){
        $query = Ville::Select()
                ->OrderBy('nom')
                ->get();
        return $query;
    }

    public function etudiants(): HasMany
    {
        return $this->hasMany(Etudiant::class);
    }
}
