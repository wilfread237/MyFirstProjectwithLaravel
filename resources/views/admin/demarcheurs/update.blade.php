

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" 
rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" 
crossorigin="anonymous">

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" 
integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" 
crossorigin="anonymous"></script>


<script src="https://kit.fontawesome.com/c1238f4d36.js" crossorigin="anonymous"></script> 

    <title>Update</title>
</head>
<body>
    
<div class="container">
    

    <div class="row">
        <div class="col-md-6 col-md-offset-3" style="margin-top:50px;">

<form action="updateDemarcheur" method="post">

            <h4>Formulaire de modification du démarcheur</h4>
    <hr>

    
                    <!-- this is the token that is used for the ecryption of the datas form -->
                @csrf  

                   
      <div class="form-floating mb-3">

            <input type="hidden" class="form-control" id="floatingInput" name="id_demarcheur" placeholder="id_demarcheur">
            <label for="floatingInput">id_demarcheur</label>
            
     </div>

     <div class="form-floating mb-3">

            <input type="text" class="form-control" id="floatingInput" name="nom" placeholder="nom" value = '<?php echo $data->nom ; ?>'>
            <label for="floatingInput">Nom</label>
            
     </div>

    <div class="form-floating mb-3">

            <input type="text" class="form-control" id="floatingInput" name="prenom" placeholder="prenom">
            <label for="floatingInput">Prenom</label>
            
    </div>

        
    <div class="form-floating mb-3">

        <input type="email" class="form-control" name="email" id="floatingInput" pattern="^[A-Za-z]+@{1}gmail+\.{1}com$" placeholder="name@example.com">
        <label for="floatingInput">Adresse Email</label>
        

    </div>


    <div class="form-floating mb-3">

         <input type="tel" class="form-control"  id="floatingInput" name="telephone" placeholder="Telephone">
         <label for="floatingInput">Telephone</label>
         

    </div>


    <div class="form-floating mb-3">

        <input type="text" class="form-control" id="floatingInput" name="login" placeholder="Login">
        <label for="floatingInput">Login</label>
        

    </div>

                

    <div class="form-floating">

       <input type="password" class="form-control" name="password" id="floatingPassword" placeholder="Password">
       <label for="floatingPassword">Password</label>
       

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
</div>
</body>
</html>