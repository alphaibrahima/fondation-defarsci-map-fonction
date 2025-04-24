<?php

namespace App\Http\Controllers;

use App\Models\Projet;
use App\Models\Probleme;
use Illuminate\Http\Request;

class ProjetCrudController extends Controller
{
    //
    public function index()
    {
        $data = Projet::with('probleme')->get();
        return view('projet.index', compact('data'));
    }

    // fonction pour afficher le formulaire
    public function create()
    {
        $projets = Projet::all();
        $problemes = Probleme::all();
        return view('projet.create', compact('problemes', 'projets'));
    }

    // fonction pour le traitement et sauvegarde du formulaire
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            'status' => 'required',
            'description' => 'required',
        ]);
        $path              = $request->file('image')->store('public/images');
        $post              = new Projet;
        $post->name        = $request->title;
        $post->status      = $request->status;
        $post->description = $request->description;
        $post->probleme_id = $request->probleme_id;
        $post->image       = $path;
        $post->save();
     
        return redirect('/projetlistes')
                        ->with('success','Envoyé Avec Success .');
    }

    public function edit($projet)
    {
        $problemes = Probleme::all();
        $projet = Projet::find($projet);
        return view('projet.edit', compact('projet', 'problemes'));
    }

    public function update(Request $request, $projet)
    {
        $request->validate([
            'title' => 'required',
            'status' => 'required',
            'description' => 'required',
        ]);
        
        $post = Projet::find($projet);

        if($request->hasFile('image')){
            $request->validate([
              'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            ]);
            $path = $request->file('image')->store('public/images');
            $post->image = $path;
        }
        
        $post->name        = $request->title;
        $post->status      = $request->status;
        $post->description = $request->description;
        $post->probleme_id = $request->probleme_id;
        $post->save();
    
        return redirect('/projetlistes')
                        ->with('success','Mise à jour Reussi');
    }

    public function delete($projet)
    {
        Projet::find($projet)->delete();
        return redirect()->back();
    }
}
