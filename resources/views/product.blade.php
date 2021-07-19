@extends('layouts/siteweb')

                <head>
                <title>Product</title>
                </head>

@section('content')
        <br><br><br>
		<div class="container">

                    <div style="padding-bottom:127px; margin-top:10px; display:-webkit-box;
                                                display: -webkit-flex;
                                                display: -moz-box;
                                                display: -ms-flexbox;
                                                display: flex;" >

                          <button style="border:none; text-decoration:none; background:transparent;">

                                        <li >
                                          <a href="http://">Toutes les catégories</a><hr>
                                        </li>
                                                                        
                          </button>

                          <button style="border:none; text-decoration:none; background:transparent;">

                                        <li>
                                          <a href="http://">Récemments ajoutés</a><hr>
                                        </li>
                          </button>

                          <button style="border:none; text-decoration:none; background:transparent;">

                                        <li>
                                          <a href="http://">Meilleures ventes</a><hr>
                                        </li>
                         </button>
                  </div>

                                        
                
                </div>
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

<br><br>
@endsection