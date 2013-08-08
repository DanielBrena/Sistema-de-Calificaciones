<?php
$conexion = mysql_connect('localhost','root','danielbrena2');

if(!$conexion){
	die("No se puede conectar ".mysql_error());
}

mysql_select_db('sistema',$conexion);

session_start();
$user_check=$_SESSION['login_user'];

$ses_sql=mysql_query("SELECT username FROM admin WHERE username='$user_check' ");

$row=mysql_fetch_array($ses_sql);

$login_session=$row['username'];

if(!isset($login_session))
{
header("Location: admin.php");
}
?>