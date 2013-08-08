<?php

//include 'config.php';

$conexion = mysql_connect('localhost','root','danielbrena2');

if(!$conexion){
	die("No se puede conectar ".mysql_error());
}

@$matricula = $_GET['matricula'];
@$password = $_GET['pass'];

mysql_select_db('sistema',$conexion);


$sql = "SELECT alumnos_id FROM alumnos WHERE matricula = '$matricula' and pass = '$password'";


$sql2 = "SELECT alumnos_id FROM alumnos WHERE matricula = '$matricula'";

$resultado = mysql_query($sql);



$resultado2 = mysql_query($sql2);
$fila2 = mysql_fetch_array($resultado2);

$al_id = $fila2['alumnos_id'];

$count = mysql_num_rows($resultado);



if($count == 1){

	$mostrar = mysql_query("SELECT * FROM materias, alumnos WHERE alum_id = $al_id AND alumnos_id =$al_id ");
	while($fila = mysql_fetch_array($mostrar)){
	
		echo '<h1 id="nombre_alumno"> '.$fila['nombre'].'</h1>';
		echo '<h2 id="carrera_alumno"> '.$fila['carrera'].'</h2>';
		echo '<h3 id="matricula_alumno"> '.$fila['matricula'].'</h3>';
		echo '<table>';
		echo '<tr>';
			echo '<td> Algebra</td><td>Calculo Diferencial</td><td>Sistemas de Analisis</td><td>Metodologia</td><td>Ingles</td> <td>Antropologia</td>';
		echo '</tr>';

		echo '<tr>';
			echo '<td > '.$fila['algebra'].'</td> <td > '.$fila['calculo'].'</td><td > '.$fila['sistemas'].'</td><td > '.$fila['metodologia'].'</td><td > '.$fila['ingles'].'</td><td > '.$fila['antropologia'].'</td>';
		echo '</tr>';

		echo '</table>';

	}


}else{
	echo "No existe el alumno o tu contraseña es invalida";
}




mysql_close($conexion);
?>