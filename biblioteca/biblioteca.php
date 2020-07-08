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
     <link rel="stylesheet" href="css/biblio.css">
    <title>Biblioteca</title>
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
        <a  style="background-color:#fff; color: #f0ad4e;" class="nav-link" href="../home/home.php">Mi CFTLA</a>
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

<!--buscador-->

   
   <div class="container">
    <br/>
	<div class="row justify-content-center">
                        <div class="col-12 col-md-10 col-lg-8">
                            <form class="card card-sm">
                                <div class="card-body row no-gutters align-items-center">
                                    <div class="col-auto" id="color">
                                        <i class="fas fa-search"></i>
                                    </div>
                                    <div class="col">
                                        <input class="form-control form-control-lg form-control-borderless" type="search" placeholder="Buscador">
                                    </div>
                                    <div class="col-auto">
                                        <button class="btn btn-lg btn-prynary" type="submit">Buscador de Libros</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
     
      <br>
      <br>

      <!--noticias-->
      <div class="container noticia mt-4 pt-4">
      <div class="card-deck">
  <div class="card">
    <img src="noticia/1n.jpg" class="card-img-top img-fluid" alt="noticia1">
    <div class="card-body">
      <h5 class="card-title">CFTLA COLABORA CON FUSUPO PARA APOYAR A ARTESANAS DE CONTULMO</h5>
      <p class="card-text">Por segundo año consecutivo, el Edificio de Maderas colaboró con Fundación para la Superación de la Pobreza (FUSUPO) en un proyecto de voluntariado. Esta vez...</p>
       <a href="https://www.cftla.cl/portal/index.php/news/item/160-cftla-colabora-con-fusupo-para-apoyar-a-artesanas-de-contulmo" class="btn btn-primary">Seguir leyendo...</a>
    </div>
  </div>
  <div class="card">
    <img src="noticia/2n.jpg" class="card-img-top img-fluid" alt="noticia2">
    <div class="card-body">
      <h5 class="card-title">CERCA DE MIL ESTUDIANTES NUEVOS INGRESARON AL CFT LOTA ARAUCO</h5>
      <p class="card-text">Con una matrícula histórica, el CFT de la UdeC recibió a más de 930 estudiantes nuevos, quienes iniciaron sus actividades académicas la semana recién pasada. El...</p>
      <a href="https://www.cftla.cl/portal/index.php/news/item/159-cerca-de-mil-estudiantes-nuevos-ingresaron-al-cft-lota-arauco" class="btn btn-primary">Seguir leyendo...</a>
    </div>
  </div>
  <div class="card">
    <img src="noticia/4n.jpg" class="card-img-top img-fluid" alt="noticia4">
    <div class="card-body">
      <h5 class="card-title">CFT LOTA ARAUCO POTENCIA ALIANZA CON LA EDUCACIÓN MEDIA TÉCNICO PROFESIONAL</h5>
      <p class="card-text">A través del convenio, de mutua colaboración, entre el Colegio Domingo Parra Corvalán y El Centro de Formación Técnica Lota Arauco, dos estudiantes...</p>
       <a href="https://www.cftla.cl/portal/index.php/news/item/157-cft-lota-arauco-potencia-alianza-con-la-educacion-media-tecnico-profesional" class="btn btn-primary" >Seguir leyendo...</a>
    </div>
  </div>
</div>
      </div>
      
      <br>
      <div class="container">
      <div class="row justify-content-center">
     <a href="https://www.cftla.cl/portal/index.php/noticias" class="btn btn-primary btn-lg activeo"  
         role="button" aria-pressed="true" id="btno">Mostrar todas las Noticias</a>
          </div>
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