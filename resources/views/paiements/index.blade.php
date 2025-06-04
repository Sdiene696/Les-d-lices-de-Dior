@extends('components/layouts.app')
@section('content')
<a href="{{route('paiements.create')}}">Ajouter paiement</a>
 <table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">MONTANT</th>
      <th scope="col">MODE DE PAIEMENT</th>
      <th scope="col">DATE</th>
      <th scope="col">COMMANDE</th>
      <th scope="col">ACTION</th>
    </tr>
  </thead>
  <tbody>
  @foreach($paiements as $paiement)
    <tr>
      <th scope="row">{{$paiement->id}}</th>
      <td>{{$paiement->montant}}</td>
      <td>{{$paiement->modepaiement}}</td>
      <td>{{$paiement->date}}</td>
      <td>{{$paiement->commande_id}}</td>
      <td>
      <form action="{{route('paiements.destroy',$paiement->id)}}" method="post" >
      <a href=""class="btn btn-success">Editer</a>
      <a href="{{route('paiements.show',$paiement->id)}}" class="btn btn-warning">Details</a>
      @csrf
      @method('DELETE')
      <button class="btn btn-danger">Supprimer</button>
      </form>

      </td>
    </tr>
  </tbody>
  @endforeach
</table>
@endsection