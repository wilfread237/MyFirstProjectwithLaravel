<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" 
    crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" 
    crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" 
    integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">


    <script src="https://kit.fontawesome.com/c1238f4d36.js" crossorigin="anonymous"></script>  {{--link for fontawesome--}}


                <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"
                integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A=="
                crossorigin=""/>


                <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"
                integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA=="
                crossorigin="">
                </script>

    </head>
    <body>
    
    <nav class=" navbar navbar-default navbar navbar-expand-lg navbar-dark bg-dark ">
      <div class="container-fluid">
        <a class="navbar-brand font-italic text-warning " href="/">DiksPlatform</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="/">Acceuil</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="/product">Produits</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="/aboutUs">A propo de nous</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="/contactUs">Nous contacter</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="/new">Actualités sur le marché agricole</a>
            </li>
          
            <li class="nav-item" style="margin-left:350px;">
              <a class="nav-link active" href="">
              <i class="fa fa-search "></i>
              </a>
            </li>

            <li class="nav-item">
              <a class="nav-link active" href="">
              <i class="fa fa-user "></i>
              </a>
            </li>

            <li class="nav-item" style="margin-left:">
              <a class="nav-link active" href="{{ Route('Cart.index') }}">
              <i class="fa fa-shopping-cart "><span class="badge bagde-pill badge-warning">{{ Cart::count() }}</span></i>
              </a>
            </li>
            
          </ul>
        </div>
      </div>
</nav>

  
   {{-- c'est ici qu'on spécifie où le contenu de nos différentes pages seront affichées--}}
<div>  
        @yield('content')  

        <!-- @if (session('success'))
      <div class="alert alert-success">
          {{session('success')}}
      </div>
  @endif -->
</div>


<div>
<footer  style="background-color: black;">
        <div class="container">
            <div class="row ">
                <div class="col-md-4 text-center text-md-left ">
                    
                    <div class="py-0">
                  <h3 class="my-4 text-white"><span class="mx-2 font-italic text-warning ">DiksPlatform</span></h3>
        

                        <p class="footer-links font-weight-bold">
                            <a class="text-white" href="/">Home</a>
                            |
                            <a class="text-white" href="/aboutUs">About</a>
                            |
                            <a class="text-white" href="/contactUs">Contact</a>
                        </p>
                        <p class="text-light py-4 mb-4">&copy;2021 All Right Reserved. Ltd.</p>
                    </div>
                </div>
                
                <div class="col-md-4 text-white text-center text-md-left ">
                    <div class="py-2 my-4">
                        <div>
                            <p class="text-white"> <i class="fa fa-map-marker mx-2 "></i>
                            Institut Universitaire et Technologique Fotso-Victor</p>
                        </div>

                        <div> 
                            <p><i class="fa fa-phone mx-2 "></i> +237 655647551</p>
                        </div>
                        <div>
                            <p><i class="fa fa-envelope mx-2"></i><a href="mailto:wilfreadessomba@gmail.com">wilfreadessomba@gmail.com</a></p>
                        </div>  
                    </div>  
                </div>
                
                <div class="col-md-4 text-white my-4 text-center text-md-left ">
                    <span class=" font-weight-bold ">A propos de nous</span>
				                	<p class="text-warning my-2" >Notre mission, c'est de mettre en avant les produits forestiers locaux.</p>
                    <div class="py-2">
                        <a href="https:www.instagram.com/wilfreadessomba" target="_blank"><i class="fab fa-instagram fa-2x text-primary mx-3"></i></a>
                        <a href="#"><i class="fab fa-twitter fa-2x text-info mx-3"></i></a>
                        <a href="#"><i class="fab fa-facebook fa-2x text-danger mx-3"></i></a>
                        <a href="#"><i class="fab fa-youtube fa-2x text-danger mx-3"></i></a>
                    </div>
                </div>
            </div>  
        </div>
     </footer>
</div>
    </body>
</html>
