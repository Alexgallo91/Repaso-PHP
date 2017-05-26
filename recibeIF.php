<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Recibir</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<?php  
		if($_POST["password"] == "alex123")
		{
			echo "<h1>Contraseña correcta</h1>" .
				 "<h1>Bienvenido ".$_POST["usuario"]."</h1><br>";
		}
		else
		{
			echo "<h1 style=\"color:red;\">Contraseña incorrecta</h1>";
		}
	?>
</body>
</html>