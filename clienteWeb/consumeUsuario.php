<!<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<link rel="stylesheet" type="text/css" href="style.css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

</head>
<body>
<div class="wrapper fadeInDown">
  <div id="formContent">
    <!-- Tabs Titles -->

    <!-- Icon -->
    <div class="fadeIn first">
      <img src="img/1.png" id="icon" alt="User Icon" />
    </div>

<form method="post">
      <input type="text" id="login" class="fadeIn second" name="usuario" placeholder="login">
      <input type="text" id="password" class="fadeIn third" name="password" placeholder="password">
      <input type="submit" class="fadeIn fourth" value="Log In">
</form>
    <!-- Remind Passowrd -->
    <div id="formFooter">
      <a class="underlineHover" href="#">Forgot Password?</a>
    </div>

  </div>
</div>

<?php
error_reporting(0);
$usuario 	=	$_POST['usuario'];
$pass 		=	$_POST['password'];
$Resultado="";

$url		=	"http://localhost/e-vale/ws/usuario.php?usuario=$usuario&pass=$pass";
$feed		=	json_decode(file_get_contents($url),true);
$usuarios	=	(array)$feed['numero'];

$i=0;
	foreach ($usuarios as $usuario) {
	$resultado = $usuario['numero'];
}

if ($resultado==1) {
	echo "Bienvenido!";
  header("location:home.html");
}else{
	echo "Datos erroneos!";
  alert("Datos mal ingresados");
}


?>

</body>
</html>