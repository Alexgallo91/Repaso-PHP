<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Ejemplo de metodo Post</title>
	<link rel="stylesheet" href="">
</head>
<body>

<h1>Ingresa tus datos</h1>
<form action="recibePost.php" method="post">
<br>
Nombre:<br>
<input type="text" name="nombre" placeholder="Nombre">
<br>
Domicilio<br>
<input type="text" name="direccion" placeholder="direccion" required><br>
<input type="submit" value="Enviar">
</form>
	
</body>
</html>