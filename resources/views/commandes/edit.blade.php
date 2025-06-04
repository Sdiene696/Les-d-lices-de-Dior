
@extends('components/layouts.app')
@section('content')
<link rel="stylesheet" href="{{asset('assets/css/form.css')}}">
  <h1 class="title">Ajout de commandes </h1>
		<form method="post" action="{{route('plats.update',$plat->id)}}">
        @csrf
        @method("PUT")
			<div class="main-box">
				<div class="input-box">
					<span class="text">Type de Commande</span>
					<input type="text" name="typecommande" value="{{$commande->typecommande}}" required>
				</div>
        <div class="input-box">
					<span class="text">Total</span>
					<input type="text"  name="total" value="{{$commande->total}}" required>
				</div>
        <div class="input-box">
					<span class="text">Date</span>
					<input type="text"  name="date" value="{{$commande->date}}" required>
				</div>
        <div class="input-box">
					<span class="text">Statut</span>
					<input type="text"  name="statut" value="{{$commande->statut}}" required>
				</div>
        <div class="input-box">
					<span class="text">Clients</span>
					<input type="text"  name="users_id" value="{{$commande->users_id}}" required>
				</div>
			</div>

			<div class="btn">
				<input type="submit" value="Modifier">
			</div>
		</form>

@endsection