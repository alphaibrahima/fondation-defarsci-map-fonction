<?php

namespace App\Http\Controllers;
use App\Models\Projet;
use Illuminate\Http\Request;
use Stripe\Stripe;
use Stripe\Charge;

class ContribuezController extends Controller
{
    // Page pour afficher tous les projets
    public function index()
    {
        $data = Projet::all();
        return view('contribuez.index', compact('data'));
    }

    //  Voir les details d'un projet
    public function details($details)
    {
        $detail = Projet::find($details);
        return view('contribuez.detail', compact('detail'));
    }


    public function contribution(Request $request)
    {
        Stripe::setApiKey('pr_test');
        try{
            $charge = Charge::create(array(
                "amount" => $request-> total * 100,
                "currency" => "GBP",
                "source" => "tok_mastercard",
                "description" => "Test charge",
            ));
        }catch(\Exeption $e) {
             return "ok";
         }
      
    }

    // partie ou on contribue
    public function participation(Request $request, $projet)
    {
        // $authed_user = auth()->user();

        $post = Projet::find($projet);
        $montant = $request->montant;
        $payment_method = $request->payment_method;
        // $authed_user->charge($montant, $payment_method );
        $charge = Charge::create($montant, $payment_method);
        return view('contribuez.participate', compact('post'));
        // dd($post);
    
    }
}
