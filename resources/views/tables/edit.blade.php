
@extends('components/layouts.app')
@section('content')
<link rel="stylesheet" href="{{asset('assets/css/form.css')}}">
  <h1 class="title">Modification de tables </h1>
		<form method="post" action="{{route('tables.update',$table->id)}}">
          @csrf
          @method("PUT")

			<div class="main-box">
                <div class="input-box">
					<span class="text">Numéro</span>
					<input type="text" name="numero"value="{{$table->numero}}" required>
				</div>
                <div class="input-box">
					<span class="text">Capacité</span>
					<input type="text"  name="capacite" value="{{$table->capacite}}" required>
				</div>
			</div>

			<div class="btn">
				<input type="submit" value="Modifier">
			</div>
		</form>

@endsection