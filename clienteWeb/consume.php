<?php
$url		=	"http://localhost/e-vale/ws/persona.php";
$feed		=	json_decode(file_get_contents($url),true);
$personas	=	$feed['listaPersonas'];

$i=1;
foreach ($personas as $persona) {
	echo 'Persona '.$i.'<br>';
	echo $persona['rut_persona'].'<br>';
	echo $persona['nombre_persona'].'<br>';
	echo $persona['paterno_persona'].'<br>';
	echo $persona['materno_persona'].'<br><br>';
	$i++;
}



?>