<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
</head>
<body>
    
    <nav>
        <a href="#logo"><img src="{{asset('assets/images/logo.png')}}" alt="Logo de les délices de Dior" class="logo"></a>
        
          <ul class="navbar">
              <li><a href="#accueil" class="open">Accueil</a></li>
              <li><a href="#menu">Menu</a></li>
              <li><a href="#apropos">A propos de nous</a></li>
              <li><a href="#contact">Contactez-Nous</a></li>
              <li ><a href="{{route('voirpanier')}}"><i class="fa fa-shopping-cart"></i>{{ count(session('panier',[] )) }}</a></li>
                  
              <li><a href="/login"> @if (Route::has('login'))
                
                    @auth
                        <a
                            href="{{ route('dashboard') }}">
                            {{ Auth::user()->name }}
                        </a>
                    @else
                        <a
                            href="{{ route('login') }}">
                            <i class="fa fa-user"></i>
                        </a>
                    @endauth
               
            @endif</a></li>
          </ul>
        <div class="menu">
          <i class="fa-solid fa-bars"></i>
        </div>
    </nav>

    <section id="accueil">
           <h6>- Bienvenu Chez Les Délices de Dior -</h6>
           <h1>UNE EXPERIENCE <br> CULINAIRE <br> EXTRAORDINAIRE</h1>
           <button><a href="#menu">PASSER LA COMMANDE</a></button>
           <button><a href="/passeratable">PASSER A TABLE</a></button>
       
    </section>

    <section id="apropos">
        <div class="title">
            <h3>A PROPOS</h3>
        </div>
        <div class="row">
            <div class="text col-sm-12 col-md-6">
                <h2>- SAVOUREZ NOS DELICES -</h2>
                <p>Le restaurant Les Délices de Dior est un 
                    établissement culinaire situé à Dakar, au Sénégal, 
                    plus précisément à YOFF. Il propose une fusion de la 
                    cuisine africaine et de la gastronomie française, 
                    offrant des plats faits maison adaptés à divers événements .
                   Le restaurant est ouvert tous les jours et propose des services
                   de traiteur pour divers événements. Pour plus d'informations 
                   ou pour passer une commande, vous pouvez les contacter au 
                   +221  77 077 00 77 ou par email à lesdelicesdedior@gmail.com .</p>
                 <button><a href="/passeratable">RESERVER UNE TABLE</a></button>
                 <div class="item">
                    <div class="card">
                        <i class="fa fa-motorcycle"></i>
                        <h6>Livraison Rapide</h6>
                    </div>
                    <div class="card">
                        <i class="fa-solid fa-medal"></i>
                        <h6>Expertise Des Chefs</h6>
                    </div>
                    <div class="card">
                        <i class="fa-solid fa-circle-check"></i>
                        <h6>Qualité De La Nourriture</h6>
                    </div>
                    <div class="card">
                        <i class="fa fa-wallet"></i>
                        <h6>Paiement Sécurisé</h6>
                    </div>
                 </div>
            </div>
            <div class="img col-sm-12 col-md-6">
                <img src="{{asset('assets/images/apropos.jpeg')}}" alt="Les Délices de Dior">
            </div>
        </div>
    </section>

    <section id="menu">
        <div class="title">
            <h3>LE MENU</h3>
        </div>
          <div class="btns">
             @foreach($categories as $categorie)
            <button>{{$categorie->nom}}</button>
             @endforeach
           </div> 
          
        <div class="item row">
        @foreach($plats as $plat)
            <div class="card col-lg-3 col-md-6 col-sm-12">
                <img src="{{ asset('../assets/images/' . $plat->image) }}" alt="{{$plat->nom}}">
                <h4>{{$plat->nom}}</h4>
                <div class="star">
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                </div>
                <h5>{{$plat->prix}} FCFA</h5>
                <a href="{{route('ajouterpanier',$plat->id)}}">Au Panier</a>
            </div> 
        @endforeach

        
        </div>
    </section>
    <section id="clients">
          <div class="title">
            <h3>Ils ont mangés chez nous</h3>
         </div>
              <div class="card-clients row">
                <div class="item-clients col-sm-12 col-md-6 col-lg-4">
                    <div class="header">
                        <div class="image">
                            <img src="{{asset('assets/images/logo.png')}}" alt="profil client">
                        </div>
                        <div>
                            <div class="stars">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <div class="name">Saly Ciss</div>
                        </div>
                    </div>
                    <div class="message">
                      <p>Etablissement dans lequel on trouve l'Excellence :
                         plats délicieux, conséquents et très bien présentés.
                          Très bon accueil du personnel et attentif au moindre
                           besoin du client. Nous reviendrons sans hésiter et 
                           vous ferons connaître. Un grand merci pour cette soirée 
                           inoubliable
                      </p>
                    </div>
                </div>
                <div class="item-clients col-sm-12 col-md-6 col-lg-4">
                    <div class="header">
                        <div class="image">
                            <img src="{{asset('assets/images/logo.png')}}" alt="profil client">
                        </div>
                        <div>
                            <div class="stars">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <div class="name">Martin Faye</div>
                        </div>
                    </div>
                    <div class="message">
                      <p>Restaurant découvert par hasard lors de 
                        nos vacances.De la très grande restauration 
                        dans un cadre enchanteur avec un personnel
                         TRES souriant et professionnel. Un prix plus
                          que raisonnable étant donné la qualité des plats.
                          Félicitations au chez et encore merci pour cette
                           excellente soirée.
                      </p>
                    </div>
                </div>
                <div class="item-clients col-sm-12 col-md-6 col-lg-4">
                    <div class="header">
                        <div class="image">
                            <img src="{{asset('assets/images/logo.png')}}" alt="profil client">
                        </div>
                        <div>
                            <div class="stars">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <div class="name">Momar Ndiaye</div>
                        </div>
                    </div>
                    <div class="message">
                      <p>Rien à dire. Service impeccable, bon accueil,
                         et surtout, la cuisine est irréprochable. Chapeau 
                         aux cuisiniers. Des explosions de saveurs, on ne s'en 
                         lasse pas. Même exigence pour le menu que pour la carte. Bravo.
                      </p>
                    </div>
                </div> 
                <div class="item-clients col-sm-12 col-md-6 col-lg-4">
                    <div class="header">
                        <div class="image">
                            <img src="{{asset('assets/images/logo.png')}}" alt="profil client">
                        </div>
                        <div>
                            <div class="stars">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <div class="name">Amadou Gueye</div>
                        </div>
                    </div>
                    <div class="message">
                      <p>Rien à dire. Service impeccable, bon accueil,
                         et surtout, la cuisine est irréprochable. Chapeau 
                         aux cuisiniers. Des explosions de saveurs, on ne s'en 
                         lasse pas. Même exigence pour le menu que pour la carte. Bravo.
                      </p>
                    </div>
                </div> 
                <div class="item-clients col-sm-12 col-md-6 col-lg-4">
                    <div class="header">
                        <div class="image">
                            <img src="{{asset('assets/images/logo.png')}}" alt="profil client">
                        </div>
                        <div>
                            <div class="stars">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <div class="name">Alice Tall</div>
                        </div>
                    </div>
                    <div class="message">
                      <p>Etablissement dans lequel on trouve l'Excellence :
                         plats délicieux, conséquents et très bien présentés.
                          Très bon accueil du personnel et attentif au moindre
                           besoin du client. Nous reviendrons sans hésiter et 
                           vous ferons connaître. Un grand merci pour cette soirée 
                           inoubliable
                      </p>
                    </div>
                </div>
                <div class="item-clients col-sm-12 col-md-6 col-lg-4">
                    <div class="header">
                        <div class="image">
                            <img src="{{asset('assets/images/logo.png')}}" alt="profil client">
                        </div>
                        <div>
                            <div class="stars">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <div class="name">Sokhna Diene</div>
                        </div>
                    </div>
                    <div class="message">
                       <p>Restaurant découvert par hasard lors de 
                        nos vacances.De la très grande restauration 
                        dans un cadre enchanteur avec un personnel
                         TRES souriant et professionnel. Un prix plus
                          que raisonnable étant donné la qualité des plats.
                          Félicitations au chez et encore merci pour cette
                           excellente soirée.
                      </p>
                    </div>
                </div>
              </div>
    </section>

    <section id="contact">
        <div class="title">
            <h3>CONTACT</h3>
        </div>
        <div class="row">
            <div class="form col-sm-12 col-md-6">
                <form method="POST" action="{{route('messages.store')}}" >
                     @csrf
                    <input type="text" name="nom" placeholder="Entrer Votre Nom Complet">
                    <input type="email" name="email" placeholder="Entrer Votre Adresse Email">
                    <input type="text" name="telephone" placeholder="Entrer Votre Numéro de Téléphone">
                    <input type="text" name="message" placeholder="Entrer Votre Message">
                    <button type="submit">ENVOYER</button>
                </form>
            </div>
            <div class="info col-sm-12 col-md-6 row">
                <div class="item col-sm-12 col-md-4">
                    <i class="fa-solid fa-envelope"></i>
                    <span>Email:</span>
                    <p>lesdelicesdediorp@gmail.com</p>
                </div>
                <div class="item col-sm-12 col-md-4">
                    <i class="fa-solid fa-phone"></i>
                    <span>Téléphone:</span>
                    <p>+221 77 077 00 77</p>
                </div>
                <div class="item col-sm-12 col-md-4">
                    <i class="fa-solid fa-location-dot"></i>
                    <span>Adresse:</span>
                    <p>YOFF Dakar,Sénégal</p>
                </div>
            </div>
        </div>
    </section>

    <footer class="row">
        <div class="col-lg-3 col-md-6 col-sm-12">
            <img src="{{asset('assets/images/logo.png')}}" alt="les délices de dior">
        </div> 
        <div class="liens col-lg-3 col-md-6 col-sm-12">
            <h4>Liens</h4>
            <span>Acceuil</span>
            <span>Menus</span>
            <span>Contacts</span>
        </div>
        <div class="contact col-lg-3 col-md-6 col-sm-12">
            <h4>Contact</h4>
            <p>Adresse : YOFF Dakar,Sénégal</p>
            <p>Téléphone : 77 077 00 77</p>
            <p>lesdelicesdedior@gmail.com</p>
        </div>
        <div class="aide col-lg-3 col-md-6 col-sm-12">
            <h4>Aide</h4>
            <span>Commande</span>
            <span>Réservation</span>
            <span>Livraison</span>
            <span>Paiement</span>
        </div>
        <div class="copy">
            <p>Les Délices de Dior-Tous droits réservés</p>
            <div class="social">
                <a href="www.facebook.com/Lesdélicesdedior"><i class="fa-brands fa-facebook"></i></a>
                <a href="www.twitter.com/Lesdélicesdedior"><i class="fa-brands fa-twitter"></i></a>
                <a href="www.instagram.com/Lesdélicesdedior"><i class="fa-brands fa-instagram"></i></i></a>
            </div>
        </div>
    </footer> 

    <script async src="{{asset('assets/js/app.js')}}"></script>
</body>
</html>
