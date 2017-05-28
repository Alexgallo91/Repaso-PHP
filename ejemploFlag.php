<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Ejemplo de flag</title>
</head>
<body>

<?php  
	$claves = array(1=>"secreto","ultra","anonima","123456");
	$cuantos = count($claves);
	$encontrada = "no";

	for ($i=1; $i <= $cuantos ; $i++) 
	{ 
		if($encontrada == "si")
			break;

		if (isset($_POST["clave"]) && $_POST["clave"] == $claves[$i]) 
		{
			echo "<h1>Se ha encontrado la clave</h1>";
			$encontrada = "si";
		}
	}

	if($encontrada == "no")
		echo "<h1>Clave no encontrada :(</h1>";
?>

	<form action="ejemploFlag.php" method="post">
		Clave:<br>
		<input type="text" name="clave" placeholder="Ingresa la clave">
		<br>
		<input type="submit" name="Enviar">
	</form>
	
</body>
</html>