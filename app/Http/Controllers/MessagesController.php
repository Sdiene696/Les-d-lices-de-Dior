<?php

namespace App\Http\Controllers;

use App\Models\Plats;
use App\Models\User;
use App\Models\Categories;
use App\Models\Messages;
use Illuminate\Http\Request;

class MessagesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //    $plats=plats::all();
        // $categories=categories::all();
        // return view('welcome' ,compact('plats'),compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request,Messages $message)
    {
        $plats=plats::all();
        $categories=categories::all();
        $message->nom =$request->input('nom');
        $message->email =$request->input('email');
        $message->telephone =$request->input('telephone');
        $message->message =$request->input('message');
        $message->save();
         return view('welcome' ,compact('plats'),compact('categories'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Messages $messages)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Messages $messages)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Messages $messages)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Messages $messages)
    {
        //
    }
}
