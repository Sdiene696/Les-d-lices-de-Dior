@extends('components/layouts.app')
@section('content')
<link rel="stylesheet" href="{{asset('assets/css/form.css')}}">
  <h1 class="title">Ajout de catégories </h1>
		<form method="post" action="{{route('categories.store')}}">
        @csrf
			<div class="main-box">
				<div class="input-box">
					<span class="text">Nom</span>
					<input type="text" placeholder="Entrer le nom de la catégorie" name="nom" required>
				</div>
			</div>

			<div class="btn">
				<input type="submit" value="Ajouter">
			</div>
		</form>

@endsection