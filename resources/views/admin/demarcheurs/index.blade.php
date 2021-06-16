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
    

    <div class="row">
        <div class="col-md-6 col-md-offset-3" style="margin-top:50px;">

<form action="insert" method="post">

            <h4>Formulaire d'enregistrement</h4>
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

            <input type="text" class="form-control" id="floatingInput" name="nom" placeholder="nom" value="{{ old('nom') }}">
            <label for="floatingInput">Nom</label>
            <span style="color:red;">@error('nom'){{ $message }} @enderror</span>
     </div>

    <div class="form-floating mb-3">

            <input type="text" class="form-control" id="floatingInput" name="prenom" placeholder="prenom" value="{{ old('prenom') }}">
            <label for="floatingInput">Prenom</label>
            <span style="color:red;">@error('prenom'){{ $message }} @enderror</span>
    </div>

        
    <div class="form-floating mb-3">

        <input type="email" class="form-control" name="email" id="floatingInput" pattern="^[A-Za-z]+@{1}gmail+\.{1}com$" placeholder="name@example.com" value="{{ old('email') }}">
        <label for="floatingInput">Adresse Email</label>
        <span style="color:red;">@error('email'){{ $message }} @enderror</span>

    </div>


    <div class="form-floating mb-3">

         <input type="tel" class="form-control" id="floatingInput" name="telephone" placeholder="Telephone" value="{{ old('telephone') }}" >
         <label for="floatingInput">Telephone</label>
         <span style="color:red;">@error('telephone'){{ $message }} @enderror</span>

    </div>


    <div class="form-floating mb-3">

        <input type="text" class="form-control" id="floatingInput" name="login" placeholder="Login" value="{{ old('login') }}">
        <label for="floatingInput">Login</label>
        <span style="color:red;">@error('login'){{ $message }} @enderror</span>

    </div>

                

    <div class="form-floating">

       <input type="password" class="form-control" name="password" id="floatingPassword" placeholder="Password" value="{{ old('password') }}">
       <label for="floatingPassword">Password</label>
       <span style="color:red;">@error('password'){{ $message }} @enderror</span>

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