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
    <title>Document</title>
     <!--bootstrap-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    
    <!--icono-->
     <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
     
     <!--css-->
     <link rel="stylesheet" href="css/estilo.css">
    
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
   <br>
<section>
 <div class="col">
             <h1 class="text-center"><b>Pago Online</b></h1>
              <div class="row justify-content-center">
                <div class="col-xl-8 col-md-10">
                  <form class="position-relative d-block" data-aos="fade-up">
                    <div class="form-group">
                      <label for="course-nombre-1"></label>
                      <input name="course-name" id="course-nombre-1" type="text" class="form-control form-control-lg"  placeholder="Ingrese su Nombre">
                    </div>

                    <div class="form-group">
                      <label for="course-apellido-1"></label>
                      <input name="course-email" id="course-apellido-1" type="email" class="form-control form-control-lg" placeholder="Ingrese su Apellido">
                    </div>
                    <div class="form-group">
                      <label for="course-run-1"></label>
                      <input name="course-email" id="course-run-1" type="text" class="form-control form-control-lg" placeholder="Ingrese su Run">
                    </div>
                    <div class="form-group">
                      <label for="course-numero-1"></label>
                      <input name="course-numero" id="course-numero-1" type="number" class="form-control form-control-lg" placeholder="Ingrese numero de tarjeta">
                    </div>
                    <div class="form-group">
                      <div class="row">
                        
                        <div class="col">
                          <div class="form-group rounded bg-white p-2 border">
                            <div class="custom-control custom-radio">
                              <input type="radio" id="course-radio-beginner-1" name="course-radio-1" class="custom-control-input">
                              <label class="custom-control-label" for="course-radio-beginner-1"><i class="fas fa-credit-card"></i> Tarjeta de Credito</label>
                            </div>
                          </div>
                        </div>
                        <div class="col">
                          <div class="form-group rounded bg-white p-2 border">
                            <div class="custom-control custom-radio">
                              <input type="radio" id="course-radio-advanced-1" name="course-radio-1" class="custom-control-input">
                              <label class="custom-control-label" for="course-radio-advanced-1"><i class="fas fa-credit-card"></i> Tarjeta de Debito</label>
                        
                            </div>
                            
                          </div>
                          
                        </div>
                         
                          </div>
                           <img src="css/imgf.png" class="img-fluid" alt="Responsive image">
                           <img src="css/web.png" class="img-fluid" alt="Responsive image">
                           <img id="estado" src="css/estado.png" class="img-fluid" 
                           alt="Responsive image">
                      </div>
                      <select class="custom-select custom-select-lg mb-3">
                      <option selected>Elija...</option>
                       <option value="1">Visa</option>
                       <option value="2">Master Card</option>
                       <option value="3">Santander</option>
                       <option value="4">Banco Falabella</option>
                       <option value="5">Banco de Chile</option>
                       <option value="6">Banco Estado</option>
                      </select>
                    <div class="form-group text-center">
                      <button class="btn btn-lg  btn-block mb-2" type="submit">Pagar</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
      </section>
    
    
    
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