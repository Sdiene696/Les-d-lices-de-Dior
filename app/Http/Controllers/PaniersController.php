<?php

namespace App\Http\Controllers;

use id;
use App\Models\User;
use App\Models\Plats;
use App\Models\Commandes;
use Illuminate\Http\Request;

use Stripe\Stripe;
use Stripe\Checkout\Session;

class PaniersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    
     public function ajouterpanier($id, Request $request)
    {
        $plat=Plats::find($id);
        $panier=session('panier',[]);
        if (isset($panier[$id])) {
            $panier[$id]['stock']=$panier[$id]['stock'] + 1;
        }else{
            $panier[$id] = [
            "id"=> $plat->id,    
            "nom"=> $plat->nom,
            "stock"=> 1,
            "prix"=>$plat->prix,
            "image"=>$plat->image,
            "description"=>$plat->description,
           ];
        }
        
        session()->put('panier',$panier);
        return redirect()->back();
    }
    public function voirpanier (Request $request){
             
        return view('paniers.details');

    }
    public function suppanier($id,Request $request){
        
         $panier = session()->get('panier', []);

       if (isset($panier[$id])) {
          unset($panier[$id]);
          session()->put('panier', $panier);
       }
         return redirect()->back();  
     }

    public function commandes($id,Request $request)
{
    $panier = session('panier', []);
    
    // $commande = new Commandes();
    // $commande->user_id = auth()->user()->id;
    // $commande->total = 0;
    // $commande->save();

    // $total = 0;

    // foreach ($panier as $item) {
    //     // Créez un nouvel article de commande
    //     $commandeItem = new CommandeItem();
    //     $commandeItem->commande_id = $commande->id;
    //     $commandeItem->plats_id = $item['id'];
    //     $commandeItem->stock = $item['stock'];
    //     $commandeItem->prix = $item['prix'];
    //     $commandeItem->save();

    //     $total += $item['stock'] * $item['prix'];
    // }

    // // Met à jour le total de la commande
    // $commande->total = $total;
    // $commande->save();

    // Intégration de Stripe
    Stripe::setApiKey(config('services.stripe.secret'));

    $session = Session::create([
        'payment_method_types' => ['card'],
        'line_items' => [[
            'price_data' => [
                'currency' => 'XOF',
                'product_data' => [
                    'name' => 'Commande #' ,
                ],
                'unit_amount' =>1000,
            ],
            'quantity' => 1,
        ]],
        'mode' => 'payment',
        'success_url' => route('payment.success'),
        'cancel_url' => route('payment.cancel'),
    ]);

    // Vider le panier après la création de la session de paiement
    session()->forget('panier');

    return redirect($session->url);
}

   public function success(){
    return route('payment.success');
   }

    
}
