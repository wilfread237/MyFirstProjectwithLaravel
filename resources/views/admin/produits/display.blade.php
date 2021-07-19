<?php
                use App\Models\categorie;
                use App\Models\produit;
                use App\Http\Controller\Image;

                $produits = produit::all();

                $categories = categorie::all();
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" 
rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" 
crossorigin="anonymous">

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" 
integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" 
crossorigin="anonymous"></script>


<script src="https://kit.fontawesome.com/c1238f4d36.js" crossorigin="anonymous"></script> 


    <title>Affichage</title>
</head>
<body>

<div style="margin-left:50px;">
          <button type="submit"  style="margin-left:20px; margin: top 10px;"><a href="/dashboard">back at the Dashboard</a></button>
  </div>
<div class="form-floating mb-3">

<input type="search" class="form-control" id="floatingInput" placeholder="Rechercher..." style="width:500px;
         padding: 10px;
         border-radius: 5px;
         margin-top:30px; margin-left:170px;"
        >
        <script>
                      document.querySelector(".form-control").onkeyup = function(){
                  var search = this.value.toLowerCase();
                  var elements = document.querySelectorAll(".element");

                  for (var i = 0; i < elements.length; i++) {
                    var datas =  elements[i].querySelectorAll(".data");
                    var chaine = "";
                    for (var j = 0; j < datas.length; j++) {
                      chaine += datas[j].textContent + " ";
                    }

                    chaine = chaine.toLowerCase();

                    if (chaine.indexOf(search) == -1) {
                      elements[i].style.display = 'none';
                    }
                    else{
                      elements[i].style.display = '';
                    }
                    
                  }

                }
    </script>

<label for="floatingInput" style="margin-left:180px;">Rechercher...</label>

                
                   
                <button type="submit"  style="margin-left:20px;" ><a href="/produits">back</a></button>

</div>
                    <h1 style="text-align:center;">Tableau des Produits</h1>

  <div class="col-md-12 col-md-offset-6 container" style="align:center; margin-top:25px;">
  

        <table cellspacing="0.5" cellpadding="20" class="table table-dark table-borderless table-hover">

            <thead>
                  <tr>
                    <th style="display:none;">ID_PRODUIT</th>
                    <th>LIBELLE</th>
                    <th>DESCRIPTION</th>
                    <th>STOCK</th>
                    <th>IMAGE</th>
                    <th>ID DE LA CATEGORIE</th>
                    <th>PRIX_VENTE</th>
                    <th>PRIX_ACHAT</th>
                    <th style="display:none;">STATUT</th>
                    <th>MODIFIER</th>
                    <th>SUPPRIMER</th>

                  </tr>
            </thead>
          
            <tbody>
            
                  @foreach($produit as $produits)

                  <tr class="element">

                  <td style="display:none;">{{ $produits->id_produit}}</td>
                  <td class="data" >{{$produits->libelle}}</td>
                  <td class="data">{{$produits->description}}</td>
                  <td class="data">{{$produits->stock}}</td>
                  <td class="data">{{$produits->image}}</td>
                  <td class="data">{{$produits->id_categorie}}</td>
                  <td class="data">{{$produits->prix_vente}}</td>
                  <td class="data">{{$produits->prix_achat}}</td>
                  <td style="display:none;">{{$produits->statut}}</td>

                  <td class="">
    
                 <a href="/updateProduit/{{$produits->id_produit}}"> <i class="fa fa-pencil-alt" style="margin-left:30px; color:lightgreen;"></i></a>

                  </td>
                

              <td  class="">
    

                  <a href="/delete/{{$produits->id_produit}}"><i class="fa fa-trash" style="margin-left:30px; color: red;"></i></a>
                  
              </td>
              
                  </tr>

                  @endforeach
            
            </tbody>
          



          </table>
</div>

</body>
</html>