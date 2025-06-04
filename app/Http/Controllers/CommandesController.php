<?php

namespace App\Http\Controllers;

use App\Models\Commandes;
use App\Models\Plats;
use Illuminate\Http\Request;

class CommandesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    // public function index()
    // {
    //     $commandes=commandes::all();
    //     return view('commandes.index' ,compact('commandes'));
    // }

    // /**
    //  * Show the form for creating a new resource.
    //  */
    // public function create()
    // {
    //     $users=users::all();
    //     return view('commandes.formulaire',compact('users'));
    // }

    // /**
    //  * Store a newly created resource in storage.
    //  */
    // public function store(Request $request)
    // {
    //     $commande=new Commandes();
    //     $commande->typecommande =$request->input('typecommande');
    //     $commande->total =$request->input('total');
    //     $commande->date =$request->input('date');
    //     $commande->statut =$request->input('statut');
    //     $commande->user_id =$request->input('user_id');
    //     $commande->save();
    //     return redirect()->route('commande.index');
    // }

    // /**
    //  * Display the specified resource.
    //  */
    // public function show(Commandes $commande)
    // {
    //   return view('commandes.details' ,compact('commande'));
      
    // }

    // /**
    //  * Show the form for editing the specified resource.
    //  */
    // public function edit(Commandes $commande)
    // {
    //      return view('commandes.edit',compact('commande'));
    // }

    // /**
    //  * Update the specified resource in storage.
    //  */
    // public function update(Request $request, Commandes $commande)
    // {
    //     $commande->typecommande =$request->input('typecommande');
    //     $commande->total =$request->input('total');
    //     $commande->date =$request->input('date');
    //     $commande->statut =$request->input('statut');
    //     $commande->user_id =$request->input('user_id');
    //     $commande->save();
    //     return redirect()->route('commande.index');
    // }

    // /**
    //  * Remove the specified resource from storage.
    //  */
    // public function destroy(Commandes $commande)
    // {
    //     $commande->delete();
    //     return redirect()->route('commande.index');
    // }
}
