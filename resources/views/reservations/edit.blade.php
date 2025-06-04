
@extends('components/layouts.app')
@section('content')
<link rel="stylesheet" href="{{asset('assets/css/form.css')}}">
  <h1 class="title">Modification de réservation </h1>
		<form method="post" action="{{route('reservations.update',$reservation->id)}}">
           @csrf
           @method("PUT")
			<div class="main-box">
                 <div class="input-box">
					<span class="text">Date</span>
					<input type="date" name="date" value="{{$reservation->date}}" required>
				</div>
				<div class="input-box">
					<span class="text">Heure</span>
					<input type="time" name="heure" value="{{$reservation->heure}}" required>
				</div>
                 <div class="input-box">
					<span class="text">Nombre de personnes</span>
					<input type="text" name="nombredepersonnes" value="{{$reservation->nombredepersonnes}}" required>
				  </div>
                  <div class="input-box">
					<span class="text">Statut</span>
					<input type="text" name="statut" value="{{$reservation->statut}}" required>
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
				<input type="submit" value="Modifier">
			</div>
		</form>

@endsection