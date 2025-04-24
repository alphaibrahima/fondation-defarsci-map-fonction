<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Probleme;
use App\Models\Contribuez;
use Illuminate\Support\Facades\Storage;

class Projet extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'name', 'status', 'description', 'probleme_id', 'image'
    ];

    // relation entre les models
    public function probleme()
    {
        return $this->belongsTo(Probleme::class);
    }
    
    // Mutateur pour gérer le champ image lors de l'enregistrement par Filament
    public function setImageAttribute($value)
    {
        // Si la valeur est une chaîne de caractères et qu'elle commence par "public/", c'est qu'elle a été enregistrée via le système ancien
        if (is_string($value) && strpos($value, 'public/') === 0) {
            $this->attributes['image'] = $value;
        } 
        // Sinon, c'est que c'est une nouvelle valeur enregistrée par Filament
        else {
            $this->attributes['image'] = 'public/images/' . $value;
        }
    }
    
    // Accesseur pour récupérer le chemin de l'image formaté correctement pour Filament
    public function getImageUrlAttribute()
    {
        if (!$this->image) {
            return null;
        }
        
        return Storage::url($this->image);
    }
}