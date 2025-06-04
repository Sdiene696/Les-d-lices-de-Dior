
@extends('components/layouts.app')
@section('content')
<link rel="stylesheet" href="{{asset('assets/css/form.css')}}">
  <h1 class="title">Ajout de commandes </h1>
		<form method="post" action="{{route('commandes.store')}}">
        @csrf
			<div class="main-box">
				<div class="input-box">
					<span class="text">Type de Commande</span>
					<input type="text" placeholder="Entrer le type de commande" name="typecommande" required>
				</div>
        <div class="input-box">
					<span class="text">Total</span>
					<input type="text" placeholder="Entrer le total" name="total" required>
				</div>
        <div class="input-box">
					<span class="text">Date</span>
					<input type="text" placeholder="Entrer la date" name="date" required>
				</div>
        <div class="input-box">
					<span class="text">Statut</span>
					<input type="text" placeholder="Entrer le statut" name="statut" required>
				</div>
        <div class="input-box">
					<span class="text">Clients</span>
					<input type="text" placeholder="Entrer l'id du client" name="users_id" required>
				</div>
			</div>

			<div class="btn">
				<input type="submit" value="Ajouter">
			</div>
		</form>

@endsection