
@extends('components/layouts.app')
@section('content')
<link rel="stylesheet" href="{{asset('assets/css/form.css')}}">
  <h1 class="title">Ajout de plats </h1>
		<form method="post" action="{{route('plats.store')}}">
        @csrf
			<div class="main-box">
         <div class="input-box">
					<span class="text">Nom</span>
					<input type="text" placeholder="Entrer le nom" name="nom" required>
				</div>
        <div class="input-box">
					<span class="text">Prenom</span>
					<input type="text" placeholder="Entrer le prénom" name="prenom" required>
				</div>
        <div class="input-box">
					<span class="text">Téléphone</span>
					<input type="text" placeholder="Entrer le téléphone" name="telephone" required>
				</div>
         <div class="input-box">
					<span class="text">Statut</span>
					<input type="text" placeholder="Entrer le statut" name="statut" required>
				</div>
			</div>

			<div class="btn">
				<input type="submit" value="Ajouter">
			</div>
		</form>

@endsection