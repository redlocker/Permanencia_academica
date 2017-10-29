<?php
/*include "validar.php";*/

$conexion = mysqli_connect("localhost","root", "","base_de_datos") or die("Error al Conectar" .mysql_error());
mysqli_select_db($conexion,"base_de_datos");

// recibir los datos y almacenarlos en variables
$actividad =    $_POST["Actividad"];
$ID =  $_POST["ID"];


// consulta para insertar
$insertar = "INSERT INTO discapacidad(Servicio, ID) VALUES('$actividad','$ID')";


//ejecutar consulta
$resultado = mysqli_query ($conexion,$insertar);
if (!$resultado){
	echo 'Error al registrarse';
} else {
    echo"<script type=\"text/javascript\">alert('Hemos añadido nuevas actividades'); window.location='discapacidadadmin.php';</script>";  
}



//cerrar conexion
mysqli_close ($conexion);

?>