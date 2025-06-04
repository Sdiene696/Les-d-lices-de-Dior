@extends('layouts.app')
@section('content')
<div class="card">
    <h1>Livreur numéro : {{$livreur->id}}</h1>
    <strong>Nom: {{$livreur->nom}}</strong><br>
    <strong>Nom: {{$livreur->prenom}}</strong><br>
    <strong>Nom: {{$livreur->telephone}}</strong><br>
    <strong>Nom: {{$livreur->statut}}</strong><br>

</div>
@endsection