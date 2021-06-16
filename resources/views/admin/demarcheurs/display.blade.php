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

    <title>display</title>
</head>
<body>

<div class="form-floating mb-12">

<input type="search" class="form-control" id="floatingInput" placeholder="Rechercher..." style="width:995px;
         padding: 10px;
         border-radius: 5px;
         margin-top:20px; margin-left:30px;"
        >
        <script>
                      document.querySelector("#search").onkeyup = function(){
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

<label for="floatingInput" style="margin-left:35px;">Rechercher...</label>

</div>


  <div class="col-md-12 col-md-offset-6 container" style="align:center; margin-top:25px;">
  

        <table cellspacing="0.5" cellpadding="20" class="table table-dark table-borderless table-hover">

            <thead>
                  <tr>
                  
                    <th>NOM</th>
                    <th>PRENOM</th>
                    <th>EMAIL</th>
                    <th>TELEPHONE</th>
                    <th>LOGIN</th>
                    <th>MOT DE PASSE</th>
                    <th>STATUT</th>
                    <th>MODIFIER</th>
                    <th>SUPPRIMER</th>

                  </tr>
            </thead>
          
            <tr class="element">
              
            </tr>
          



          </table>
</div>

</body>
</html>