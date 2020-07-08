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
    <title>Asignatura  y Notas</title>
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

<!--notas-->
 <h1 class="text-center"><b>Notas y Asistencia</b></h1>
	<div class="container">
	<div class="row">
	<!--1-->
	<div class="col-lg-4">
	<div class="our-team-main">
	<div class="team-front">
	<i class="fas fa-book fa-5x"></i>
	<h3>Programación Orientada a Objetos</h3>
	</div>
	<div class="team-back">
	<button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target=".bd-example-modal-lg1">Notas</button>
	
 <div class="modal fade bd-example-modal-lg1" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-md">
    <div class="modal-content">
    
    <div class="modal-header"><strong><b>Programación Orientada a Objetos</b></strong>
    <!--bonton para ver nota 1-->
    <button class="close" data-dismiss="modal"><span class="fas fa-window-close"></span></button></div>
    <div class="modal-body">
    <table class="table table-hover  table-responsive ml-5" style="font-size: 12px;">
                      <tbody><tr>
  	                  <td><b>Tipo</b></td>
                      <td><b>Fecha</b></td>
                      <td><b>Porcentaje</b></td>
                      <td><b>Nota</b></td>
                      </tr>
		              <tr>
			          <td>Taller</td>
                      <td>31-03-2020</td>
  		              <td>10%</td>
                      <td>7.0</td>
		              </tr>
			          <tr>
			          <td>Taller</td>
                      <td>07-04-2020</td>
  		              <td>10%</td>
                      <td>0</td>
		              </tr>
			          <tr>
			          <td>Taller</td>
                      <td>28-04-2020</td>
  		              <td>10%</td>
                      <td>0</td>
		              </tr>
			          <tr>
			          <td>Taller</td>
                      <td>05-05-2020</td>
  		              <td>10%</td>
                      <td>0</td>
		              </tr>
			          <tr>
			          <td>Taller</td>
                      <td>26-05-2020</td>
  		              <td>30%</td>
                      <td>0</td>
		              </tr>
			          <tr>
			          <td>Taller</td>
                      <td>23-06-2020</td>
  		              <td>30%</td>
                      <td>0</td>
		              </tr>
	  	              <tr>
  		              <td colspan="2"></td>
                      <td>100 %</td>
    	              <td>0.7</td>
  	                  </tr>
                      <tr>
                      <td colspan="2"></td>
                      <td>Examen:</td>
                      <td>-</td>
                      </tr>
                      <tr>
		              <td colspan="2"></td>
                      <td>Ex. Repet:</td>
                      <td>-</td>
                      </tr>
                      <tr>
                      <td colspan="2"></td>
                      <td>Nota Final:</td>
                      <td>-</td>
                      </tr>
                      </tbody></table></div>                          
    </div>
   </div>
  </div>
 <br>
 <br>
  <div class="team-back1">
  <button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target=".bd-example-modal-lg8">Asistencia</button>
  <div class="modal fade bd-example-modal-lg8" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-md">
  <div class="modal-content">
  <div class="modal-header"><strong><b>Programación Orientada a Objetos</b></strong>
  <button class="close" data-dismiss="modal"><span class="fas fa-window-close"></span></button></div>
  <div class="modal-body">
  <table class="table table-hover  table-responsive" style="font-size: 12px;">
  <tbody><tr>
    <td class="info"><b> Asignatura</b> </td>
    <td class="info"><b>Sección</b></td>
    <td class="info"><b>Hrs. Asist.</b></td>
    <td class="info"><b>Hrs. Inasist.</b></td>
    <td class="info"><b>Prom. Asist.</b></td>
    <td class="info"><b>Asist.Libre</b></td>
    </tr>
    <tr>
    <td>Programación Orientada a Objetos</td>
    <td><center>2</center></td>
    <td><center>35</center></td>
    <td><center>0</center></td>
    <td><center>100</center></td>
    <td><center>N</center></td>      			          
    </tr>
    </tbody>
    </table>
  </div>
   </div>
    </div>
     </div>
      </div>
       </div> 
	    </div>
	     </div>
	
	<!--2-->
	<div class="col-lg-4">
	<div class="our-team-main">	
	<div class="team-front">
	<i class="fas fa-book fa-5x"></i>
	<h3>Taller Base  de Datos</h3>
	</div>
	<div class="team-back">
	<button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target=".bd-example-modal-lg2">Notas</button>

    <div class="modal fade bd-example-modal-lg2" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-md">
    <div class="modal-content">
    <div class="modal-header"><strong><b>Taller Base  de Datos</b></strong>
                   <!--bonton para ver nota 2-->
    <button class="close" data-dismiss="modal"><span class="fas fa-window-close"></span></button></div>
    <div class="modal-body">
    <table class="table table-hover  table-responsive ml-5" style="font-size: 12px;">
                      <tbody><tr>
  	                  <td><b>Tipo</b></td>
                      <td><b>Fecha</b></td>
                      <td><b>Porcentaje</b></td>
                      <td><b>Nota</b></td>
                      </tr>
		              <tr>
			          <td>Taller</td>
                      <td>31-03-2020</td>
  		              <td>10%</td>
                      <td>7.0</td>
		              </tr>
			          <tr>
			          <td>Taller</td>
                      <td>07-04-2020</td>
  		              <td>10%</td>
                      <td>0</td>
		              </tr>
			          <tr>
			          <td>Taller</td>
                      <td>28-04-2020</td>
  		              <td>10%</td>
                      <td>0</td>
		              </tr>
			          <tr>
			          <td>Taller</td>
                      <td>05-05-2020</td>
  		              <td>10%</td>
                      <td>0</td>
		              </tr>
			          <tr>
			          <td>Taller</td>
                      <td>26-05-2020</td>
  		              <td>30%</td>
                      <td>0</td>
		              </tr>
			          <tr>
			          <td>Taller</td>
                      <td>23-06-2020</td>
  		              <td>30%</td>
                      <td>0</td>
		              </tr>
	  	              <tr>
  		              <td colspan="2"></td>
                      <td>100 %</td>
    	              <td>0.7</td>
  	                  </tr>
                      <tr>
                      <td colspan="2"></td>
                      <td>Examen:</td>
                      <td>-</td>
                      </tr>
                      <tr>
		              <td colspan="2"></td>
                      <td>Ex. Repet:</td>
                      <td>-</td>
                      </tr>
                      <tr>
                      <td colspan="2"></td>
                      <td>Nota Final:</td>
                      <td>-</td>
                      </tr>
                      </tbody></table></div>  
   </div>
  </div>
 </div>
