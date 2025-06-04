@extends('components/layouts.app')
@section('content')
<link rel="stylesheet" href="{{asset('assets/css/table.css')}}">
<a href="{{route('livraisons.create')}}" class="btn btn-secondary m-2">Ajouter une livraison</a>
<a href="livreurs" class="btn btn-secondary m-2">La liste des Livreurs</a>
 <table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">DATE</th>
      <th scope="col">STATUT</th>
      <th scope="col">CLIENT</th>
      <th scope="col">LIVREUR</th>
      <th scope="col">ACTION</th>
    </tr>
  </thead>
  <tbody>
  @foreach($livraisons as $livraison)
    <tr>
      <th scope="row">{{$livraison->id}}</th>
      <td>{{$livraison->date}}</td>
      <th scope="row">{{$livraison->statut}}</th>
      <th scope="row">{{$livraison->users_id}}</th>
      <th scope="row">{{$livraison->livreurs_id}}</th>
      <td>
         
         <div class="d-flex">
            <a href=""class="btn btn-success"><i class="fa fa-pencil"></i></a>
            <a href="{{route('livraisons.show',$livraison->id)}}" class="btn btn-warning"><i class="fa fa-eye"></i></a>
          <form action="{{route('livraisons.destroy',$livraison->id)}}" method="post" >
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