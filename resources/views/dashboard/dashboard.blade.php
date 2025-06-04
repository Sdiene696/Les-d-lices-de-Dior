@extends('components/layouts.app')
@section('content')
    <link rel="shortcut icon" href="{{asset('assets/images/logo.png')}}" type="image/x-icon" />
    <link rel="stylesheet" href="{{asset('assets/css/styles.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css"
    integrity="sha512-5Hs3dF2AEPkpNAR7UiOHba+lRSJNeM2ECkwxUIxC1Q/FLycGTbNapWXB4tP889k5T5Ju8fs4b1P5z/iB4nMfSQ=="
     crossorigin="anonymous" referrerpolicy="no-referrer" />

    
                <div class="p-6 text-gray-900 dark:text-gray-100 analytics">
                         
                  @if(auth()->user()->role === App\Enums\UserRole::Admin) 
                    <div class="card">

                        <div class="card-head">
                            <h2></h2>
                            <span class="fa fa-user-friends"></span>
                        </div>
                        <div class="card-progress">
                            <small>Clients</small>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-head">
                            <h2></h2>
                            <span class="fa-solid fa-spoon"></span>
                        </div>
                        <div class="card-progress">
                            <small>Plats</small>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-head">
                            <h2></h2>
                            <span class="fa fa-shopping-cart"></span>
                        </div>
                        <div class="card-progress">
                            <small>Commandes</small>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-head">
                            <h2></h2>
                            <span class="fa fa-tasks"></span>
                        </div>
                        <div class="card-progress">
                            <small>Réservations</small>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-head">
                            <h2></h2>
                            <span class="fa-solid fa-money-check-dollar"></span>
                        </div>
                        <div class="card-progress">
                            <small>Ventes Totales</small>
                        </div>
                    </div>
                     @endif

                </div>
        @endsection