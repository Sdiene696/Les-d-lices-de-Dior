@extends('components/layouts.app')
@section('content')
<link rel="stylesheet" href="{{asset('assets/css/table.css')}}">
<a href="{{route('livreurs.create')}}" class="btn btn-secondary m-2">Ajouter un Livreur</a>
 <table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Nom</th>
      <th scope="col">Prénom</th>
      <th scope="col">Téléphone</th>
      <th scope="col">Statut</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  @foreach($livreurs as $livreur)
    <tr>
      <th scope="row">{{$livreur->id}}</th>
      <td>{{$livreur->nom}}</td>
      <td>{{$livreur->prenom}}</td>
      <td>{{$livreur->telephone}}</td>
      <td>{{$livreur->statut}}</td>
      <td>
       <div class="d-flex">
            <a href=""class="btn btn-success"><i class="fa fa-pencil"></i></a>
            <a href="{{route('livreurs.show',$livreur->id)}}" class="btn btn-warning"><i class="fa fa-eye"></i></a>
          <form action="{{route('livreurs.destroy',$livreur->id)}}" method="post" >
             @csrf
            @method('DELETE')
            <button class="btn btn-danger"><i class="fa fa-trash"></i></button>
          </form>
      </div>

      </td>
    </tr>
  </tbody>
  @endforeach
</table>


@endsection