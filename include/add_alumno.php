<?php

include 'config.php';

$alumno = $_POST['alumno'];
$pass = $_POST['contrasena'];
$apellido = $_POST['apellido'];
$sexo = $_POST['sexo'];
$semestre = $_POST['semestre'];
$matricula = $_POST['matricula'];
$carrera = $_POST['carrera'];
$email = $_POST['email'];

mysql_select_db("sistema",$conexion);

mysql_query("INSERT INTO  alumnos (alumnos_id,nombre,pass,apellido,sexo,semestre,matricula,carrera,email,profesor_id) 
 VALUES (NULL,'$alumno','$pass','$apellido','$sexo','$semestre','$matricula','$carrera','$email',1)    ");

header("Location: administracion.php");



mysql_close($conexion);



?>