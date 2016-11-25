<?php

session_start();

if(isset($_SESSION['user_session'])!="")
{
  header("Location: ");
}

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">    
    <title>Improve/Dipra</title>

    <!-- Bootstrap -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">    
    <link href="assets/css/custom.css" rel="stylesheet">  
    <link href="assets/css/sb-admin.css" rel="stylesheet">
    <link href="assets/fonts/font-awesome.min.css" rel="stylesheet" type="text/css">
        

  </head>
  <body>
<div class="container">
    <div class="row login-wrapper">
      <div class="col-md-6 col-xs-6 col-md-offset-3 col-xs-offset-3">
        <div class="panel panel-default">
          <div class="panel-heading">
            <center><strong><p>IMPROVE</p></strong><br><h6>SISTEMA DE SEGUIMIENTO DE RECLUTACION</h6></center>
          </div>
          <div class="panel-body"> 

          <div class="alert alert-info">
            <strong>Importante!</strong> Introduce todos los campos requeridos.
        </div>

                <div>
                  <center>
                    <img src="assets/img/logo.jpg" class='img-responsive'> 
                  </center>
                </div>
            
                  
          <form class="form-signin" method="post" id="login-form">
                      <div id="error">
                    <!-- error will be shown here ! -->
                </div>

                <div class="form-group">
                  <label for="username">Correo Electronico</label>
                  <div class="input-group">
                    <span class="input-group-addon">
                      <i class="glyphicon glyphicon-user"></i>
                    </span>
                    <input type="mail" name="user_email" id="user_email" class="form-control" >
                  </div>  
                </div>
                    
               <div class="form-group">
                  <label for="password">Contraseña</label>
                  <div class="input-group">
                    <span class="input-group-addon">
                      <i class="glyphicon glyphicon-lock"></i>
                    </span>
                    <input type="password" name="password" id="password" class="form-control" >
                  </div>      
                </div>

                <div class="form-group">
                          <label for="Oficina">Oficina</label>
                          <div class="input-group">
                           <span class="input-group-addon">
                              <i class="glyphicon glyphicon-home"></i>
                            </span>
                            <select id="sucursal" name="oficina" class="form-control" >
                              <option value="pachuca">PACHUCA</option>
                              <option value="puebla">PUEBLA</option>
                              <option value="san_luis">SAN LUIS POTOSI</option>
                            </select>
                          </div>
                      </div>
                        <br>
                        <center>
                    <button type="submit" class="btn btn-success btn-block" name="btn-login" id="btn-login">
                      <span class="glyphicon glyphicon-log-in"></span> &nbsp; ENTRAR
                  </button>
                </center> 
            
            </form>
          </div>
            </div>
        </div>
    </div>
</div>
  <footer> 
        <p class="text-center">&copy; Dipra Seguros</p>                  
    </footer>

    <!-- JQuery de bootstraps -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    
    <!-- archivos complementos de bootstraps -->
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery-1.11.3.min.js"></script>
    <script src="assets/js/script.js"></script>
    <script src="assets/js/validation.min.js"></script>
  </body>
</html>



