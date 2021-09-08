<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Projet;
use App\Models\Probleme;

class ProjetController extends Controller
{
    public function index(){
        return Projet::with('probleme')->get();
        // return Projet::all();
    }
}
