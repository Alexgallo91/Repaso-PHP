<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Ejemplo de uso de funciones</title>
	<link rel="stylesheet" href="">
</head>
<body>
<?php  
	include_once("funciones.php");
	$vehiculos = array("autos","motos","camiones","cuatriciclos","motonetas","tanques");
	$terrenos = array("casas","almacen","terreno","montaña","mansion");

	print("<h2>Lista de propiedades:</h2>");
	echo listarMatriz($terrenos);

	print("<h2>Lista de vehiculos:</h2>");
	$r_vehiculos = listarMatriz($vehiculos); 
	echo $r_vehiculos;
?>
	
</body>
</html>