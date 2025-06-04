@extends('components/layouts.app')
@section('content')
 <link rel="stylesheet" href="{{asset('assets/css/table.css')}}"> 
 <h4>La Liste des Clients</h4>
 <table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">NOM</th>
      <th scope="col">ADRESSE</th>
      <th scope="col">EMAIL</th>
      <th scope="col">TELEPHONE</th>
      <th scope="col">ACTION</th>
    </tr>
  </thead>
  <tbody>
  @foreach($users as $user)
    <tr>
      <td scope="row">{{$user->id}}</td>
      <td>{{$user->name}}</td>
      <td>{{$user->adresse}}</td>
      <td>{{$user->email}}</td>
      <td>{{$user->telephone}}</td>
      <td>
      
        <div class="d-flex">
          <form action="{{route('users.destroy',$user->id)}}" method="post" >
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