<?php

namespace App\Http\Controllers;
use App\Models\Plats;
use App\Models\User;
use App\Models\Categories;



use Illuminate\Http\Request;

class WelcomeController extends Controller
{
      public function index()
    {  
        $plats=plats::all();
         $nombrePlats = plats::count();
        $categories=categories::all();
        return view('welcome' ,compact('plats'),compact('categories'),compact('nombrePlats'));
    }
    
}