<br>
<br>
    <div class="team-back1">
    <button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target=".bd-example-modal-lg9">Asistencia</button>
    <div class="modal fade bd-example-modal-lg9" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-md">
    <div class="modal-content">
    <div class="modal-header"><strong><b>Taller Base  de Datos</b></strong>
    <button class="close" data-dismiss="modal"><span class="fas fa-window-close"></span></button></div>
    <div class="modal-body">
    <table class="table table-hover  table-responsive" style="font-size: 12px;">
  		        <tbody><tr>
		        <td class="info"><b> Asignatura</b> </td>
          	    <td class="info"><b>Sección</b></td>
          	    <td class="info"><b>Hrs. Asist.</b></td>
          	    <td class="info"><b>Hrs. Inasist.</b></td>
          	    <td class="info"><b>Prom. Asist.</b></td>
                <td class="info"><b>Asist.Libre</b></td>
  		        </tr>
               	<tr>
      		    <td>Taller Base  de Datos</td>
      		    <td><center>2</center></td>
      		    <td><center>35</center></td>
      		    <td><center>0</center></td>
      		    <td><center>100</center></td>
      		    <td><center>N</center></td>      			        
      		    </tr>
                </tbody>
        </table>
    </div>
     </div>
      </div>
       </div>
        </div>
         </div>
          </div>
           </div>
	
	<!--3-->
	<div class="col-lg-4">
	<div class="our-team-main">
	<div class="team-front">
	<i class="fas fa-book fa-5x"></i>
	<h3>Taller de Frameworks</h3>
	</div>
	<div class="team-back">
	<button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target=".bd-example-modal-lg3">Notas</button>
    <div class="modal fade bd-example-modal-lg3" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-md">
    <div class="modal-content">
    <div class="modal-header"><strong><b>Taller de Frameworks</b></strong>
    <!--bonton para ver nota 3-->
    <button class="close" data-dismiss="modal"><span class="fas fa-window-close"></span></button></div>
    <div class="modal-body">
                    <table class="table table-hover  table-responsive ml-5" style="font-size: 12px;">
                      <tbody><tr>
  	                  <td><b>Tipo</b></td>
                      <td><b>Fecha</b></td>
                      <td><b>Porcentaje</b></td>
                      <td><b>Nota</b></td>
                      </tr>
		              <tr>
			          <td>Taller</td>
                      <td>31-03-2020</td>
  		              <td>10%</td>
                      <td>7.0</td>
		              </tr>
			          <tr>
			          <td>Taller</td>
                      <td>07-04-2020</td>
  		              <td>10%</td>
                      <td>0</td>
		              </tr>
			          <tr>
			          <td>Taller</td>
                      <td>28-04-2020</td>
  		              <td>10%</td>
                      <td>0</td>
		              </tr>
			          <tr>
			          <td>Taller</td>
                      <td>05-05-2020</td>
  		              <td>10%</td>
                      <td>0</td>
		              </tr>
			          <tr>
			          <td>Taller</td>
                      <td>26-05-2020</td>
  		              <td>30%</td>
                      <td>0</td>
		              </tr>
			          <tr>
			          <td>Taller</td>
                      <td>23-06-2020</td>
  		              <td>30%</td>
                      <td>0</td>
		              </tr>
	  	              <tr>
  		              <td colspan="2"></td>
                      <td>100 %</td>
    	              <td>0.7</td>
  	                  </tr>
                      <tr>
                      <td colspan="2"></td>
                      <td>Examen:</td>
                      <td>-</td>
                      </tr>
                      <tr>
		              <td colspan="2"></td>
                      <td>Ex. Repet:</td>
                      <td>-</td>
                      </tr>
                      <tr>
                      <td colspan="2"></td>
                      <td>Nota Final:</td>
                      <td>-</td>
                      </tr>
                      </tbody></table></div>                          
    </div>
   </div>
  </div>
