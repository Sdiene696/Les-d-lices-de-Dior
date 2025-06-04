<?php

namespace App\Http\Controllers;

use App\Models\Paiements;
use Illuminate\Http\Request;

use Stripe\Stripe;
use Stripe\Checkout\Session;

class PaiementsController extends Controller
{
        public function index()
    {
        return view('payment');
    }

    public function checkout(Request $request)
    {
        Stripe::setApiKey(config('services.stripe.secret'));

        $session = Session::create([
            'user_id'  => auth()->user()->id,
            'payment_method_types' => ['card'],
            'line_items' => [[
                'price_data' => [
                    'currency' => 'XOF',
                    'product_data' => [
                        'name' => 'Produit Exemple',
                    ],
                    'unit_amount' => '1200', 
                ],
                'quantity' => 2,
            ]],
            'mode' => 'payment',
            'success_url' => route('payment.success'),
            'cancel_url' => route('payment.cancel'),
        ]);

        return redirect($session->url);
    }

    public function success()
    {
        return 'Paiement réussi !';
    }

    public function cancel()
    {
        return 'Paiement annulé.';
    }

}
