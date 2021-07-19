    <?php
                use App\Models\categorie;

                $categorie = categorie::all();
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <link rel="icon" type="image/png" href="bootstrap/css/favicon.png">  <!--the favicon -->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" 
    crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" 
    crossorigin="anonymous"></script>

    <script src="https://kit.fontawesome.com/c1238f4d36.js" crossorigin="anonymous"></script> 
    <!-- for get the fontawesone online -->

    <title>Insertion</title>
</head>
<body>
    
<div class="container">
    

    <div class="row" style="text-align:center;">
        <div class="col-md-6 col-md-offset-3" style="margin-top:50px;">

<form action="insertProduit" method="POST">
    <hr>

            <h4>Formulaire d'enregistrement du produit</h4>
    <hr>

    @if(Session::get('success'))
        <div class="alert alert-success">
            {{Session::get('success')}}
        </div>
    @endif

    @if(Session::get('fail'))
        <div class="alert alert-danger">
            {{Session::get('fail')}}
        </div>
    @endif
            
                    <!-- this is the token that is used for the ecryption of the datas form -->
                @csrf  

                   
     <div class="form-floating mb-3">

            <input type="text" class="form-control" id="floatingInput" name="libelle" placeholder="libelle" value="{{ old('libelle') }}">
            <label for="floatingInput">libelle</label>
            <span style="color:red;">@error('libelle'){{ $message }} @enderror</span>
     </div>

    <div class="form-floating mb-3">

            <input type="text" class="form-control" id="floatingInput" name="description" placeholder="description" value="{{ old('description') }}">
            <label for="floatingInput">description</label>
            <span style="color:red;">@error('description'){{ $message }} @enderror</span>
    </div>

        
    <div class="form-floating mb-3">

        <input type="text" class="form-control" name="stock" id="floatingInput" placeholder="name@example.com" value="{{ old('stock') }}">
        <label for="floatingInput">stock</label>
        <span style="color:red;">@error('stock'){{ $message }} @enderror</span>

    </div>


    <div class="form-floating mb-3">

         <input type="file" class="form-control"  id="floatingInput" name="image" accept=".jpg, .jpeg, .jfif, .gif" placeholder="image" value="{{ old('image') }}" >
         <label for="floatingInput">image</label>
         <span style="color:red;">@error('image'){{ $message }} @enderror</span>

    </div>


    <div class="form-floating mb-3">
        <select name="id_categorie" id="floatingInput"  class="form-control input-lg" value="{{ old('id_categorie') }}" required>


											 @for ($i=0; $i< sizeof($categorie);$i++) {   

											
											<option value="<?php echo $categorie[$i]->id_categorie; ?>">

												<?php   echo $categorie[$i]->libelle ?>

											</option>

											 }  
                                             @endfor

							</select>
        <span style="color:red;">@error('id_categorie'){{ $message }} @enderror</span>

    </div>

                

    <div class="form-floating">

       <input type="text" class="form-control" name="prix_vente" id="floatingInput" placeholder="prix de vente" value="{{ old('prix_vente') }}">
       <label for="floatingInput">prix de vente</label>
       <span style="color:red;">@error('prix_vente'){{ $message }} @enderror</span>

    </div>

    <div class="form-floating">

       <input type="text" class="form-control" name="prix_achat" id="floatingInput" placeholder="prix d'achat" value="{{ old('prix_achat') }}">
       <label for="floatingInput">prix d'achat</label>
       <span style="color:red;">@error('prix_achat'){{ $message }} @enderror</span>

    </div>

    <div class="form-floating">
         <!-- the value 'hidden' in the input is use for undisplay this input -->
         <input type="hidden" class="form-control" name="statut" value="actif" id="floatingPassword">

    </div>

    <br><br>
                    <button type="submit" value="submit" class="btn btn-primary" >Envoyer</button>
                    <button type="reset" value="reset" class="btn btn-danger">Annuler</button>

                    <br><br>

<p style="color:black;">© 2021 FileManagement Form Admin. Tous les droits Reservés | Produits Faits par <b>Groupe 24</b>

</p>
            
 </form>

        </div>
    
    </div>
</div>
</body>
</html>