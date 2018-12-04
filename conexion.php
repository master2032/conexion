<?php
$host = 'localhost';
$user = 'root';
$pass = '';
$db = 'mybd';

	$conexion = mysql_connect($host,$user,$pass) or die('Error de Conexion');
	mysql_select_db($db) or die('La BD no esta disponible.');
        
        @mysql_query("SET NAMES 'UTF8'");
 
?>
