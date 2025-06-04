<?php

namespace App\Http\Controllers;
use App\Models\Plats;
use App\Models\User;
use App\Models\Reservations;
use App\Models\Commandes;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
     public function index()
    {    
         $total_clients=User::Where('role','=','user')->count();
         $plats=plats::all();
         $nombrePlats = plats::count();
         return view('dashboard.dashboard', compact('total_clients'));
    }
}
