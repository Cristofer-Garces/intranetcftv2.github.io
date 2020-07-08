<!DOCTYPE html>
<?php

if(isset($_POST['bt1'])){


session_start();

$conexion=mysqli_connect('sql202.mipropia.com', 'mipc_26138896', '12341234', 'mipc_26138896_cftla') or die ("No se pudo conectar a la base de datos". mysqli_error($conexion));


	

$nombre = $_POST["usuario"];
$password = $_POST["clave"];

$query = mysqli_query($conexion,"SELECT * FROM usuarios WHERE usuario = '".$nombre."' and clave = '".$password."'");
$nr = mysqli_num_rows($query);

if($nr == 1 &&  $_POST["usuario"] && $_POST["clave"])
{   
session_start();
$_SESSION["autentificado"]= "SI";
//Datos Correctos
header ("Location: home/home.php"); 
}else{ //datos incorrectos

?> <html>   <script src="//code.jquery.com/jquery-1.12.0.min.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script> 
   <script>
      $(document).ready(function()
      {
         $("#mostrarmodal").modal("show");
      });
    </script>
</head>
<body>
   <div class="modal fade" id="mostrarmodal" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
           <div class="modal-body">
              <center>
              <h4>Usuario o Contraseña incorrectas</h4>
              <br>
              <p>Si no recuerda su usuario o contraseña, comuniquese directamente con el Departamento de Impresiones</p>
              </center>
       </div>
           <div class="modal-footer d-flex justify-content-center">
          <a href="#" data-dismiss="modal" class="btn btn-danger">Cerrar</a>
             
           </div> 
      </div>
   </div>
</div>
</body>
</html></html>
<?php
}
}

?>

<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/solid.css">
    <script src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>
    
    <title>CFT Lota-Arauco</title>
      
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    
   <link rel="stylesheet" type="text/css" href="login/estilo.css">
</head>
<body>
    <div class="modal-dialog text-center">
        
          <div class="col-sm-8 main-section">
           
             <div class="modal-content">
              
                <div class="col-12 user-img">
                  <img src="login/imagen/logo.jpg">
                   <h1>Portal Oficial CFT Lota Arauco</h1>
                   </div>
              
                     <form class="col-12" action="#" method="POST">
                      
                      <div class="form-group" id="grupo-user">
                       <label for="usuario">Usuario</label>
                        <input type="text" class="form-control" name="usuario"  placeholder="Usuario">
                         </div>
                     
                          <div class="form-group" id="grupo-pass">
                           <label for="contraseña">Contraseña</label>
                            <input type="password" class="form-control" name="clave" placeholder="Contraseña">
                             </div>                       
                  
                              <button type="submit"  name="bt1" class="btn btn-warning"><i class="fas fa-sign-in-alt"></i> Ingresar</button>
                               </form>
              
                                <div class="col-12 olvido">
                                 
                                  </div>
                                   </div>
                                    </div>
                                     </div>
                                     <br>
                                     <br>
                                      <div style="float: bottom; bottom: 0; width:100%; color:#fff;">
                                       <center>
                                         <snall class="text-center font-weight-bold"><b>2020 - 20xx CFT Lota-Arauco - Departamento Wena Mi Rey</b>
                                         <br>
                                          Plataforma Estudiantes
                                          </snall>  
                                          </center>
                                          <br>
                                          </div>        
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script> 
    
                
</body>
</html>