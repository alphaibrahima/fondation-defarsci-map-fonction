<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Projet;

class Probleme extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom', 'prenom', 'tel', 'email', 'lieu', 'lien_avec_lieu', 'profession', 'nbre_population', 'latitude', 'long', 'details'
    ];

    public function projets()
    {
        return $this->hasMany(Projet::class);
    }

}
