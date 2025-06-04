
@extends('components/layouts.app')
@section('content')
<link rel="stylesheet" href="{{asset('assets/css/form.css')}}">
<h1 class="title">Ajouter une  réservation </h1>
		<form method="post" action="{{route('reservations.store')}}">
        @csrf
			<div class="main-box">
                <div class="input-box">
					<span class="text">Date</span>
					<input type="date" placeholder="Entrer la date" name="date" required>
				</div>
				<div class="input-box">
					<span class="text">Heure</span>
					<input type="time" placeholder="Entrer l'heure" name="heure" required>
				</div>
                <div class="input-box">
					<span class="text">Nombre de personnes</span>
					<input type="text" placeholder="Entrer le nombre de personnes" name="nombredepersonnes" required>
				</div>
				<div class="input-box">
					<span class="text">Statut</span>
					<input type="text" placeholder="Confirmer???" name="statut" required>
				</div>
                <div class="input-box">
					<span class="text">Numero de table</span>			
					     <select class="form-select" name="tables_id">
                           <option selected>Choisissez une table</option>
                              @foreach($tables as $table)
                              <option value="{{$table->id}}">Table numéro:{{$table->numero}} avec une capacité de {{$table->capacite}} personnes</option>
                              @endforeach
                        </select>   
				 </div>
					<div class="input-box">
					<span class="text">Email</span>
					   <select class="form-select" name="user_id">
                           <option selected>Choisissez votre Email</option>
                              @foreach($users as $user)
                              <option value="{{$user->id}}">{{$user->email}}</option>
                              @endforeach
                        </select>
				</div>
			</div>
			<div class="btn">
				<input type="submit" value="Réserver une table">
			</div>
		</form>
@endsection