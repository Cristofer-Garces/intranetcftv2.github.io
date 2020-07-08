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
     <link rel="stylesheet" href="css/hora.css">
    <title>Horario</title>
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
     <br>
     <div class="container">
     <h3 style="text-align: center;">Horario de Clases</h3>
     <br>
     <table class="table table-bordered table-hover table-condensed" style="font-size: 15px;">
     <tbody><tr>
     <td><b>Periodo Academico: </b></td>
     <td class="text-left"> Tercer Semestre - 2020 </td>
     </tr>
     <tr>
     <td><b>Carrera:</b> </td>
     <td class="text-left">COMPUTACIÓN E INFORMÁTICA</td>
     </tr>
     </tbody></table>
     <br>
     <br>
         <div class="container" id="hora">
             <div class="accordion" id="accordionExample">
  <div class="card">
    <div class="card-header" id="headingOne">
      <h2 class="mb-0">
        <button class="btn btn-link btn-block text-center" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          Lunes
        </button>
      </h2>
    </div>

    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
      <div class="card-body">
        <table class="table table-hover table-responsive-lg" style="font-size: 12px;">
                                        
                                         <!--dia1-->
                                        <tbody><tr>
                                         <td><b>Hora</b></td>
                                         <td><b>Sala</b></td>
                                         <td><b>Docente</b></td>
                                         <td><b>Asignatura</b></td>
                                         </tr>

                                         <tr>
                                         <td><center>10:15 - 11:00</center></td>
                                         <td>LABORATORIO N°13, CENTRAL</td>
                                         <td>CLAUDIO  ALEJANDRO CARDENAS MONCADA</td>
                                         <td>INGLÉS TÉCNICO I</td>
                                         </tr>
                                         <tr>
                                         <td><center>11:00 - 11:45</center></td>
                                         <td>LABORATORIO N°13, CENTRAL</td>
                                         <td>CLAUDIO  ALEJANDRO CARDENAS MONCADA</td>
                                         <td>INGLÉS TÉCNICO I</td>
                                         </tr>
                                         <tr>
                                         <td><center>12:00 - 12:45</center></td>
                                         <td>LABORATORIO N°13, CENTRAL</td>
                                         <td>CLAUDIO  ALEJANDRO CARDENAS MONCADA</td>
                                         <td>INGLÉS TÉCNICO I</td>
                                         </tr>
                                        </tbody>
                                     </table> 
                                    </div>
                                   </div>
                                  </div>
  <div class="card">
    <div class="card-header" id="headingTwo">
      <h2 class="mb-0">
        <button class="btn btn-link btn-block text-center collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          Martes
        </button>
      </h2>
    </div>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
      <div class="card-body">
        <table class="table table-hover table-responsive-lg" style="font-size: 12px; text-align: center;">
                                        
                                         <!--dia2-->
                                        <tbody><tr>
                                         <td><b>Hora</b></td>
                                         <td><b>Sala</b></td>
                                         <td><b>Docente</b></td>
                                         <td><b>Asignatura</b></td>
                                         </tr>

                                         <tr>
                                         <td><center>10:15 - 11:00</center></td>
                                         <td>LABORATORIO N°13, CENTRAL</td>
                                         <td>CLAUDIO  ALEJANDRO CARDENAS MONCADA</td>
                                         <td>INGLÉS TÉCNICO I</td>
                                         </tr>
                                         <tr>
                                         <td><center>11:00 - 11:45</center></td>
                                         <td>LABORATORIO N°13, CENTRAL</td>
                                         <td>CLAUDIO  ALEJANDRO CARDENAS MONCADA</td>
                                         <td>INGLÉS TÉCNICO I</td>
                                         </tr>
                                         <tr>
                                         <td><center>12:00 - 12:45</center></td>
                                         <td>LABORATORIO N°13, CENTRAL</td>
                                         <td>CLAUDIO  ALEJANDRO CARDENAS MONCADA</td>
                                         <td>INGLÉS TÉCNICO I</td>
                                         </tr>
                                        </tbody>
                                     </table> 
                                    </div>
                                   </div>
                                  </div>
  <div class="card">
    <div class="card-header" id="headingThree">
      <h2 class="mb-0">
        <button class="btn btn-link btn-block text-center collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
         Miercoles
        </button>
      </h2>
    </div>
    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
      <div class="card-body">
        <table class="table table-hover table-responsive-lg" style="font-size: 12px; text-align: center;">
                                        
                                         <!--dia3-->
                                        <tbody><tr>
                                         <td><b>Hora</b></td>
                                         <td><b>Sala</b></td>
                                         <td><b>Docente</b></td>
                                         <td><b>Asignatura</b></td>
                                         </tr>

                                         <tr>
                                         <td><center>10:15 - 11:00</center></td>
                                         <td>LABORATORIO N°13, CENTRAL</td>
                                         <td>CLAUDIO  ALEJANDRO CARDENAS MONCADA</td>
                                         <td>INGLÉS TÉCNICO I</td>
                                         </tr>
                                         <tr>
                                         <td><center>11:00 - 11:45</center></td>
                                         <td>LABORATORIO N°13, CENTRAL</td>
                                         <td>CLAUDIO  ALEJANDRO CARDENAS MONCADA</td>
                                         <td>INGLÉS TÉCNICO I</td>
                                         </tr>
                                         <tr>
                                         <td><center>12:00 - 12:45</center></td>
                                         <td>LABORATORIO N°13, CENTRAL</td>
                                         <td>CLAUDIO  ALEJANDRO CARDENAS MONCADA</td>
                                         <td>INGLÉS TÉCNICO I</td>
                                         </tr>
                                        </tbody>
                                     </table> 
                                    </div>
                                   </div>
                                  </div>
      <div class="card">
    <div class="card-header" id="headingfour">
      <h2 class="mb-0">
        <button class="btn btn-link btn-block text-center collapsed" type="button" data-toggle="collapse" data-target="#collapsefour" aria-expanded="false" aria-controls="collapsefour">
          Jueves
        </button>
      </h2>
    </div>
    <div id="collapsefour" class="collapse" aria-labelledby="headingfour" data-parent="#accordionExample">
      <div class="card-body">
        <table class="table table-hover table-responsive-lg" style="font-size: 12px; text-align: center;">
                                        
                                         <!--dia4-->
                                        <tbody><tr>
                                         <td><b>Hora</b></td>
                                         <td><b>Sala</b></td>
                                         <td><b>Docente</b></td>
                                         <td><b>Asignatura</b></td>
                                         </tr>

                                         <tr>
                                         <td><center>10:15 - 11:00</center></td>
                                         <td>LABORATORIO N°13, CENTRAL</td>
                                         <td>CLAUDIO  ALEJANDRO CARDENAS MONCADA</td>
                                         <td>INGLÉS TÉCNICO I</td>
                                         </tr>
                                         <tr>
                                         <td><center>11:00 - 11:45</center></td>
                                         <td>LABORATORIO N°13, CENTRAL</td>
                                         <td>CLAUDIO  ALEJANDRO CARDENAS MONCADA</td>
                                         <td>INGLÉS TÉCNICO I</td>
                                         </tr>
                                         <tr>
                                         <td><center>12:00 - 12:45</center></td>
                                         <td>LABORATORIO N°13, CENTRAL</td>
                                         <td>CLAUDIO  ALEJANDRO CARDENAS MONCADA</td>
                                         <td>INGLÉS TÉCNICO I</td>
                                         </tr>
                                        </tbody>
                                     </table> 
                                    </div>
                                   </div>
                                  </div>
  <div class="card">
    <div class="card-header" id="headingfive">
      <h2 class="mb-0">
        <button class="btn btn-link btn-block text-center collapsed" type="button" data-toggle="collapse" data-target="#collapsefive" aria-expanded="false" aria-controls="collapsefive">
          Viernes
        </button>
      </h2>
    </div>
    <div id="collapsefive" class="collapse" aria-labelledby="headingfive" data-parent="#accordionExample">
      <div class="card-body">
        <table class="table table-hover table-responsive-lg" style="font-size: 12px; text-align: center;">
                                        
                                         <!--dia5-->
                                        <tbody><tr>
                                         <td><b>Hora</b></td>
                                         <td><b>Sala</b></td>
                                         <td><b>Docente</b></td>
                                         <td><b>Asignatura</b></td>
                                         </tr>

                                         <tr>
                                         <td><center>10:15 - 11:00</center></td>
                                         <td>LABORATORIO N°13, CENTRAL</td>
                                         <td>CLAUDIO  ALEJANDRO CARDENAS MONCADA</td>
                                         <td>INGLÉS TÉCNICO I</td>
                                         </tr>
                                         <tr>
                                         <td><center>11:00 - 11:45</center></td>
                                         <td>LABORATORIO N°13, CENTRAL</td>
                                         <td>CLAUDIO  ALEJANDRO CARDENAS MONCADA</td>
                                         <td>INGLÉS TÉCNICO I</td>
                                         </tr>
                                         <tr>
                                         <td><center>12:00 - 12:45</center></td>
                                         <td>LABORATORIO N°13, CENTRAL</td>
                                         <td>CLAUDIO  ALEJANDRO CARDENAS MONCADA</td>
                                         <td>INGLÉS TÉCNICO I</td>
                                         </tr>
                                        </tbody>
                                     </table> 
                                    </div>
      </div>
    </div>
    <div class="card">
    <div class="card-header" id="headingsix">
      <h2 class="mb-0">
        <button class="btn btn-link btn-block text-center collapsed" type="button" data-toggle="collapse" data-target="#collapsesix" aria-expanded="false" aria-controls="collapsefive">
          Sabado
        </button>
      </h2>
    </div>
    <div id="collapsesix" class="collapse" aria-labelledby="headingsix" data-parent="#accordionExample">
      <div class="card-body">
       <table class="table table-hover table-responsive-lg" style="font-size: 12px; text-align: center;">
                                        
                                         <!--dia6-->
                                        <tbody><tr>
                                         <td><b>Hora</b></td>
                                         <td><b>Sala</b></td>
                                         <td><b>Docente</b></td>
                                         <td><b>Asignatura</b></td>
                                         </tr>

                                         <tr>
                                         <td><center>10:15 - 11:00</center></td>
                                         <td>LABORATORIO N°13, CENTRAL</td>
                                         <td>CLAUDIO  ALEJANDRO CARDENAS MONCADA</td>
                                         <td>INGLÉS TÉCNICO I</td>
                                         </tr>
                                         <tr>
                                         <td><center>11:00 - 11:45</center></td>
                                         <td>LABORATORIO N°13, CENTRAL</td>
                                         <td>CLAUDIO  ALEJANDRO CARDENAS MONCADA</td>
                                         <td>INGLÉS TÉCNICO I</td>
                                         </tr>
                                         <tr>
                                         <td><center>12:00 - 12:45</center></td>
                                         <td>LABORATORIO N°13, CENTRAL</td>
                                         <td>CLAUDIO  ALEJANDRO CARDENAS MONCADA</td>
                                         <td>INGLÉS TÉCNICO I</td>
                                         </tr>
                                        </tbody>
                                     </table> 
                                    </div>
                                   </div>
                                  </div>
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
          
            
  
    
       
        
           
     <!--bootstrap jvascrips-->
   <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
   <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>