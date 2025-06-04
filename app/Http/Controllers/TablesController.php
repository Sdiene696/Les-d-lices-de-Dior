<?php

namespace App\Http\Controllers;

use App\Models\Tables;
use Illuminate\Http\Request;

class TablesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tables=tables::all();
        return view('tables.index' ,compact('tables'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('tables.formulaire');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $table=new Tables();
        $table->numero =$request->input('numero');
        $table->capacite =$request->input('capacite');
        $table->save();
        return redirect()->route('tables.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Tables $table)
    {
        return view('tables.details' ,compact('table'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Tables $table)
    {
        return view('tables.edit',compact('table'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Tables $table)
    {
        $table->numero =$request->input('numero');
        $table->capacite =$request->input('capacite');
        $table->save();
        return redirect()->route('tables.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Tables $table)
    {
        $table->delete();
        return redirect()->route('tables.index');
    }
}
