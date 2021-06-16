<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>interface root</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
    
        <div class="row">
            <div class="col-md-6 col-md-offset-3" style="margin: top 50px;">

                <form action="add" method="post">
                
                        <!-- this is the token that is used for the ecryption of the datas form -->
                    @csrf  

                <div class="form-group">
                         <label for="login">Login</label>
                            <input type="text" class="form-control" name="login">
                       </div>

                       <div class="form-group">
                         <label for="password">password</label>
                            <input type="password" class="form-control" name="password">
                       </div>

                       <div class="form-group">
                        
                            <input type="text" class="form-control" name="statut" style= "display: none;" value="actif">
                       </div>
                       <div class="form-group">
                        <button type="submit" value="submit" class="btn btn-primary btn-block">Submit</button>
                       </div>
                
                </form>
            </div>
        
        </div>
    </div>
    
</body>
</html>