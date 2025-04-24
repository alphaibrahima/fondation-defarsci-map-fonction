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
    public function details(Request $request, $details)
    {
        $detail = Projet::find($details);
        // dd($detail);
        return view('contribuez.detail', compact('detail'));
    }


    // public function contribution(Request $request)
    // {
    //     Stripe::setApiKey('pr_test');
    //     try{
    //         $charge = Charge::create(array(
    //             "amount" => $request-> total * 100,
    //             "currency" => "GBP",
    //             "source" => "tok_mastercard",
    //             "description" => "Test charge",
    //         ));
    //     }catch(\Exeption $e) {
    //          return "ok";
    //      }
      
    // }

    // partie ou on contribue
    public function participation(Request $request, $projet)
    {
        return view('contribuez.participate');

    }

    // partie traiment de la participation
    public function participationStore(Request $request )
    {
          
        $token=Stripe::setApiKey('sk_test_51JUagXA0Pqxe87f51KuqT8dXF8scxs37veYFkvMiDZKJ3JaFmRSnfl0AixFksh1NjCwGyxmY3g8AVVjRH9iQkWTw009FP4S1zZ');
        // $post = Projet::find($projet);
        $montant = $request->montant;
        $payment_method = $request->payment_method;
           
        
        // dd($payment_method);
        
    
        try {
            // $charges = Charge::create(array(
            //     "amount" => $request->montant * 100,
            //     "currency" => "usd",
            //     "source" => $payment_method,
            //     // "source" => $token,
            //     "description" => "Test Charges"
            // ));

            
            $intent = \Stripe\PaymentIntent::create([
                'setup_future_usage' => 'off_session',
                'amount' =>$request->montant * 100,
                'currency' => 'usd',
                "source" =>$token,
            ]);

        }catch(\Exeption $e) {
            return "ok";
        }
            
    
        // fin test
      
        // $authed_user->charge($montant, $payment_method );
        // $charge = Charge::create($montant, $payment_method);
        // dd(config('services.stripe.secret_key'));
        
        return redirect('/');
        // ->with('success','Mise à jour Reussi');

        
    }
}