<br>
<br>
   <div class="team-back1">
   <button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target=".bd-example-modal-lg10">Asistencia</button>
   <div class="modal fade bd-example-modal-lg10" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
   <div class="modal-dialog modal-md">
   <div class="modal-content">
    <div class="modal-header"><strong><b>Taller de Frameworks</b></strong>
    <button class="close" data-dismiss="modal"><span class="fas fa-window-close"></span></button></div>
    <div class="modal-body">
    <table class="table table-hover  table-responsive" style="font-size: 12px;">
                <tbody><tr>
		        <td class="info"><b> Asignatura</b> </td>
          	    <td class="info"><b>Sección</b></td>
          	    <td class="info"><b>Hrs. Asist.</b></td>
          	    <td class="info"><b>Hrs. Inasist.</b></td>
          	    <td class="info"><b>Prom. Asist.</b></td>
                <td class="info"><b>Asist.Libre</b></td>
  		        </tr>
               	<tr>
      		    <td>Taller de Frameworks</td>
      		    <td><center>2</center></td>
      		    <td><center>35</center></td>
      		    <td><center>0</center></td>
      		    <td><center>100</center></td>
      		    <td><center>N</center></td>      			       
      		    </tr>
                </tbody>
    </table>
    </div>
     </div>
      </div>
       </div>
        </div>
	     </div>
	      </div>
	       </div>

	<!--4-->
	<div class="col-lg-4">
	<div class="our-team-main">
	<div class="team-front">
	<i class="fas fa-book fa-5x"></i>
	<h3>Taller de Recursos Tecnológicos</h3>
	</div>
	<div class="team-back">
	<button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target=".bd-example-modal-lg4">Notas</button>

    <div class="modal fade bd-example-modal-lg4" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-md">
    <div class="modal-content">
    <div class="modal-header"><strong><b>Taller de Recursos Tecnológicos</b></strong>
                   <!--bonton para ver nota 4-->
    <button class="close" data-dismiss="modal"><span class="fas fa-window-close"></span></button></div>
    <div class="modal-body">
                    <table class="table table-hover  table-responsive ml-5" style="font-size: 12px;">
                      <tbody><tr>
  	                  <td><b>Tipo</b></td>
                      <td><b>Fecha</b></td>
                      <td><b>Porcentaje</b></td>
                      <td><b>Nota</b></td>
                      </tr>
		              <tr>
			          <td>Taller</td>
                      <td>31-03-2020</td>
  		              <td>10%</td>
                      <td>7.0</td>
		              </tr>
			          <tr>
			          <td>Taller</td>
                      <td>07-04-2020</td>
  		              <td>10%</td>
                      <td>0</td>
		              </tr>
			          <tr>
			          <td>Taller</td>
                      <td>28-04-2020</td>
  		              <td>10%</td>
                      <td>0</td>
		              </tr>
			          <tr>
			          <td>Taller</td>
                      <td>05-05-2020</td>
  		              <td>10%</td>
                      <td>0</td>
		              </tr>
			          <tr>
			          <td>Taller</td>
                      <td>26-05-2020</td>
  		              <td>30%</td>
                      <td>0</td>
		              </tr>
			          <tr>
			          <td>Taller</td>
                      <td>23-06-2020</td>
  		              <td>30%</td>
                      <td>0</td>
		              </tr>
	  	              <tr>
  		              <td colspan="2"></td>
                      <td>100 %</td>
    	              <td>0.7</td>
  	                  </tr>
                      <tr>
                      <td colspan="2"></td>
                      <td>Examen:</td>
                      <td>-</td>
                      </tr>
                      <tr>
		              <td colspan="2"></td>
                      <td>Ex. Repet:</td>
                      <td>-</td>
                      </tr>
                      <tr>
                      <td colspan="2"></td>
                      <td>Nota Final:</td>
                      <td>-</td>
                      </tr>
                      </tbody></table></div>                          
    </div>
   </div>
  </div>
