
@extends('components/layouts.app')
@section('content')
<link rel="stylesheet" href="{{asset('assets/css/form.css')}}">
  <h1 class="title">Ajout de tables </h1>
		<form method="post" action="{{route('tables.store')}}">
        @csrf
			<div class="main-box">
         <div class="input-box">
					<span class="text">Numéro</span>
					<input type="text" placeholder="Entrer le numéro de la table" name="numero" required>
				</div>
         <div class="input-box">
					<span class="text">Capacité</span>
					<input type="text" placeholder="Entrer le nombre de personnes que la table peut contenir" name="capacite" required>
				</div>
			</div>

			<div class="btn">
				<input type="submit" value="Ajouter">
			</div>
		</form>

@endsection