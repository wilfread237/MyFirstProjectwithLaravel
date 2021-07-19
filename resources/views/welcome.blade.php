@extends('layouts/siteweb')

    <head>
    <title>Home</title>
    <link rel="stylesheet" >
    <meta charset="utf-8">
                <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"
            integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A=="
            crossorigin=""/>


                <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"
                integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA=="
                crossorigin=""></script>
    </head>
 @section('content')

  <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>

    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active" data-bs-interval="10000">
      <img src="https://images.unsplash.com/photo-1552404767-1dc7187feef6?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=750&q=80/100x30" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h3><a href="">Devenir une comité locale</a></h3>
        <p style="color:white;">Garder un oeil sur vos produits grâce à notre système d'alerte.</p> 
      </div>
    </div>
    
    <div class="carousel-item">
      <img src="https://images.unsplash.com/photo-1553864250-05b20249ee0c?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=750&q=80/100x30" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
      <h3><a href="">Des produits à porter de main</a></h3>
        <p style="color:white;">Retrouver tous nos produits en un clic.</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

    <br><br>


@if (session('success'))
            <div class="alert alert-success">
                  {{session('success')}}
            </div>
      @endif

      @if (session('fail'))
            <div class="alert alert-fail">
                  {{session('fail')}}
            </div>
      @endif

  <br><br>

  <div class="container-fluid row h-60 justify-content-center">

          @foreach ($produits as $produit)

          <div class="card" style="width: 18rem;">
              <img src="https://via.placeholder.com/1050x1050" class="card-img-top">
              <div class="card-body">
                <h5 class="card-title">{{$produit->libelle}}</h5>
                <p class="card-text">{{$produit->description}}</p>
                <h5 class="card-title">{{$produit->getPrice()}}</h5><br><br>

                  <form action="{{  Route ('Cart.store') }}" method="post">

                        @csrf
                          <input type="hidden" name="id_produit" value="{{$produit->id_produit}}">
                      <button type="submit" class="btn btn-warning">Ajouter au panier</button>
                  </form>
              </div>
            </div>

          @endforeach
   </div>

      <br><br><br><br>

      <!-- <div>
      <img src="https://via.placeholder.com/50x10" alt="Avatar" style="border-raduis:50%;">
      </div> -->
  
      <div>
      <h3 style="text-align:center;">En savoir plus sur nous</h3><hr>
      <section>
                        
                    <div id="mapid" style="width:1349px; height: 300px;"></div>

                    <script>
                    
                        window.onload = function() {
                            var mymap = L.map('mapid').setView([5.367400,10.417181], 10);

                            var tilestreetMap = L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token={accessToken}', {
                                                    attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
                                                    maxZoom: 18,
                                                    id: 'mapbox/streets-v11',
                                                    tileSize: 512,
                                                    zoomOffset: -1,
                                                    accessToken: 'pk.eyJ1Ijoid2lsZnJlYWQiLCJhIjoiY2txZDluZmM1MDVmdzJ4cGdoNjZ4aDdjMSJ9.OwtrGcnUKSPrWSH4NL9gNQ'
                                                });
                                tilestreetMap.addTo(mymap);
                                var marker = L.marker([5.367400,10.417181]).addTo(mymap);
                                marker.bindPopup("<b>Salutation</b><br>Nous sommes à bandjoun.");
                             }
                    </script>

            </section>
      </div>
      <br>
 @endsection
