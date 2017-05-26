<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Recibe valores de metodo post</title>
	<link rel="stylesheet" href="">
</head>
<body>

<?php  

	echo "<h1>Datos recibidos</h1>";
	echo "<strong>Nombre: </strong>".$_POST["nombre"];
	echo "<br><strong>Domicilio: </strong>".$_POST["direccion"];

?>
	
</body>
</html>