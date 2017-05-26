<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Ejemplo matrices en php</title>
	<link rel="stylesheet" href="">
</head>
<body>
<?php  
	$caja[0] = 10;
	$caja[1] = 20;
	$caja[2] = 30;

	print("caja[0] = $caja[0]<br>");
	print("caja[1] = $caja[1]<br>");
	print("caja[2] = $caja[2]<br>");

	//crea un array 
	$paises = array("Argentina","Uruguay", "Chile","Peru");
	$loteria = array(23,34,54,25,65);
	$usuario = array("Abraham Moreno",24,"soltero",30000);
	//crea un array a partir del indice 1
	$usuario2 = array(1=>"Iris Noseque",24,"soltera",10000);

	$datos["nombre"] = "Juan Perez";
	$datos["edad"]   = 24;
	$datos["estado"] = "casado";
	$datos["sueldo"] = 12000;

	print($datos["nombre"]);

	//echo count($_SERVER);

?>
	
</body>
</html>