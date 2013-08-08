<?php

include 'config.php';

$alum_id = $_GET['alumno'];

mysql_select_db("sistema",$conexion);





mysql_query("INSERT INTO  materias (periodo_id,algebra,calculo,sistemas,metodologia,ingles,antropologia,alum_id) 
 VALUES (NULL,0,0,0,0,0,0,$alum_id) ");


mysql_close($conexion);
//mysql_query("INSERT INTO materias (periodo_id,algebra,calculo,sistemas,metodologia,ingles,atropologia,alum_id)
	//VALUES (NULL,'','','','','','',$alumno) ");
?>