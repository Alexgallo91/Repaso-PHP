<?php  
	//se inicia la sesion
	session_start();
	$identificador = session_id();
	$_SESSION["nombre"] = "Alexis";
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
</head>
<body>

<?php  
	echo "<h1>Nuestro identificador de sesion es: $identificador</h1>";
?>
<form action="recibirSession.php" method="post">
Ingresa tu nombre:<br>
<input type="text" name="nombre" required><br>
<input type="submit" value="Enviar"><br>
</form>
	
</body>
</html>