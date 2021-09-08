<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Probleme;
use App\Models\Contribuez;

class Projet extends Model
{
    use HasFactory;
    protected $fillable = [
        'title', 'status', 'description', 'probleme_id'
    ];

    // relation entre les models
    public function probleme()
    {
        return $this->belongsTo(Probleme::class);
    }

}
