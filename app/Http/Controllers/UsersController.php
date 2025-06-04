<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
     public function index()
    {
        $users=User::all();
        return view('clients.index' ,compact('users'));
    }


    //  public function show(User $user)
    // {  
    //     return view('clients.details' ,compact('users'));
    // }
   

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request,User $user)
    {
        $user->delete();
        return redirect()->route('user.index');
    }
}
