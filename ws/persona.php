<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include('../database/dbconnection.php');
$rs	=	mysqli_query($conn, 'select * from vl_persona');
$objPersona	=	new stdClass();
$listaPersonas	=	[];
while ($row	=	mysqli_fetch_array($rs, MYSQLI_ASSOC)) {

	$persona 	=	new stdClass();
	$persona 	->	id_persona			=	$row['ID_PERSONA'];
	$persona 	->	rut_persona			=	$row['RUT_PERSONA'];
	$persona 	->	nombre_persona		=	$row['NOMBRES_PERSONA'];	
	$persona 	->	paterno_persona		=	$row['PATERNO_PERSONA'];
	$persona 	->	materno_persona		=	$row['MATERNO_PERSONA'];
	$persona 	->	fono_persona		=	$row['FONO_PERSONA'];
	$persona 	->	mail_persona		=	$row['MAIL_PERSONA'];
	$persona 	->	direccion_persona	=	$row['DIRECCION_PERSONA'];
	$persona 	->	id_comuna			=	$row['ID_COMUNA'];	
	$persona 	->	id_ciudad			=	$row['ID_CIUDAD'];
	$persona 	->	id_pais				=	$row['ID_PAIS'];
	$listaPersonas[]=$persona;

}

$objPersona->listaPersonas=$listaPersonas;

mysqli_close($conn);
echo json_encode($objPersona);

