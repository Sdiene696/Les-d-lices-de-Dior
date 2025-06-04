
@extends('components/layouts.app')
@section('content')
<link rel="stylesheet" href="{{asset('assets/css/form.css')}}">
  <h1 class="title">Ajout de paiements </h1>
		<form method="post" action="{{route('paiements.store')}}">
        @csrf
			<div class="main-box">
         <div class="input-box">
					<span class="text">Montant</span>
					<input type="text" placeholder="Entrer le montant" name="montant" required>
				</div>
         <div class="input-box">
					<span class="text">Mode de paiement</span>
					<input type="text" placeholder="Entrer le mode de paiement" name="modepaiement" required>
				</div>
        <div class="input-box">
					<span class="text">Date</span>
					<input type="date" placeholder="Entrer la date" name="date" required>
				</div>
        <div class="input-box">
					<span class="text">Statut</span>
					<input type="text" placeholder="Entrer le statut" name="statut" required>
				</div>
        <div class="input-box">
					<span class="text">Commande</span>
					<input type="text" placeholder="Entrer l'id du client" name="commandes_id" required>
				</div>
			</div>

			<div class="btn">
				<input type="submit" value="Ajouter">
			</div>
		</form>

@endsection