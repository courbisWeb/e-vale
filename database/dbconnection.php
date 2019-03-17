<?php

$dbhost		=	'localhost';
$dbuser		=	'root';
$dbpass		=	'';
$database	=	'e_vale';
$conn		=	mysqli_connect($dbhost, $dbuser, $dbpass, $database);
if (! $conn) 
	{
		die('No se puede conectar a la base de datos: '.mysql_error());
	}

  ?>