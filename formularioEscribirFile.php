<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>>Form Escribir file</title>
	<link rel="stylesheet" href="">
</head>
<body>

<form action="EscribirArchivo.php" method="post" >
	Nombre:<br>
	<input type="text" name="nombre" placeholder="Ingresa tu nombre" required><br>
	Email:<br>
	<input type="email" name="email" placeholder="Ingresa tu email" required><br>
	<select name="escritura">
		<option value="concatenar">concatenar</option>
		<option value="sobreescribir">sobreescribir</option>
	</select>
	<input type="submit" value="Enviar"><br>
</form>
	
</body>
</html>