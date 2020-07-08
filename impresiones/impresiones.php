<!DOCTYPE html>

<?php

session_start();

if ($_SESSION["autentificado"] != "SI") {
 //si no existe, envio a la página de autentificacion
 header("Location: ../index.php");
 
 exit();
} 
?>


<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!--bootstrap-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    
    <!--icono-->
     <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
     
     <!--css-->
     <link rel="stylesheet" href="css/impre.css">
    <title>Impresiones</title>
</head>
<body>

<!--navegador-->
 <nav class="navbar sticky-top navbar-expand-lg navbar-light bg-light">
    <div class="container">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
       <ul class="navbar-nav">
        <li class="nav-item active">
        <a  style="color:#f0ad4e;" class="nav-link" href="../home/home.php">Mi CFTLA</a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="../horario/horario.php">Horario</a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="../notas/notas.php">Notas y Asistencia</a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="../biblioteca/biblioteca.php">Biblioteca</a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="../impresiones/impresiones.php">Impresiones</a>
        </li>
        <li class="nav-item dropright">
         <div class="dropdown">
           <a class="nav-link dropdown-toggle" id="userDropdown1" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Certificado
           </a>

             <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
               <a class="dropdown-item" href="http://estudiantes.cftla.cl/parciales/certificado_alumno.php" style="color:#f0ad4e;">Alumno Regular</a>
               <a class="dropdown-item" href="#" style="color:#f0ad4e;">Notas del semestre</a>
               <a class="dropdown-item" href="#" style="color:#f0ad4e;">Formulario Justificación</a>
             </div>
          </div>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="../pagos/pagos.php">Pago Online</a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="https://www.cftla.cl/portal/index.php/contacto">Contacto</a>
        </li>
        <li class="nav-item dropright">
        <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
        <div class="dropdown-menu dropup-menu-right" aria-labelledby="userDropup">
        <div class="drop-divider"></div>
        <a class="dropdown-item" href="../conexiones_bd/cerrarsession.php" style="color:#f0ad4e;">Cerrar sesión</a>
        </div>
        </li>
       </ul>
    </div>
   </div>
  </nav> 
  <br><br>


<!-- Modal -->  
<div class="text-center" id="certificado">
  <!--solicitar impresiones-->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#Modal1">
<i class="fas fa-file-signature fa-4x"></i>
  Solicitar Impresiones
</button>
<div class="modal fade" id="Modal1" tabindex="-1" role="dialog" aria-labelledby="Modal1Label" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="Modal1Label">Nueva solicitud</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span class="fas fa-window-close"></span>
        </button>
      </div>
      <div class="modal-body">
        <form>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Mensaje:</label>
            <textarea class="form-control" id="message-text"></textarea>
            <div class="custom-file">
               <input type="file" class="custom-file-input" id="customFile">
               <label class="custom-file-label" for="customFile">Adjuntar archivo</label>
            </div>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-primary">Enviar solicitud</button>
      </div>
    </div>
  </div>
</div>
<br><br>

<!-- Listado de solicitudes-->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#Modal2">
 <i class="fas fa-file-signature fa-4x"></i>Listado de solicitudes. 
</button>


<div class="modal fade" id="Modal2" tabindex="-1" role="dialog" aria-labelledby="Modal2Label" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="Modal2Label"></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span class="fas fa-window-close"></span>
        </button>
      </div>
      <div class="modal-body text-center">
        <form> 
       <table class="table-responsive ">
         <tr class="table table-primary">
           <td>N°</td>
           <td>Nombre archivo</td>
           <td>Estado</td>
           <td>Eliminar</td>
         </tr>
         <tr>
           <td>1</td>
           <td>...</td>
           <td>Pendiente</td>
           <td><input type="reset" name="cancelar" value="X"></td>
         </tr>
         <tr>
           <td>2</td>
           <td>...</td>
           <td>Pendiente</td>
           <td><input type="reset" name="cancelar" value="X"></td>
         </tr>
       </table>
       </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-primary">Enviar solicitud</button>
      </div>
    </div>
  </div>
</div>
<br><br>

<!-- Información personal referente  a impresiones-->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#Modal3">
 <i class="fas fa-file-signature fa-4x"></i>Información de Hojas. 
</button>


<div class="modal fade" id="Modal3" tabindex="-1" role="dialog" aria-labelledby="Modal3Label" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="Modal3Label"></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span class="fas fa-window-close"></span>
        </button>
      </div>
      <div class="modal-body">
        <form> 
         <table class="table-responsive ">
          <tr class="table table-primary">
           <td>Hojas disponibles</td>
           <td>Últimas impresiones</td>
          
         </tr>
         <tr>
           <td>100</td>
           <td>xx/xx/xxxx</td>
         </tr>
         
       </table>
       </form>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>
</div>


<br>
<br>


      <!--noticias-->
   <div id="carouselInfoInterval" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
    <div class="carousel-item active" data-interval="10000">
      <img src="img/banner_beneficios2al6Junio.png" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item" data-interval="2000">
      <img src="img/banner_beneficiosEstudiantiles.png" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item" data-interval="2000">
      <img src="img/banner_calendario.png" class="d-block w-100" alt="...">
    </div>
     <div class="carousel-item" data-interval="2000">
      <img src="img/banner_cftretomaactividades4.png" class="d-block w-100" alt="...">
    </div>
     <div class="carousel-item">
      <img src="img/banner_teleCovid.png" class="d-block w-100" alt="...">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselInfoInterval" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselInfoInterval" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>


     
<!--footer-->
  <br>
  <br>
    <div style="float: bottom; bottom: 0; width:100%; color:#337ab7;">
     <center>
      <snall class="text-center font-weight-bold">2020 - 20xx CFT Lota-Arauco - Departamento Wena Mi Rey
        <br>
         Plataforma Estudiantes
          </snall>  
           </center>
            <br>
             </div>    
  
  
  
  
   <!--bootstrap jvascrips-->
   <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
   <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>