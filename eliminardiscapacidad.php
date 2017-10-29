<?php
/*include "validar.php";*/

$ID = $_REQUEST['ID'];

$conexion = mysqli_connect("localhost","root", "","base_de_datos") or die("Error al Conectar" .mysql_error());
mysqli_select_db($conexion,"base_de_datos");

// recibir los datos y almacenarlos en variables


// consulta para insertar
$query= "DELETE FROM discapacidad WHERE ID = '$ID'";


//ejecutar consulta
//$resultado = mysqli_query ($conexion,$insertar);

$resultado = $conexion ->query($query);

if(!$resultado){
    echo "Error al eliminar";
}
else{
    echo"<script type=\"text/javascript\">alert('Ha sido eliminado'); window.location='discapacidadadmin.php';</script>";  
}
//cerrar conexion
mysqli_close ($conexion);

?>