<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Probleme;


class ProblemeController extends Controller
{
    //Afficher les datas dans la page index
    public function index()
    {
        //
        $data['problemes'] = Probleme::orderBy('id','desc')->paginate(5);
    
        return view('problemes.index', $data);
    }

    // Affichage de la apage formulaire pour ajouter les data
    public function create()
    {
        //
        return view('problemes.create');
    }

    public function store(Request $request)
    {
        //
        $request->validate([
            'nom' => 'required',
            'prenom' => 'required',
            'tel' => 'required',
            'email' => 'required',
            'lieu' => 'required',
            'lien_avec_lieu' => 'required',
            'profession' => 'required',
            'nbre_population' => 'required',
            'latitude' => 'required',
            'long' => 'required',
            'details' => 'required',
        ]);
       
            $post = new Probleme;

            $post->nom = $request->nom;
            $post->prenom = $request->prenom;
            $post->tel = $request->tel;
            $post->email = $request->email;
            $post->lieu = $request->lieu;
            $post->lien_avec_lieu = $request->lien_avec_lieu;
            $post->profession = $request->profession;
            $post->nbre_population = $request->nbre_population;
            $post->latitude = $request->latitude;
            $post->longitude = $request->long;
            $post->details = $request->details;

            $post->save();
     
        return redirect()->route('problemes.index')
                        ->with('success','Declaration Reussi.');
    }


    public function show($id)
    {
        //
    }

    //  Affichage du formulaire pour mettre à jour les datas 
    public function edit(Probleme $probleme)
    {
        //
        return view('problemes.edit',compact('probleme'));
    }

    // Mise à jour des donnees 
    public function update(Request $request, $id)
    {
        //
        $request->validate([
            'nom' => 'required',
            'prenom' => 'required',
            'tel' => 'required',
            'email' => 'required',
            'lieu' => 'required',
            'lien_avec_lieu' => 'required',
            'profession' => 'required',
            'nbre_population' => 'required',
            'latitude' => 'required',
            'long' => 'required',
            'details' => 'required',
        ]);
       
        // $post = new Probleme;
        $post = Probleme::find($id);

        $post->nom = $request->nom;
        $post->prenom = $request->prenom;
        $post->tel = $request->tel;
        $post->email = $request->email;
        $post->lieu = $request->lieu;
        $post->lien_avec_lieu = $request->lien_avec_lieu;
        $post->profession = $request->profession;
        $post->nbre_population = $request->nbre_population;
        $post->latitude = $request->latitude;
        $post->longitude = $request->long;
        $post->details = $request->details;

        $post->save();
     
        return redirect()->route('problemes.index')
                        ->with('success','Mise à Jour Reussi.');
    }

    // suppresion des donnees
    public function destroy(Probleme $probleme)
    {
        //
        $probleme->delete();
        // Probleme::find($probleme)->delete();;
        return redirect()->back();
        // $probleme->delete();
        // return redirect()->route('problemes.index')
        //                 ->with('success','Supression reussi');
    }

}
