<?php
include 'config.php';

	$algebra = $_GET['algebra'];
	$calculo = $_GET['calculo'];
	$sistemas = $_GET['sistemas'];
	$metodologia = $_GET['metodologia'];
	$ingles = $_GET['ingles'];
	$antropologia = $_GET['antropologia'];
	$user = $_GET['user'];

	mysql_select_db('sistema',$conexion);

	mysql_query("UPDATE materias SET algebra = $algebra, calculo =$calculo, 
		sistemas = $sistemas, metodologia = $metodologia, ingles = $ingles , antropologia = $antropologia
		WHERE alum_id = $user");

	mysql_close($conexion);

?>