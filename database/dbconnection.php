<?php

$dbhost		=	'127.0.0.1';
$dbuser		=	'courbis';
$dbpass		=	'';
$database	=	'E_VALE';
$conn		=	mysqli_connect($dbhost, $dbuser, $dbpass, $database);
if (! $conn) 
	{
		die('No se puede conectar a la base de datos: '.mysql_error());
	}

  ?>