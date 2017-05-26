<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Ejemplo de variables con PHP</title>
	<link rel="stylesheet" href="">
</head>
<body>
<?php  
	$nombre = "pepe";
	$id_p = "saludo";
	$concatenacion = "<p id=\"" . $id_p. "\">Hola ".$nombre."</p>";
?>

<div id="principal">
	<?php 
		echo "$concatenacion";
	?>
</div>
	
</body>
</html>