@extends('components/layouts.app')
@section('content')
<link rel="stylesheet" href="{{asset('assets/css/form.css')}}">
  <h1 class="title">Modification de plats </h1>
		<form method="post" action="{{route('plats.update',$plat->id)}}">
        @csrf
		@method("PUT")
			<div class="main-box">
                <div class="input-box">
					<span class="text">Nom</span>
					<input type="text"  name="nom" value="{{$plat->nom}}" required>
				</div>
                <div class="input-box">
					<span class="text">Image</span>
					<input type="file" name="image" value="{{$plat->image}}" required>
				</div>
               <div class="input-box">
					<span class="text">Description</span>
					<input type="text"  name="description" value="{{$plat->description}}" required>
				</div>
                <div class="input-box">
					<span class="text">Stock</span>
					<input type="text" name="stock" value="{{$plat->stock}}" required>
				</div>
                <div class="input-box">
					<span class="text">Prix</span>
					<input type="text"  name="prix" value="{{$plat->prix}}" required>
				</div>
               <div class="input-box">
					<span class="text">Statut</span>
					<input type="text" name="statut" value="{{$plat->statut}}" required>
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
				<input type="submit" value="Modifier">
			</div>
		</form>

@endsection



