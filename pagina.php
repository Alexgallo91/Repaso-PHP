<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>pagina que incluye otros archivos</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<div>
		<?php include("encabezado.php"); ?>
		<div id="contenidoPrincipal">
			Contenido principal
		</div>

		<?php include("botonera.php") ?>
		<?php include("pie.php") ?>
	</div>
</body>
</html>