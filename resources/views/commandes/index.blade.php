@extends('components/layouts.app')
@section('content')
<link rel="stylesheet" href="{{asset('assets/css/table.css')}}">
<a href="{{route('commandes.create')}}" class="btn btn-secondary m-2">Ajouter une commande</a>
 <table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Type de commande</th>
      <th scope="col">Total</th>
      <th scope="col">Date</th>
      <th scope="col">Statut</th>
      <th scope="col">Client</th>
    </tr>
  </thead>
  <tbody>
  @foreach($commandes as $commande)
    <tr>
      <th scope="row">{{$commande->id}}</th>
      <td>{{$commande->typecommande}}</td>
      <td>{{$commande->total}}</td>
      <td>{{$commande->date}}</td>
      <td>{{$commande->statut}}</td>
      <td>{{$commande->users_id}}</td>
      <td>
      
      <div class="d-flex">
            <a href="{{route('plats.edit',$plat->id)}}"class="btn btn-success"><i class="fa fa-pencil"></i></a>
            <a href="{{route('commandes.show',$commande->id)}}" class="btn btn-warning"><i class="fa fa-eye"></i></a>
          <form action="{{route('commandes.destroy',$commande->id)}}" method="post" >
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