<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Validando datos</title>
	<link rel="stylesheet" href="">
</head>
<body>
<?php  
	
	function validarEmail($email)
	{
		if(!filter_var($email,FILTER_VALIDATE_EMAIL))
			echo "Correo invalido, intentalo de nuevo!!!";
		else
			echo "Correo valido";
	}

	function validandoNombre($nombre)
	{
		if(empty($nombre) || !preg_match("/^[a-zA-Z ]*$/",$nombre))
		{
			echo "Nombre incorrecto, intentalo nuevamente";
			echo "<br>$nombre";
		}
		else
		{
			echo "Nombre correcto!!!";
			echo "Nombre <u>$nombre</u>: ";
			echo "longitud: " . strlen($nombre);
		}
	}

	function datoEntrante($dato)
	{
		//quita espacios y establece el dato de manera eficiente y correcta
		$dato = trim($dato);
		$dato = stripcslashes($dato);
		$dato = htmlspecialchars($dato);
		return $dato;
	}

	if(isset($_POST["nombre"]))
	{
		$nombre = $_POST["nombre"];
		$nombre = datoEntrante($nombre);
		validandoNombre($nombre);
	}

	if(isset($_POST["correo"]))
	{
		$correo = $_POST["correo"];
		datoEntrante($correo);
		$correo = validarEmail($correo);
	}
?>
</body>
</html>