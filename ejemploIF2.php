<?php
	//creacion de cookie
	setcookie("nombre","abraham");
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Ejemplo if con php</title>
	<link rel="stylesheet" href="">
</head>
<body>

	<form action="recibirIF2.php" method="post">
		Ingresa tu sexo:<br>
		<select name="genero" required>
			<option value="Hombre">Hombre</option>
			<option value="Mujer">Mujer</option>
		</select>
		<br>Ingrese un dia
		<br>
		<select name="dia" required>
		<option value="lunes">lunes</option>
		<option value="martes">martes</option>
		<option value="miercoles">miercoles</option>
		<option value="jueves">jueves</option>
		<option value="viernes">viernes</option>
		<option value="sabado">sabado</option>
		<option value="domingo">domingo</option>
		</select>
		<br>Ingresa tu edad:
		<br><input type="number" name="años" placeholder="Edad" min="1" 
			 max="100" required>
		<br><input type="submit" value="Enviar">
	</form>
	
</body>
</html>