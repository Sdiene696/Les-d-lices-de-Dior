@extends('components/layouts.app')
@section('content')
<link rel="stylesheet" href="{{asset('assets/css/table.css')}}">
<a href="{{route('tables.create')}}" class="btn btn-secondary m-2">Ajouter une table</a>
 <table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Numéro</th>
      <th scope="col">Capacité</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  @foreach($tables as $table)
    <tr>
      <td scope="row">{{$table->id}}</td>
      <td>{{$table->numero}}</td>
      <td>{{$table->capacite}} personnes</td>
      <td>
        
         <div class="d-flex">
            <a href="{{route('tables.edit',$table->id)}}"class="btn btn-success"><i class="fa fa-pencil"></i></a>
            <a href="{{route('tables.show',$table->id)}}" class="btn btn-warning"><i class="fa fa-eye"></i></a>
          <form action="{{route('tables.destroy',$table->id)}}" method="post" >
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