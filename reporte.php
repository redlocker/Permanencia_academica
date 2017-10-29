<?php
/*include "validar.php";*/

$conexion = mysqli_connect("localhost","root", "","base_de_datos") or die("Error al Conectar" .mysql_error());
mysqli_select_db($conexion,"base_de_datos");

// recibir los datos y almacenarlos en variables
$name =    $_POST["name"];
$lastname =  $_POST["lastname"];
$cedula =   $_POST["cedula"];
$carrer =     $_POST["carrer"];
$class =  $_POST["class"];
$namep =   $_POST["namep"];
$lastnamep = $_POST["lastnamep"];
$msg =     $_POST["msg"];

// consulta para insertar
$insertar = "INSERT INTO reporte (Nombres_del_Estudiante, Apellidos_del_Estudiante, Cedula, Carrera, Materia, Nombres_del_Profesor, Apellidos_del_Profesor, Observaciones) VALUES('$name', '$lastname', '$cedula' , '$carrer','$class', '$namep', '$lastnamep' , '$msg')";


//ejecutar consulta
$resultado = mysqli_query ($conexion,$insertar);
if (!$resultado){
	echo 'Error al enviar la solicitud';
} else {
	echo"<script type=\"text/javascript\">alert('Se ha registrado Satisfactoriamente'); window.location='indexprofesores.html';</script>";  
}



//cerrar conexion
mysqli_close ($conexion);

?>