<br>
<br>
  <div class="team-back1">
  <button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target=".bd-example-modal-lg12">Asistencia</button>
  <div class="modal fade bd-example-modal-lg12" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-md">
  <div class="modal-content">
  <div class="modal-header"><strong><b>Taller de Recursos Tecnológicos</b></strong>
  <button class="close" data-dismiss="modal"><span class="fas fa-window-close"></span></button></div>
  <div class="modal-body">
  <table class="table table-hover  table-responsive" style="font-size: 12px;">
  		        <tbody><tr>
		        <td class="info"><b> Asignatura</b> </td>
          	    <td class="info"><b>Sección</b></td>
          	    <td class="info"><b>Hrs. Asist.</b></td>
          	    <td class="info"><b>Hrs. Inasist.</b></td>
          	    <td class="info"><b>Prom. Asist.</b></td>
                <td class="info"><b>Asist.Libre</b></td>
  		        </tr>
                <tr>
      		    <td>Taller de Recursos Tecnológicos</td>
      			<td><center>2</center></td>
      			<td><center>35</center></td>
      			<td><center>0</center></td>
      			<td><center>100</center></td>
      			<td><center>N</center></td>      			         
      		    </tr>
                </tbody>
    </table>
    </div>
     </div>
      </div>
       </div>
        </div>
         </div>
	      </div>
	       </div>

	<!--5-->
	<div class="col-lg-4">
	<div class="our-team-main">
	<div class="team-front">
	<i class="fas fa-book fa-5x"></i>
	<h3>Seguridad en Redes</h3>
	</div>
	<div class="team-back">
	<button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target=".bd-example-modal-lg5">Notas</button>
    <div class="modal fade bd-example-modal-lg5" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-md">
    <div class="modal-content">
    <div class="modal-header"><strong><b>Seguridad en Redes</b></strong>
                   <!--bonton para ver nota 1-->
    <button class="close" data-dismiss="modal"><span class="fas fa-window-close"></span></button></div>
    <div class="modal-body">
                    <table class="table table-hover  table-responsive ml-5" style="font-size: 12px;">
                      <tbody><tr>
  	                  <td><b>Tipo</b></td>
                      <td><b>Fecha</b></td>
                      <td><b>Porcentaje</b></td>
                      <td><b>Nota</b></td>
                      </tr>
		              <tr>
			          <td>Taller</td>
                      <td>31-03-2020</td>
  		              <td>10%</td>
                      <td>7.0</td>
		              </tr>
			          <tr>
			          <td>Taller</td>
                      <td>07-04-2020</td>
  		              <td>10%</td>
                      <td>0</td>
		              </tr>
			          <tr>
			          <td>Taller</td>
                      <td>28-04-2020</td>
  		              <td>10%</td>
                      <td>0</td>
		              </tr>
			          <tr>
			          <td>Taller</td>
                      <td>05-05-2020</td>
  		              <td>10%</td>
                      <td>0</td>
		              </tr>
			          <tr>
			          <td>Taller</td>
                      <td>26-05-2020</td>
  		              <td>30%</td>
                      <td>0</td>
		              </tr>
			          <tr>
			          <td>Taller</td>
                      <td>23-06-2020</td>
  		              <td>30%</td>
                      <td>0</td>
		              </tr>
	  	              <tr>
  		              <td colspan="2"></td>
                      <td>100 %</td>
    	              <td>0.7</td>
  	                  </tr>
                      <tr>
                      <td colspan="2"></td>
                      <td>Examen:</td>
                      <td>-</td>
                      </tr>
                      <tr>
		              <td colspan="2"></td>
                      <td>Ex. Repet:</td>
                      <td>-</td>
                      </tr>
                      <tr>
                      <td colspan="2"></td>
                      <td>Nota Final:</td>
                      <td>-</td>
                      </tr>
                      </tbody></table></div>                          
    </div>
   </div>
  </div>
