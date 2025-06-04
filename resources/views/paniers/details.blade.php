    <title>Les Délices de Dior</title>
    <link rel="shortcut icon" href="{{asset('assets/images/logo.png')}}" type="image/x-icon" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css"
    integrity="sha512-5Hs3dF2AEPkpNAR7UiOHba+lRSJNeM2ECkwxUIxC1Q/FLycGTbNapWXB4tP889k5T5Ju8fs4b1P5z/iB4nMfSQ=="
     crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200..700&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Oswald:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Syne:wght@400..800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <section id="panier">
        <div class="title">
            <h3>PANIER</h3>
        </div>
        @if( count(session('panier',[] ))===0)
        <div class="text">
            <img src="{{asset('assets/images/empty_cart.png')}}" alt="">
            <p>Votre panier est vide. <br>
                Veuillez ajouter quelques plats pour continuer.</p>
            <button><a href="/">Retourner à la page d'acceuil.</a></button>
        </div>
        @endif
        
            <div class="row">
        @if(session('panier'))
          <table class="table">
             <thead>
                <tr>
                 <th scope="col">Plats</th>
                 <th scope="col">Prix</th>
                 <th scope="col">Quantité</th>
                 <th scope="col">SousTotal</th>
                 <th scope="col">ACTION</th>
                </tr>
             </thead>
 
              <tbody>
                  @php $total=0;@endphp
                  @foreach(session('panier') as $key => $details)
                   @php $total=$total + ($details['prix'] * $details['stock']);@endphp
                      <tr>
                        <td>
                            <div class="row">
                                <div class="col-md-4">
                                  <img src="../assets/images/{{$details['image']}}" alt="" width="100px" class="image-responsive">
                                </div>
                                <div class="col-md-8">
                                  <h6>{{ $details['nom'] }}</h6>
                                </div>
                            </div>
                        </td>
                        <td>{{ $details['prix'] }}</td>
                        <td>
                          <!-- <input type="number" name="stock" value="{{ $details['stock'] }}" min="1"> -->
                           {{ $details['stock'] }}
                        </td>
                        <td>{{ $details['prix'] * $details['stock'] }}</td>
                        <td>
                          <form action="{{route('suppanier',$key)}}" method="post" >
                              @csrf
                              @method('DELETE')
                          <button class="btn btn-danger"><i class="fa fa-trash"></i></button>
                           </form>
                        </td>
                      </tr>
                      @endforeach
                      <tr>
                        <td colspan="5" class="text-end"><h4>Total:CFA {{$total}}</h4></td>
                      </tr>
             </tbody>
         </table>
             <div class=" d-flex">
                <button class="btn btn-warning"><a href="/">Continuez vos achats</a></button>
                 <form action="{{ route('payment.checkout',['id' => $key]) }}" method="POST">
                          @csrf
                       <button class="btn btn-success">Passer à la caisse</button>
                </form>
             </div>
           @endif
        </div>          
    </section>

