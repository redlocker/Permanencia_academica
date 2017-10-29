<?php
$conexion = mysqli_connect("localhost","root", "","base_de_datos") or die("Error al Conectar" .mysql_error());


$consulta = Consultarproducto($_GET['ID']);

function Consultarproducto($ID_ID)

{
    $conexion = mysqli_connect("localhost","root", "","base_de_datos") or die("Error al Conectar" .mysql_error());


    $query= "SELECT * FROM inscripcion WHERE ID='".$ID_ID."' ";
    $resultado= $conexion->query($query);
    $row=$resultado->fetch_assoc();
        
        return [
        $row ['Nombres'],
        $row ['Apellidos'],
        $row ['Cedula'],
        $row ['Correo'],
        $row ['Carrera'],
        $row ['Curso'],
        $row ['Disponibilidad']
              
    ];
    
}


?>





<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title>Modificar</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	 <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Tutorias </title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/modern-business.css" rel="stylesheet">

</head>
<body class="blurBg-false" style="background-color:#ffffff">

 <!-- Navigation -->
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
<li class="nav-item">
            <form align="right" action= "busqueda.php" method= "POST" >
<input type="text" id="cedula" name="cedula" placeholder="Buscar con cedula"> <input class="btn btn-warning" type="submit" value="Buscar"/>

              


</form>
 </li>
          </ul>
        </div>
      </div>
    </nav>
<!-- Page Content -->
    <div class="container">

      
        
      </h1>

      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="index.html">Inicio</a>
        </li>
        <li class="breadcrumb-item">
          <a href="Asesorias.html">Asesorias</a>
        </li>
        <li class="breadcrumb-item active">Registrarse</li>
      </ol>

        </h1>

        <br>
       
      
<!-- Start Formoid form-->
<link rel="stylesheet" href="inscripcion_files/formoid1/formoid-solid-blue.css" type="text/css" />
<script type="text/javascript" src="inscripcion_files/formoid1/jquery.min.js"></script>
<form action="modificar.php" method="POST" class="formoid-solid-blue" style="background-color:#EBEBEB;font-size:14px;font-family:'Roboto',Arial,Helvetica,sans-serif;color:#34495E;max-width:480px;min-width:150px" method="post"><div class="title"><h2>Inscripción</h2></div>
	<div class="element-name"><label class="title"><span class="required">*</span></label><span class="nameFirst"><input placeholder=" Nombre" type="text" size="8" name="Nombres" id="Nombres" required="required" value="<?php echo $consulta [0]?>"/><span class="icon-place"></span></span><span class="nameLast"><input placeholder=" Apellido" type="text" size="14" name="Apellidos" id="Apellidos" required="required" value="<?php echo $consulta [1]?>"/><span class="icon-place"></span></span></div>
	<div class="element-input"><label class="title"><span class="required">*</span></label><div class="item-cont"><input class="large" type="text" name="Cedula" id="Cedula" required="required" placeholder="Cedula" value="<?php echo $consulta [2]?>"/><span class="icon-place"></span></div></div>
	<div class="element-email"><label class="title"><span class="required">*</span></label><div class="item-cont"><input class="large" type="email" name="Correo" id="Correo" value="" required="required" placeholder="Correo" value="<?php echo $consulta [3]?>"/><span class="icon-place"></span></div></div>
	<div class="element-input"><label class="title"><span class="required">*</span></label><div class="item-cont"><input class="large" type="text" name="Carrera" id="Carrera" required="required" placeholder="Carrera" value="<?php echo $consulta [4]?>"/><span class="icon-place"></span></div></div>
    <div class="element-input"><label class="title"><span class="required">*</span></label><div class="item-cont"><input class="large" type="text" name="Curso" id="Curso" required="required" placeholder="Curso" value="<?php echo $consulta [5]?>"/><span class="icon-place"></span></div></div>
    <div class="element-input"><label class="title"><span class="required">*</span></label><div class="item-cont"><input class="large" type="text" name="Disponibilidad" id="Disponibilidad" required="required" placeholder="Disponibilidad" value="<?php echo $consulta [6]?>"/><span class="icon-place"></span></div></div>
    <input type="hidden" name="ID" value="<?php echo $_GET['ID']?>">
<div class="submit"><input type="submit" value="Inscribirse"/></div></form><p class="frmd"><a href="http://formoid.com/v29.php">html form</a> Formoid.com 2.9</p><script type="text/javascript" src="inscripcion_files/formoid1/formoid-solid-blue.js"></script>
<!-- Stop Formoid form-->
 <div class="container">
          <p class="m-0 text-center text-black"> </p>
        </div>
        
        </div>
      </div>

    </div>
    <!-- /.container -->
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
