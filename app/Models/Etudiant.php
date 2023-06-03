<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Etudiant extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom',
        'adress',
        'phone',
        'email',
        'date_de_naissance',
        'ville_id'
    ];

    public function ville(): BelongsTo
    {
        return $this->belongsTo(Ville::class);
    }
}