<br>
<br>
   <div class="team-back1">
   <button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target=".bd-example-modal-lg11">Asistencia</button>
   <div class="modal fade bd-example-modal-lg11" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
   <div class="modal-dialog modal-md">
   <div class="modal-content">
   <div class="modal-header"><strong><b>Seguridad en Redes</b></strong>
   <button class="close" data-dismiss="modal"><span class="fas fa-window-close"></span></button></div>
   <div class="modal-body">
   <table class="table table-hover  table-responsive" style="font-size: 12px;">
  		        <tbody><tr>
		        <td class="info"><b> Asignatura</b> </td>
          	    <td class="info"><b>Sección</b></td>
          	    <td class="info"><b>Hrs. Asist.</b></td>
          	    <td class="info"><b>Hrs. Inasist.</b></td>
          	    <td class="info"><b>Prom. Asist.</b></td>
                <td class="info"><b>Asist.Libre</b></td>
  		        </tr>
               	<tr>
      		    <td>Seguridad en Redes</td>
      			<td><center>2</center></td>
      			<td><center>35</center></td>
      			<td><center>0</center></td>
      			<td><center>100</center></td>
      			<td><center>N</center></td>      			            
      		    </tr>
                </tbody>
   </table>
   </div>
    </div>
     </div>
      </div>
       </div>
	    </div>
	     </div>
	      </div>
	
	
	<!--6-->
	<div class="col-lg-4">
	<div class="our-team-main">
	<div class="team-front">
	<i class="fas fa-book fa-5x"></i>
	<h3>Inglés Técnico I</h3>
	</div>
	<div class="team-back">
	<button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target=".bd-example-modal-lg6">Notas</button>
    <div class="modal fade bd-example-modal-lg6" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true"> 
    <div class="modal-dialog modal-md">
    <div class="modal-content">    
    <div class="modal-header"><strong><b>Inglés Técnico I</b></strong>
                   <!--bonton para ver nota 6-->
    <button class="close" data-dismiss="modal"><span class="fas fa-window-close"></span></button></div>
    <div class="modal-body">
    <table class="table table-hover  table-responsive ml-5" style="font-size: 12px;">
                      <tbody><tr>
  	                  <td><b>Tipo</b></td>
                      <td><b>Fecha</b></td>
                      <td><b>Porcentaje</b></td>
                      <td><b>Nota</b></td>
                      </tr>
		              <tr>
			          <td>Taller</td>
                      <td>31-03-2020</td>
  		              <td>10%</td>
                      <td>7.0</td>
		              </tr>
			          <tr>
			          <td>Taller</td>
                      <td>07-04-2020</td>
  		              <td>10%</td>
                      <td>0</td>
		              </tr>
			          <tr>
			          <td>Taller</td>
                      <td>28-04-2020</td>
  		              <td>10%</td>
                      <td>0</td>
		              </tr>
			          <tr>
			          <td>Taller</td>
                      <td>05-05-2020</td>
  		              <td>10%</td>
                      <td>0</td>
		              </tr>
			          <tr>
			          <td>Taller</td>
                      <td>26-05-2020</td>
  		              <td>30%</td>
                      <td>0</td>
		              </tr>
			          <tr>
			          <td>Taller</td>
                      <td>23-06-2020</td>
  		              <td>30%</td>
                      <td>0</td>
		              </tr>
	  	              <tr>
  		              <td colspan="2"></td>
                      <td>100 %</td>
    	              <td>0.7</td>
  	                  </tr>
                      <tr>
                      <td colspan="2"></td>
                      <td>Examen:</td>
                      <td>-</td>
                      </tr>
                      <tr>
		              <td colspan="2"></td>
                      <td>Ex. Repet:</td>
                      <td>-</td>
                      </tr>
                      <tr>
                      <td colspan="2"></td>
                      <td>Nota Final:</td>
                      <td>-</td>
                      </tr>
                      </tbody></table></div>                          
    </div>
   </div>
  </div>
