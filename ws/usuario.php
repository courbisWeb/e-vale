<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include('../database/dbconnection.php');
$usuario 	=	$_GET['usuario'];
$pass 		=	$_GET['pass'];
$rs	=	mysqli_query($conn, "select * from vl_usuario where cod_usuario = '$usuario' and pass_usuario	='$pass'");
$objusuario	=	new stdClass();
$listausuarios	=	[];
while ($row	=	mysqli_fetch_array($rs, MYSQLI_ASSOC)) {

	$usuario 	=	new stdClass();
	$usuario 	->	id_usuario			=	$row['id_usuario'];
	$usuario 	->	cod_usuario			=	$row['cod_usuario'];
	$usuario 	->	id_cargo			=	$row['id_cargo'];
	$usuario 	->	flg_vigente			=	$row['flg_vigente'];
	$usuario 	->	id_persona			=	$row['id_persona'];
	$usuario 	->	pass_usuario			=	$row['pass_usuario'];

	$listausuarios[]=$usuario;

}

$objusuario->listausuarios=$listausuarios;

mysqli_close($conn);
echo json_encode($objusuario);


