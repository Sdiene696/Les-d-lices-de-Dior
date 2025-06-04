@extends('components/layouts.app')
@section('content')
<link rel="stylesheet" href="{{asset('assets/css/table.css')}}">
<a href="{{route('reservations.create')}}" class="btn btn-secondary m-2">Ajouter une réservation</a>
 <table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Nombre de personnes</th>
      <th scope="col">Date</th>
      <th scope="col">Heure</th>
      <th scope="col">Statut</th>
      <th scope="col">Clients</th>
      <th scope="col">Tables</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  @foreach($reservations as $reservation)
    <tr>
      <th scope="row">{{$reservation->id}}</th>
      <td>{{$reservation->nombredepersonnes}}</td>
      <td>{{$reservation->date}}</td>
      <td>{{$reservation->heure}}</td>
      <td>{{$reservation->statut}}</td>
      <td>{{$reservation->user_id}}</td>
      <td>{{$reservation->tables_id}}</td>
      <td>
      <div class="d-flex">
          <form action="{{route('reservations.destroy',$reservation->id)}}" method="post" >
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