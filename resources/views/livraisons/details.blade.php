@extends('layouts.app')
@section('content')
<div class="card">
    <h1>Categorie numéro : {{$categorie->id}}</h1>
    <strong>Nom: {{$categorie->nom}}</strong><br>

</div>
@endsection