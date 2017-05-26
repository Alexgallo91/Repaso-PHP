<?php 
	session_start();
	$_SESSION["nombre"]   = "Alexis Abraham";
	$_SESSION["apellido"] = "Araujo Moreno"; 
	$_SESSION["edad"]     = 24;
 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Borrando variable de session</title>
	<link rel="stylesheet" href="">
</head>
<body>

<a href="checarSession.php">Checar variables Session</a>
<a href="deleteSession.php">Borrar variables</a>
	
</body>
</html>