<?php 
include 'cn.php';

Modificarinscripcion($_POST['Actividad'], $_POST['ID']);

function Modificarinscripcion ($actividad, $ID){
    
    $connection = mysqli_connect("localhost","root", "") or die ("No se ha podido establecer la coneccion con el servidor.");
mysqli_select_db($connection, "base_de_datos") or die ("No se ha logrado conectar con la base de datos!");

    
    $sentencia = "UPDATE discapacidad SET Servicio = '".$actividad."' WHERE ID='".$ID."'";
    mysqli_query($connection, $sentencia);


}
	
echo"<script type=\"text/javascript\">alert('Se ha modificado satisfactoriamente'); window.location='discapacidadadmin.php';</script>";  

?>