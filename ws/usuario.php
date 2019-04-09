<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include('../database/dbconnection.php');
$usuario 	=	$_GET['usuario'];
$pass 		=	$_GET['pass'];
$rs	=	mysqli_query($conn, "select E_VALE.EV_FUNC_ENTRAR('$usuario', '$pass');");
$objusuario	=	new stdClass();
$listausuarios	=	[];
$numero="";
while ($row	=	mysqli_fetch_array($rs, MYSQLI_ASSOC)) {


	$numero=	$row["E_VALE.EV_FUNC_ENTRAR('$usuario', '$pass')"];
	$usuario 	=	new stdClass();
	$usuario	->	numero 	=	$numero;


}

;

$objusuario=$usuario;
mysqli_close($conn);
echo json_encode($objusuario);





