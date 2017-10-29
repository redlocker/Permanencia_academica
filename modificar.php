<?php 
include 'cn.php';

Modificarinscripcion($_POST['Nombres'], $_POST['Apellidos'], $_POST['Cedula'], $_POST['Correo'], $_POST['Carrera'], $_POST['Curso'], $_POST['Disponibilidad'], $_POST['ID']);

function Modificarinscripcion ($nombres, $apellidos, $cedula, $correo, $carrera, $curso, $disponibilidad, $ID){
    
    $connection = mysqli_connect("localhost","root", "") or die ("No se ha podido establecer la coneccion con el servidor.");
mysqli_select_db($connection, "base_de_datos") or die ("No se ha logrado conectar con la base de datos!");

    
    $sentencia = "UPDATE inscripcion SET Nombres = '".$nombres."', Apellidos='".$apellidos."', Cedula='".$cedula."', Correo='".$correo."',  Carrera='".$carrera."', Curso='".$curso."', Disponibilidad='".$disponibilidad."' WHERE ID='".$ID."'";
    mysqli_query($connection, $sentencia);


}
	
echo"<script type=\"text/javascript\">alert('Se ha modificado Satisfactoriamente'); window.location='index.html';</script>";  

?>

