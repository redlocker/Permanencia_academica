<?php 
include 'cn.php';

Modificarinscripcion($_POST['Actividad'], $_POST['Responsables'], $_POST['Dias'], $_POST['Horas'], $_POST['ID']);

function Modificarinscripcion ($actividad, $responsable, $dias, $horas, $ID){
    
    $connection = mysqli_connect("localhost","root", "") or die ("No se ha podido establecer la coneccion con el servidor.");
mysqli_select_db($connection, "base_de_datos") or die ("No se ha logrado conectar con la base de datos!");

    
    $sentencia = "UPDATE tutorias SET Tutoria = '".$actividad."', Responsable = '".$responsable."', Dias = '".$dias."', Horas = '".$horas."' WHERE ID='".$ID."'";
    echo mysqli_query($connection, $sentencia);


}
	
echo"<script type=\"text/javascript\">alert('Se ha modificado satisfactoriamente'); window.location='tutoriasadmin.php';</script>";  

?>