<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Respuesta a enlace</title>
	<link rel="stylesheet" href="">
</head>
<body>

<h1>Resultado de GET</h1>
	
	<?php  
		if(empty($_GET["nombre"]))
			echo "Esta vacia loco!!!";
		else{
			echo "<p>No esta vacia loco!!!</p>";
			echo "El nombre que enviaste es: " . $_GET["nombre"];
		}
	?>
</body>
</html>