<br>
<br>
    <div class="team-back1">
    <button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target=".bd-example-modal-lg13">Asistencia</button>
    <div class="modal fade bd-example-modal-lg13" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-md">
    <div class="modal-content">
    <div class="modal-header"><strong><b>Inglés Técnico I</b></strong>
    <button class="close" data-dismiss="modal"><span class="fas fa-window-close"></span></button></div>
    <div class="modal-body">
    <table class="table table-hover  table-responsive" style="font-size: 12px;">
  		        <tbody><tr>
		        <td class="info"><b> Asignatura</b> </td>
          	    <td class="info"><b>Sección</b></td>
          	    <td class="info"><b>Hrs. Asist.</b></td>
          	    <td class="info"><b>Hrs. Inasist.</b></td>
          	    <td class="info"><b>Prom. Asist.</b></td>
                <td class="info"><b>Asist.Libre</b></td>
  		        </tr>
               	<tr>
      		    <td>Inglés Técnico I</td>
      		    <td><center>2</center></td>
      		    <td><center>35</center></td>
      		    <td><center>0</center></td>
      		    <td><center>100</center></td>
      		    <td><center>N</center></td>      			       
      		    </tr>
                </tbody>
    </table>
    </div>
     </div>
      </div>
       </div>
        </div>
	     </div>
	      </div>
	       </div>
	
	<!--6-->	
	<div class="col-lg-4">
	<div class="our-team-main">
	<div class="team-front">
	<i class="fas fa-book fa-5x"></i>
	<h3>Taller de Emprendimiento</h3>
	</div>
	<div class="team-back">
	<button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target=".bd-example-modal-lg7">Notas</button>

    <div class="modal fade bd-example-modal-lg7" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-md">
    <div class="modal-content">
    <div class="modal-header"><strong><b>Taller de Emprendimiento</b></strong>
                   <!--bonton para ver nota 7-->
    <button class="close" data-dismiss="modal"><span class="fas fa-window-close"></span></button></div>
    <div class="modal-body">
                    <table class="table table-hover  table-responsive ml-5" style="font-size: 12px;">
                      <tbody><tr>
  	                  <td><b>Tipo</b></td>
                      <td><b>Fecha</b></td>
                      <td><b>Porcentaje</b></td>
                      <td><b>Nota</b></td>
                      </tr>
		              <tr>
			          <td>Taller</td>
                      <td>31-03-2020</td>
  		              <td>10%</td>
                      <td>7.0</td>
		              </tr>
			          <tr>
			          <td>Taller</td>
                      <td>07-04-2020</td>
  		              <td>10%</td>
                      <td>0</td>
		              </tr>
			          <tr>
			          <td>Taller</td>
                      <td>28-04-2020</td>
  		              <td>10%</td>
                      <td>0</td>
		              </tr>
			          <tr>
			          <td>Taller</td>
                      <td>05-05-2020</td>
  		              <td>10%</td>
                      <td>0</td>
		              </tr>
			          <tr>
			          <td>Taller</td>
                      <td>26-05-2020</td>
  		              <td>30%</td>
                      <td>0</td>
		              </tr>
			          <tr>
			          <td>Taller</td>
                      <td>23-06-2020</td>
  		              <td>30%</td>
                      <td>0</td>
		              </tr>
	  	              <tr>
  		              <td colspan="2"></td>
                      <td>100 %</td>
    	              <td>0.7</td>
  	                  </tr>
                      <tr>
                      <td colspan="2"></td>
                      <td>Examen:</td>
                      <td>-</td>
                      </tr>
                      <tr>
		              <td colspan="2"></td>
                      <td>Ex. Repet:</td>
                      <td>-</td>
                      </tr>
                      <tr>
                      <td colspan="2"></td>
                      <td>Nota Final:</td>
                      <td>-</td>
                      </tr>
                      </tbody></table></div>                          
   </div>
  </div> 
 </div>
<br>
<br>
    <div class="team-back1">
    <button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target=".bd-example-modal-lg14">Asistencia</button>
    <div class="modal fade bd-example-modal-lg14" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-md">
    <div class="modal-content">
    <div class="modal-header"><strong><b>Taller de Emprendimiento</b></strong>
    <button class="close" data-dismiss="modal"><span class="fas fa-window-close"></span></button></div>
    <div class="modal-body">
    <table class="table table-hover  table-responsive" style="font-size: 12px;">
  		        <tbody><tr>
		        <td class="info"><b> Asignatura</b> </td>
          	    <td class="info"><b>Sección</b></td>
          	    <td class="info"><b>Hrs. Asist.</b></td>
          	    <td class="info"><b>Hrs. Inasist.</b></td>
          	    <td class="info"><b>Prom. Asist.</b></td>
                <td class="info"><b>Asist.Libre</b></td>
  		        </tr>
               	<tr>
      		    <td>Taller de Emprendimiento</td>
      		    <td><center>2</center></td>
      		    <td><center>35</center></td>
      		    <td><center>0</center></td>
      		    <td><center>100</center></td>
      		    <td><center>N</center></td>      			            
      		    </tr>
                </tbody>
    </table>
    </div>
     </div>
      </div>
       </div>
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