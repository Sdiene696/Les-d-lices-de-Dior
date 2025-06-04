<?php

namespace App\Http\Controllers;

use App\Models\Reservations;
use App\Models\User;
use App\Models\Tables;
use Illuminate\Http\Request;

class ReservationsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $reservations=reservations::all();
        return view('reservations.index' ,compact('reservations'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $users=User::all();
        $tables=tables::all();
        return view('reservations.formulaire',compact('users'),compact('tables'));
    }
    public function passeratable()
    {
        $users=User::all();
        $tables=tables::all();
        return view('reservations.passeratable',compact('users'),compact('tables'));
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $reservation=new Reservations();
        $reservation->nombredepersonnes =$request->input('nombredepersonnes');
        $reservation->date =$request->input('date');
        $reservation->heure =$request->input('heure');
        $reservation->statut =$request->input('statut');
        $reservation->user_id =$request->input('user_id');
        $reservation->tables_id =$request->input('tables_id');
        $reservation->save();
        return redirect()->route('reservations.index');
    }
    //  public function listeReservation(Request $request)
    // {
    //     $reservation=new Reservations();
    //     $reservation->nombredepersonnes =$request->input('nombredepersonnes');
    //     $reservation->date =$request->input('date');
    //     $reservation->heure =$request->input('heure');
    //     $reservation->statut =$request->input('statut');
    //     $reservation->user_id =$request->input('user_id');
    //     $reservation->tables_id =$request->input('tables_id');
    //     $reservation->save();
    //     return redirect()->route('reservations.index');
    // }



    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Reservations $reservation)
    {
        $users=User::all();
        $tables=tables::all();
        return view('reservations.edit',compact('users'),compact('tables'),compact('reservation'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Reservations $reservation)
    {
        $reservation->nombredepersonnes =$request->input('nombredepersonnes');
        $reservation->date =$request->input('date');
        $reservation->date =$request->input('date');
        $reservation->statut =$request->input('statut');
        $reservation->user_id =$request->input('user_id');
        $reservation->tables_id =$request->input('tables_id');
        $reservation->save();
        return redirect()->route('reservations.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request,Reservations $reservation)
    {
        $reservation->delete();
        return redirect()->route('reservations.index');
    }
}
