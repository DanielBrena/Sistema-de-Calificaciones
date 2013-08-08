<?php
include 'config.php';

session_start();



$usuario = $_POST['usuario'];
$contrasena = $_POST['contrasena'];

mysql_select_db("sistema", $conexion);

$consulta = "SELECT * FROM admin";

$resultado = mysql_query($consulta,$conexion);

while($fila  = mysql_fetch_array($resultado)){
	$usuario_bd = $fila['usuario'];
	$contrasena_bd = $fila['password'];



if( $usuario == $usuario_bd  &&	 $contrasena == $contrasena_bd ){
	$_SESSION['usuario'] = $usuario;
	$_SESSION['contrasena'] = $contrasena;

	echo '
	<html>
	<head>
		<meta http-equiv="REFRESH" content = "0; url=administracion.php">
		<title></title>
	</head>
	<body>
	
	</body>
	</html>

	';
}else{
	header("Location: admin.php");
}


}


mysql_close($conexion);


?>