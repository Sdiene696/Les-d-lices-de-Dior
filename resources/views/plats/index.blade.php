@extends('components/layouts.app')
@section('content')

<link rel="stylesheet" href="{{asset('assets/css/table.css')}}">
<a href="{{route('plats.create')}}" class="btn btn-secondary m-2">Ajouter un plat</a>
<a href="{{route('categories.index')}}" class="btn btn-secondary m-2">La liste des catégories</a>
 <table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Image</th>
      <th scope="col">Nom</th>
      <th scope="col">Stock</th>
      <th scope="col">Prix</th>
      <th scope="col">Catégorie</th>
      <th scope="col">Statut</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  @foreach($plats as $plat)
    <tr>
      <td scope="row">{{$plat->id}}</td>
      <td><img src="../assets/images/{{$plat->image}}" alt="" width="60px"></td>
      <td>{{$plat->nom}}</td>
      <td>{{$plat->stock}}</td>
      <td>{{$plat->prix}} CFA</td>
      <td>{{$plat->categories_id}}</td>
      <td>
        @if($plat->stock==0)
          <span class="badge text-bg-danger">Indisponible</span>
        @endif
        @if($plat->stock<=10 && $plat->stock>0 )
          <span class="badge text-bg-warning">Faible</span>
        @endif
        @if($plat->stock>10)
          <span class="badge text-bg-success">Disponible</span>
        @endif
      </td>
      <td>
      <div class="d-flex">
            <a href="{{route('plats.edit',$plat->id)}}"class="btn btn-success"><i class="fa fa-pencil"></i></a>
            <a href="{{route('plats.show',$plat->id)}}" class="btn btn-warning"><i class="fa fa-eye"></i></a>
          <form action="{{route('plats.destroy',$plat->id)}}" method="post" >
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