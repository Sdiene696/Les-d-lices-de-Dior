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
					<span class="text">Image</span>
					<input type="file" placeholder="Entrer l'image" name="image" required>
				</div>
        <div class="input-box">
					<span class="text">Description</span>
					<input type="text" placeholder="Entrer la description du plat" name="description" required>
				</div>
        <div class="input-box">
					<span class="text">Stock</span>
					<input type="text" placeholder="Entrer le stock" name="stock" required>
				</div>
        <div class="input-box">
					<span class="text">Prix</span>
					<input type="text" placeholder="Entrer le prix" name="prix" required>
				</div>
               <div class="input-box">
					<span class="text">Statut</span>
					<input type="text" placeholder="Entrer le statut" name="statut" required>
				</div>
         <div class="input-box">
          <span class="text">Categorie</span>
           <select class="form-select" name="categories_id">
           <option selected>Choisissez une catégorie</option>
            @foreach($categories as $categorie)
  
           <option value="{{$categorie->id}}">{{$categorie->nom}}</option>
           @endforeach
            </select>
          </div>
			</div>

			<div class="btn">
				<input type="submit" value="Ajouter un plat">
			</div>
		</form>

@endsection