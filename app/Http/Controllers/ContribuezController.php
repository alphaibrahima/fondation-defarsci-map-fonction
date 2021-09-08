<?php

namespace App\Http\Controllers;
use App\Models\Projet;
use Illuminate\Http\Request;
use Stripe\Stripe;
use Stripe\Charge;

class ContribuezController extends Controller
{
    public function index()
    {
        $data = Projet::all();
        return view('contribuez.index', compact('data'));
    }

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
}
