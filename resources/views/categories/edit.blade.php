@extends('components/layouts.app')
@section('content')
<link rel="stylesheet" href="{{asset('assets/css/form.css')}}">
  <h1 class="title">Modification de catégories </h1>
		<form method="post" action="{{route('categories/category.update',$categorie->id)}}">
         @csrf
         @method("PUT")
			<div class="main-box">
				<div class="input-box">
					<span class="text">Nom</span>
					<input type="text" name="nom" value="{{$categorie->nom}}" required>
				</div>
			</div>

			<div class="btn">
				<input type="submit" value="Modifier">
			</div>
		</form>

@endsection