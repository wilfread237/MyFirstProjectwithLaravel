<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="icon" type="image/png" href="bootstrap/css/favicon.png">  <!--the favicon -->

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" 
rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" 
crossorigin="anonymous">

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" 
integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" 
crossorigin="anonymous"></script>

<script src="https://kit.fontawesome.com/c1238f4d36.js" crossorigin="anonymous"></script> 
<!-- for get the fontawesone online -->
    <title>Insert</title>
</head>
<body>
<div class="container" style="text-align:center;">
    

    <div class="row">
        <div class="col-md-6 col-md-offset-3" style="margin-top:50px;">

    <hr>

<form action="insert" method="post">

            <h4>Formulaire d'enregistrement de la catégorie du produit</h4>
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

    <div class="form-floating">
         <!-- the value 'hidden' in the input is use for undisplay this input -->
         <input type="hidden" class="form-control" name="statut" value="actif" id="floatingPassword">

    </div>

    <br><br>
                    <button type="submit" value="submit" class="btn btn-primary" >Envoyer</button>
                    <button type="reset" value="reset" class="btn btn-secondary">Annuler</button>

                    <br><br>

<p style="color:black;">© 2021 FileManagement Form Admin. Tous les droits Reservés | Produits Faits par <b>Groupe 24</b>

</p>
            
 </form>

        </div>
    
    </div>
</body>
</html>