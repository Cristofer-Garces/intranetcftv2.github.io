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
    <title>CFT Lota</title>
    
    <!--iconos-->
     <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/solid.css">
     <script src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>
   
    <!--bootstrap-->
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
     
    <!--link css-->
     <link rel="stylesheet" href="css/home.css">
   
    
</head> 
<body>
 
  <!--navegacion-->
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
    <!--contenido-->
    <div class="container">  
    <br>
      <div class="panel panel-default">
	  <div class="panel-body">
		<div class="row">
			<div class="col-md-2">
				<img src="srci/logo.jpg" class="img-fluid d-none d-sm-block" alt="Responsive image">
			</div>
			<div class="col-md-8 text-center"><br>
				<h2 style="text-align:center">Bienvenido(a)</h2>
				
				<!--va el nombre estuadiante-->
				<h5 class="text-center">Pedro Machuca Gonzalez</h5>

				<a class="btn btn-primary" href="https://accounts.google.com/signin/v2/identifier?continue=https%3A%2F%2Fmail.google.com%2Fmail%2F&amp;service=mail&amp;sacu=1&amp;rip=1&amp;flowName=GlifWebSignIn&amp;flowEntry=ServiceLogin" target="_blank">Ir a Correo Electrónico</a>
			</div>
			<div class="col-md-2"><br>
				<img src="srci/unnamed.jpg" class="img-fluid d-none d-sm-block" alt="Responsive image">
			</div>
		</div>
	</div>
  </div>
 </div>
 <!-- Perfil-->
  <div class="container1" id="container1" style="text-align: center; height: 300px; padding:12px; background: url(img/informatica.jpg);"> 
         <img src="img/perfil.png" class="imgperfil img-fluid" alt="Responsive image" style="width: 200px; height: 200px; border-radius: 50%;">    
    </div>
 <!--info pantalla-->
  <br>
   <div class="container col-md-8">
    <div class="panel panel-default">
      <div class="panel-body">
        <h3 style="text-align:center">Datos Personales</h3>
        <br>
        
        <table class="table table-bordered table-hover table-condensed" style="font-size: 15px;">
          <tbody><tr>
            <td> <strong>Nombre: </strong></td>
            <td>Pedro Pablo Machuca Gonzalez </td>
          </tr>
          <tr>
            <td> <strong>Rut: </strong></td>
            <td>19.666.666-6 </td>
          </tr>
          <tr>
            <td> <strong>Rol: </strong></td>
            <td> 555551 - 3 </td>
          </tr>
          <tr>
            <td> <strong>Sede: </strong></td>
            <td> Casa Central Lota</td>
          </tr>
          <tr>
            <td> <strong>Carrera: </strong></td>
            <td> COMPUTACIÓN E INFORMÁTICA</td>
          </tr>
          <tr>
            <td> <strong>Correo Electrónico: </strong></td>
            <td> pemachuca@cftla.cl</td>
          </tr>
          <tr>
            <td> <strong>Beneficio Actual </strong></td>
            <td>Subsidio Corfo</td>
          </tr>
        </tbody>
        </table>
        </div>
      </div>
    </div>
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

  
  
    <!--java script-->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>     
</body>
</html>