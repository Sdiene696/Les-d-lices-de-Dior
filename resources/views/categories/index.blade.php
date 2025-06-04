@extends('components/layouts.app')
@section('content')
<link rel="stylesheet" href="{{asset('assets/css/table.css')}}">
<a href="{{route('categories.create')}}" class="btn btn-secondary m-2">Ajouter une catégorie</a>
 <table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Nom Catégorie</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  @foreach($categories as $categorie)
    <tr>
      <td scope="row">{{$categorie->id}}</td>
      <td>{{$categorie->nom}}</td>
      <td>
        
       <div class="d-flex">
            <a href="{{route('categories.edit',$categorie->id)}}"class="btn btn-success"><i class="fa fa-pencil"></i></a>
          <form action="{{route('categories.destroy',$categorie->id)}}" method="post" >
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