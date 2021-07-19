@extends('layouts/siteweb')
    <head>
                <title> Mon Panier</title>
    </head>

@section('content')

        @if ( Cart::count() > 0)

                                               
            <div class="container-fluid row justify-content-center">

            
            @foreach( Cart::content() as $produit)
                            
            <div class="mb-3">
            <div class="pt-4 wish-list">



            <div class="row mb-4">

            <div class="col-md-5 col-lg-3 col-xl-3">

                <div class="view zoom overlay z-depth-1 rounded mb-3 mb-md-0">
                    <img class="img-fluid w-100"
                    src="https://via.placeholder.com/1050x1050">
                    <a href="#!"></a>
                </div>
            </div>

            <div class="col-md-7 col-lg-9 col-xl-9">
                
            <div>

                <div class="d-flex justify-content-between">
                        <div>
                            <h5>{{$produit->libelle}}</h5>
                        </div>
                <div>
                            <div class="def-number-input number-input safari_only mb-0 w-100">
                            <button onclick="this.parentNode.querySelector('input[type=number]').stepDown()"
                                class="minus decrease"></button>
                            <input class="quantity" min="0" name="quantity" value="1" type="number">
                            <button onclick="this.parentNode.querySelector('input[type=number]').stepUp()"
                                class="plus increase"></button>
                            </div>
                            <small id="passwordHelpBlock" class="form-text text-muted text-center">
                                    Nombre de produits
                            </small>
                </div>
            </div>
                    <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <a href="{{ Route( 'Cart.destroy') }}" type="button" class="card-link-secondary small text-uppercase mr-3"><i
                                    class="fas fa-trash-alt mr-1"> {{ Cart::destroy() }}</i>Supprimer le produit </a>
                                <a href="#!" type="button" class="card-link-secondary small text-uppercase"><i
                                    class="fas fa-heart mr-1"></i> Supprimer de la liste des souhaits </a>
                            </div>
                    <p class="mb-0"><span><strong id="summary">{{$produit->prix_vente}}</strong></span></p class="mb-0">
                    </div>
            </div>

            </div>

            </div>
            <hr class="mb-4">

            </div>
            </div>
            @endforeach

           

        @else


        @endif

        <div class="mb-3">
            <div class="pt-4">

            <h5 class="mb-4">Nous acceptons</h5>

            <img class="mr-2" width="45px"
            src="https://mdbootstrap.com/wp-content/plugins/woocommerce-gateway-stripe/assets/images/visa.svg"
            alt="Visa">
            <img class="mr-2" width="45px"
            src="https://mdbootstrap.com/wp-content/plugins/woocommerce-gateway-stripe/assets/images/amex.svg"
            alt="American Express">
            <img class="mr-2" width="45px"
            src="https://mdbootstrap.com/wp-content/plugins/woocommerce-gateway-stripe/assets/images/mastercard.svg"
            alt="Mastercard">
            <img class="mr-2" width="45px"
            src="https://mdbootstrap.com/wp-content/plugins/woocommerce/includes/gateways/paypal/assets/images/paypal.png"
            alt="PayPal acceptance mark">
            </div>
            </div>
            <!-- Card -->

            </div>
            <!--Grid column-->

            <!--Grid column-->
            <div class="col-lg-4">

            <!-- Card -->
            <div class="mb-3">
            <div class="pt-4">

            <h5 class="mb-3">The total amount of</h5>

            <ul class="list-group list-group-flush">
            <li class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 pb-0">
            Temporary amount
            <span>$25.98</span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center px-0">
            Shipping
            <span>Gratis</span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 mb-3">
            <div>
                <strong>The total amount of</strong>
                <strong>
                <p class="mb-0">(including VAT)</p>
                </strong>
            </div>
            <span><strong>$53.98</strong></span>
            </li>
            </ul>

            <button type="button" class="btn btn-primary btn-block">payer maintenant</button>

            </div>
            </div>
            <!-- Card -->

            <!-- Card -->
            <div class="mb-3">
            <div class="pt-4">



            <div class="collapse" id="collapseExample">
            <div class="mt-3">
            <div class="md-form md-outline mb-0">
                <input type="text" id="discount-code" class="form-control font-weight-light"
                placeholder="Enter discount code">
            </div>
            </div>
            </div>
            </div>
            </div>

            </div>
@endsection