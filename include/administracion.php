<?php
//echo $myusername;
//include 'check.php';
//include 'admin.php';

session_start();

if (! empty($_SESSION["usuario"])) 
  {
    //echo "<a href="cerrarsesion.php" title="Cerrar sesión">Bienvenid@</a>" . 
      // header("Location: administracion.php");
  

echo '<!DOCTYPE html>
<html>
<head>

	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/> 
	<script type="text/javascript" src="../js/jquery.js"></script>
	<script type="text/javascript" src="../js/form_.js"></script>
	<script type="text/javascript" src="../js/add_alumnos.js"></script>
	<script type="text/javascript" src="../js/actualizar.js"></script>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
	<link rel="stylesheet" type="text/css" href="../css/login.css">
		<link rel="stylesheet" type="text/css" href="../css/calificaciones.css">
		
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


		<form action="add_alumno.php" method="post">
						<table>
							<tr>
								<td><label>Alumno</label></td><td><input id= "alum_" class="agregar" type="text" name="alumno"/><br /></td>
							</tr>
							<tr>
								<td><label>Contraseña</label></td><td><input id= "cont_" class="agregar" type="text" name="contrasena"/><br/></td>
							</tr>
							<tr>
								<td><label>Apellido</label></td><td><input id= "apel_" class="agregar" type="text" name="apellido"/><br/></td>
							</tr>
							<tr>
								<td><label>Sexo</label></td><td><input id= "sexo_" class="agregar" type="text" name="sexo"/><br/></td>
							</tr>
							<tr>
								<td><label>Semestre</label></td><td><input id= "seme_" class="agregar" type=text" name="semestre"/><br/></td>
							</tr>
							<tr>
								<td><label>Matricula</label></td><td><input id= "matr_" class="agregar" type="text" name="matricula"/><br/></td>
							</tr>
							<tr>
								<td><label>Carrera</label></td><td><input id="carr_" class="agregar" type="text" name="carrera"/><br/></td>
							</tr>
							<tr>
								<td><label>Email</label></td><td><input id= "emai_" class="agregar" type="email" name="email"/><br/></td>
							</tr>
						</table>
					
					
					<input id="enviar_alumnos" type="submit" value=" Submit "/><br />
					</form>



			
		</section>
		
		<footer></footer>

	</div>

</body>
</html>';
}else{
	echo "<h1>No tienes permiso de ver esta pagina</h1>";
}
?>