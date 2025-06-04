
@extends('components/layouts.app')
@section('content')

<div class="shop row mt-5 pt-5">
           <div class="images col-lg-6 col-md-12 col-12">
            <img src="../assets/images/{{$plat->image}}" alt=""  class="img-fluid w-100" >
           </div>
           <div class="details  col-lg-5 col-md-12 col-12">
              <p>Acceuil/ <span class="categorie">{{$plat->categories_id}}</span></p>
              <h3 class="nomProduit">{{$plat->nom}}</h3>
              <h4 >{{$plat->prix}}</h4>
              <h5>Description plats</h5>
              <p>{{$plat->description}}</p>
           </div>
        </div>
@endsection