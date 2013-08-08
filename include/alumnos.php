<?php
include 'config.php';

$q= $_GET["q"];



mysql_select_db("sistema", $conexion);

$sql="SELECT * FROM materias WHERE alum_id = $q";

$resultado = mysql_query($sql,$conexion);

echo "<table id='tabla_calificaciones' border='1'>
<tr>
<th>Algebra</th>
<th>Calculo</th>
<th>Sistemas</th>
<th>Metodologia</th>
<th>Ingles</th>
<th>Antropologia</th>
</tr>";

while($fila = mysql_fetch_array($resultado))
  {
  echo "<tr>";
  echo "<td><input class='mostrando' id='algebra_mostrar' type='text' value='" . $fila['algebra'] . "'</input></td>";
  echo "<td><input  class='mostrando' id='calculo_mostrar' type='text' value='" . $fila['calculo'] . "'</td>";
  echo "<td><input   class='mostrando'id='sistemas_mostrar' type='text' value='" . $fila['sistemas'] . "'</td>";
  echo "<td><input  class='mostrando' id='metodologia_mostrar' type='text' value='" . $fila['metodologia'] . "'</td>";
  echo "<td><input  class='mostrando' id='ingles_mostrar' type='text' value='" . $fila['ingles'] . "'</td>";
  	echo "<td><input  class='mostrando' id='antropologia_mostrar' type='text' value='" . $fila['antropologia'] . "'</td>";

  echo "</tr>";
  }
echo "</table>";
echo '<div><input id="actualizar" onclick="actualizar()" type="button" value="actualizar"></div>';

mysql_close($conexion);

?>