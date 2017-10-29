<?php

$usuario = $_POST['username'];
$pass = $_POST['password'];

if (empty($usuario) || empty($pass)) {
	header ("Location: login.html");
	exit ();
}


$conexion = mysqli_connect("localhost","root", "","base_de_datos") or die("Error al Conectar" .mysql_error());

$consulta = "SELECT * FROM estudiantes  WHERE Correo='$usuario' AND Cedula='$pass'";
$resultado = mysqli_query($conexion,$consulta);

$filas = mysqli_num_rows($resultado);

if ($filas > 0){
	header("location: index.html");
}
else{
	echo "Error en la autenticacion";
    mysqli_free_result($resultado);
}
mysqli_close($conexion);

?>

<?php

$usuario = $_POST['username'];
$pass = $_POST['password'];

if (empty($usuario) || empty($pass)) {
	header ("Location: login.html");
	exit ();
}


$conexion = mysqli_connect("localhost","root", "","base_de_datos") or die("Error al Conectar" .mysql_error());

$consulta = "SELECT * FROM profesores  WHERE Correo='$usuario' AND Cedula='$pass'";
$resultado = mysqli_query($conexion,$consulta);

$filas = mysqli_num_rows($resultado);

if ($filas > 0){
	header("location: index.html");
}
else{
	echo "Error en la autenticacion";
    mysqli_free_result($resultado);
}
mysqli_close($conexion);

?>


<?php

$usuario = $_POST['username'];
$pass = $_POST['password'];

if (empty($usuario) || empty($pass)) {
	header ("Location: login.html");
	exit ();
}


$conexion = mysqli_connect("localhost","root", "","base_de_datos") or die("Error al Conectar" .mysql_error());

$consulta = "SELECT * FROM administrador  WHERE Correo='$usuario' AND Cedula='$pass'";
$resultado = mysqli_query($conexion,$consulta);

$filas = mysqli_num_rows($resultado);

if ($filas > 0){
	header("location: indexadmin.html");
}
else{
	echo "Error en la autenticacion";
    mysqli_free_result($resultado);
}
mysqli_close($conexion);

?>