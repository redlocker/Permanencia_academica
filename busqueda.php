<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Registros</title>
  <script src="https://s.codepen.io/assets/libs/modernizr.js" type="text/javascript"></script>

<meta name="viewport" content="width=device-width">
  
  

  
      <style>
      /* NOTE: The styles were added inline because Prefixfree needs access to your styles and they must be inlined if they are on local disk! */
      * {
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
}
*:before, *:after {
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
}

body {
  font-family: "Helvetica Neue", "Helvetica", "Roboto", "Arial", sans-serif;
  color: #5e5d52;
}

a {
  color: #337aa8;
}
a:hover, a:focus {
  color: #4b8ab2;
}

.container {
  margin: 5% 3%;
}
@media (min-width: 48em) {
  .container {
    margin: 2%;
  }
}
@media (min-width: 75em) {
  .container {
    margin: 2em auto;
    max-width: 75em;
  }
}

.responsive-table {
  width: 100%;
  margin-bottom: 1.5em;
}
@media (min-width: 48em) {
  .responsive-table {
    font-size: .9em;
  }
}
@media (min-width: 62em) {
  .responsive-table {
    font-size: 1em;
  }
}
.responsive-table thead {
  position: absolute;
  clip: rect(1px 1px 1px 1px);
  /* IE6, IE7 */
  clip: rect(1px, 1px, 1px, 1px);
  padding: 0;
  border: 0;
  height: 1px;
  width: 1px;
  overflow: hidden;
}
@media (min-width: 48em) {
  .responsive-table thead {
    position: relative;
    clip: auto;
    height: auto;
    width: auto;
    overflow: auto;
  }
}
.responsive-table thead th {
  background-color: #1d96b2;
  border: 1px solid #1d96b2;
  font-weight: normal;
  text-align: center;
  color: white;
}
.responsive-table thead th:first-of-type {
  text-align: left;
}
.responsive-table tbody,
.responsive-table tr,
.responsive-table th,
.responsive-table td {
  display: block;
  padding: 0;
  text-align: left;
  white-space: normal;
}
@media (min-width: 48em) {
  .responsive-table tr {
    display: table-row;
  }
}
.responsive-table th,
.responsive-table td {
  padding: .5em;
  vertical-align: middle;
}
@media (min-width: 30em) {
  .responsive-table th,
  .responsive-table td {
    padding: .75em .5em;
  }
}
@media (min-width: 48em) {
  .responsive-table th,
  .responsive-table td {
    display: table-cell;
    padding: .5em;
  }
}
@media (min-width: 62em) {
  .responsive-table th,
  .responsive-table td {
    padding: .75em .5em;
  }
}
@media (min-width: 75em) {
  .responsive-table th,
  .responsive-table td {
    padding: .75em;
  }
}
.responsive-table caption {
  margin-bottom: 1em;
  font-size: 1em;
  font-weight: bold;
  text-align: center;
}
@media (min-width: 48em) {
  .responsive-table caption {
    font-size: 1.5em;
  }
}
.responsive-table tfoot {
  font-size: .8em;
  font-style: italic;
}
@media (min-width: 62em) {
  .responsive-table tfoot {
    font-size: .9em;
  }
}
@media (min-width: 48em) {
  .responsive-table tbody {
    display: table-row-group;
  }
}
.responsive-table tbody tr {
  margin-bottom: 1em;
  border: 2px solid #1d96b2;
}
@media (min-width: 48em) {
  .responsive-table tbody tr {
    display: table-row;
    border-width: 1px;
  }
}
.responsive-table tbody tr:last-of-type {
  margin-bottom: 0;
}
@media (min-width: 48em) {
  .responsive-table tbody tr:nth-of-type(even) {
    background-color: rgba(94, 93, 82, 0.1);
  }
}
.responsive-table tbody th[scope="row"] {
  background-color: #1d96b2;
  color: white;
}
@media (min-width: 48em) {
  .responsive-table tbody th[scope="row"] {
    background-color: transparent;
    color: #5e5d52;
    text-align: left;
  }
}
.responsive-table tbody td {
  text-align: right;
}
@media (min-width: 30em) {
  .responsive-table tbody td {
    border-bottom: 1px solid #1d96b2;
  }
}
@media (min-width: 48em) {
  .responsive-table tbody td {
    text-align: center;
  }
}
.responsive-table tbody td[data-type=currency] {
  text-align: right;
}
.responsive-table tbody td[data-title]:before {
  content: attr(data-title);
  float: left;
  font-size: .8em;
  color: rgba(94, 93, 82, 0.75);
}
@media (min-width: 30em) {
  .responsive-table tbody td[data-title]:before {
    font-size: .9em;
  }
}
@media (min-width: 48em) {
  .responsive-table tbody td[data-title]:before {
    content: none;
  }
}

    </style>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/modern-business.css" rel="stylesheet">

