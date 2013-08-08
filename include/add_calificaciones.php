
<?php
include 'config.php';

mysql_select_db('sistema',$conexion);

$sql = "SELECT * FROM alumnos";
$consulta = mysql_query($sql,$conexion);
$mostrar = false;
$alum = "";
while($fila = mysql_fetch_array($consulta)){
//	$alum .= "<option value''>Alumno</option>";
	//$alum .= "<option value'".$fila['alumnos_id']."'>".$fila['nombre']."</option>";
	$alum .=" <option value='".$fila['alumnos_id']."'>".$fila['nombre']." ".$fila['apellido']."</option>";
	


}


?>

<!DOCTYPE html>
<html>
<head>

	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/> 
	<script type="text/javascript" src="../js/jquery.js"></script>
	<script type="text/javascript" src="../js/form_.js"></script>
	<script type="text/javascript" src="../js/add_alumnos.js"></script>
	<script type="text/javascript" src="../js/mostrar_calificaciones.js"></script>
	<script type="text/javascript" src="../js/crear.js"></script>
	<script type="text/javascript" src="../js/actualizar.js"></script>
	<link rel="stylesheet" type="text/css" href="../css/calificaciones.css">
	<link rel="stylesheet" type="text/css" href="../css/style.css">
	<link rel="stylesheet" type="text/css" href="../css/login.css">
		
	<title>Control de Calificaciones</title>
</head>
<body>

	<div id="cabezera"></div>
	<div id ="principal">
		
		<header></header>
		<nav>
			
			<a id="ad" href="admin.php">Administracion</a>
			<a id="home" href="../index.php">Home</a>
			<a id="ad" href="logout.php">Salir</a>
			<a id="ad" href="add_calificaciones.php">Calificaciones</a>

			


		</nav>
		<section id="inicio">


			<select id ='user' name="alumnos_" onchange="mostrarAlumnos(this.value)">
				<option value=''>Alumnos</option>
       				<?php echo $alum; ?>
  			 </select>
  			 <div id='mostrar_calificaciones'>

  			 </div>
  			 <div id='calificacion'>

  			 	
  			 <div id ='ayuda' <p>¿No tiene calificaciones?</p>
             <input text type='button' id='crear' value ='crear'></div>
  			 <div>
			
		</section>
		
		<footer></footer>

	</div>

</body>
</html>