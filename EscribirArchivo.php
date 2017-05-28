<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Escribiendo Archivo</title>
	<style>
		.red
		{
			color: red;
		}
	</style>
</head>
<body>

<?php  
	$archivo; //archivo donde escribiremos las variables de POST
	if(isset($_POST["nombre"]) && isset($_POST["email"]))
	{
		echo("EXISTEN LAS VARIABLES DEL POST");

		if($_POST["escritura"]=="sobreescribir")
		{
			$param = "w";
		}
		elseif ($_POST["escritura"]=="concatenar") 
		{
			$param = "a";
		}

		$archivo = fopen("deposito.txt", $param);
		$texto = "";
		$texto .= $_POST["nombre"]." - ".$_POST["email"]."\r\n";

		//si se realizo con exito la escritura
		if(fputs($archivo,$texto))
		{
			echo "<h2>Se han escrito los datos correctamente</h2>";
			echo "<br><br>Resultado:<br>";
			$archivo_mostrar = file("deposito.txt");
			print_r($archivo_mostrar);
		}
	}
	else
	{
		echo "<h2 class=\"red\">No se llevo con exito la escritura</h2>";
		fclose($archivo);
	}
?>
</body>
</html>