<?php

include('../database/dbconnection.php');
$rs	=	mysqli_query($conn, 'select * from producto');
$objProducto	=	new stdClass();
$listaProductos	=	[];
while ($row	=	mysqli_fetch_array($rs, MYSQLI_ASSOC)) {

	$producto 	=	new stdClass();
	$producto 	->	id_producto	=	$row['id'];
	$producto 	->	nombre_producto	=	$row['nombre'];			
	$producto 	->	marca_producto	=	$row['marca'];
	$producto 	->	codigo_producto	=	$row['codigo'];
	$producto 	->	cantidad_producto	=	$row['cantidad'];
	$listaProductos[]=$producto;

}

$objProducto->listaProductos=$listaProductos;

mysqli_close($conn);
echo json_encode($objProducto);