</head>
<body>
    
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="index.html">Permanencia con calidad</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="index.html">Inicio</a>
            </li>
            <li class="nav-item">  
              <a class="nav-link" href="about.html">Acerca de</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contact.html">Equipo de trabajo</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownPortfolio" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Sede
              </a>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownPortfolio">
                <a class="dropdown-item" href="http://www.funlam.edu.co/">Medellin</a>
                <a class="dropdown-item" href="http://www.funlam.edu.co/">Bogota</a>
                <a class="dropdown-item" href="http://www.funlam.edu.co/">Manizales</a>
                <a class="dropdown-item" href="http://www.funlam.edu.co/">Monteria</a>
                <a class="dropdown-item" href="http://www.funlam.edu.co/apartado">Apartado</a>
                <a class="dropdown-item" href="http://www.funlam.edu.co/">Cali</a>
              </div>
            
            </li>
          </ul>
        </div>
      </div>
    </nav>
<!-- Page Content -->
    <div class="container">

      <br>
      <br>  
        
    </h1>

      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="index.html">Inicio</a>
        </li>
        <li class="breadcrumb-item active">Tabla de registros</li>
      </ol>
      

  <div class="container"> 
  <table class="responsive-table">
     
       <div class="container">

      <h1 class="my-4"></h1>
                  
      
          <thead>
          
      <tr>
        <th>Nombres</th>
        <th>Apellidos</th>
        <th>Cedula</th>
        <th>Correo</th>
        <th>Carrera</th>
        <th>Curso</th>
        <th>Disponibilidad</th>
        <th>ID</th>
        <th>Operacion</th>  
        
      </tr>
    
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

       <?php //
include 'cn.php';

// Create connection
$connection = mysqli_connect("localhost","root", "") or die ("No se ha podido establecer la coneccion con el servidor.");
mysqli_select_db($connection, "base_de_datos") or die ("No se ha logrado conectar con la base de datos!");

$tutia=$_POST['cedula'];
$q= mysqli_query($connection, "SELECT * FROM inscripcion WHERE Cedula='$tutia'");
while ($dato=mysqli_fetch_array($q)){
             ?>

              <tr>
                <td><?php echo $dato['Nombres']; ?></td>
                <td><?php echo $dato['Apellidos']; ?></td>
                <td><?php echo $dato['Cedula']; ?></td>
                <td><?php echo $dato['Correo']; ?></td>
                <td><?php echo $dato['Carrera']; ?></td> 
                <td><?php echo $dato['Curso']; ?></td>
                <td><?php echo $dato['Disponibilidad']; ?></td>
                <td><?php echo $dato['ID']; ?></td>
                  
                  <?php
                  echo "<td> <a href='modifcarinscripcion.php?ID=".$dato['ID']."'> <button type='button' class='btn btn-info'>Modificar</button></a> </td>";
                                  
                  
                  ?>
                
                  
                  
                  
              </tr>
      
              <?php
                  
              }
mysqli_close($connection);
              ?>
              
              
              
              
      </thead>
      </table>
    </div>
    
     <div class="container">
          <p class="m-0 text-center text-black"> </p>
        </div>
        
        </div>
      </div>

    
    <!-- /.container -->
<br>
        <br>
        <br>
        <br>
    <br>
       
        
    <!-- Footer -->
    <footer class="py-5 bg-dark">
      
        <p class="m-0 text-center text-white">Paula Andrea Cataño Giraldo - Coordinadora 
    <a href="pcatano@funlam.edu.co">pcatano@funlam.edu.co </a>
       |   Tel.: +57 (4)4487666   - Ext.: 9644
       <br>
    Universidad Católica Luis Amigó Transversal 51A #67B 90 Medellín - Colombia. 
    <u></u><u></u>
    <br>
    Teléfono 
    <a href="tel:%2B57%20%284%294487666" target="_blank" value="+5744487666">+57 (4)4487666</a>
     - Fax 
     <a href="tel:%2B57%20%284%293849797" target="_blank" value="+5743849797">+57 (4)3849797</a>
     <u></u>
     <u></u> 
     También en: | 
     <a href="http://www.funlam.edu.co/apartado" title="Universidad Luis Amigó - Sede Apartadó">Apartadó</a> 
     | 
     <a href="http://www.funlam.edu.co/" title="Universidad Luis Amigó - Sede Bogotá">Bogotá</a> 
     | 
     <a href="http://www.funlam.edu.co/" title="Universidad Luis Amigó - Sede Cali">Cali</a> 
     |
     <a href="http://www.funlam.edu.co/" title="Universidad Luis Amigó - Sede Manizales">Manizales</a> 
     | 
     <a href="http://www.funlam.edu.co/" title="Universidad Luis Amigó - Sede Montería">Montería</a> 
     |
     <br>
    Copyright © 2016 -&nbsp;
    <a href="http://www.funlam.edu.co/modules/documentosjuridicos/item.php?itemid=1498">Política de protección de datos personales</a>&nbsp;- Un servicio de la Oficina de Comunicaciones y Relaciones Públicas
  </footer>
   

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/popper/popper.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

   </body>
</html>