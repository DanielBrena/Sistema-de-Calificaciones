<?php
session_start();
//if($_SEE)


if (! empty($_SESSION["usuario"])) 
  {
    //echo "<a href="cerrarsesion.php" title="Cerrar sesión">Bienvenid@</a>" . 
       header("Location: administracion.php");
  }

?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/> 
	<script type="text/javascript" src='../js/jquery.js'></script>
	<script type="text/javascript" src='../js/form_.js'></script>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
	<link rel="stylesheet" type="text/css" href="../css/login.css">
		
	<title>Control de Calificaciones</title>
</head>
<body>

	<div id='cabezera'></div>
	<div id ='principal'>
		
		<header></header>
		<nav>
			
			<a id='ad' href="admin.php">Administracion</a>
			<a id='home' href="../index.php">Home</a>
			


		</nav>
		<section id='inicio'>
			<div id='form_alumnos'>
				

			</div>
			
			<div id='mostrar'>
				<div id='login_'>
					<form action="check_sesion.php" method="post">
						<table>
							<tr>
								<td><label>Usuario</label></td><td><input class='login_box' type="text" name="usuario"/><br /></td>
							</tr>
							<tr>
								<td><label>Contraseña</label></td><td><input class='login_box' type="password" name="contrasena"/><br/></td>
							</tr>
						</table>
					
					
					<input id='login_enviar' type="submit" value=" Submit "/><br />
					</form>
				</div>
				
			</div>
		</section>
		
		<footer></footer>

	</div>

</body>
</html>