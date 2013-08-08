<?php
//include 'include/config.php';

?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/> 
	<script type="text/javascript" src='js/jquery.js'></script>
	<script type="text/javascript" src='js/form_.js'></script>
	<link rel="stylesheet" type="text/css" href="css/style.css">
		<link rel="stylesheet" type="text/css" href="css/form_.css">
	<title>Control de Calificaciones</title>
</head>
<body>

	<div id='cabezera'></div>
	<div id ='principal'>
		
		<header></header>
		<nav>

			<a id='ad' href="include/admin.php">Administracion</a>
			<a id='home' href="index.php">Home</a>
			
		</nav>
		<section id='inicio'>
			<div id='form_alumnos'>
				
			
				<input class='form_' id ='matricula_'type='text' value =''>
				<input class='form_' id ='pass_'type='password' value =''>
				<input class='form_'  type='button' value='Enviar' id='boton_mat'>

			</div>
			
			<div id='mostrar'>
				<div id='calificaciones_box'>

				</div>
				
			</div>
		</section>
		
		<footer></footer>

	</div>

</body>
</html>