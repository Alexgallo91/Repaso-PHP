<?php  
	include_once("table_funciones.php");
	$tabla = establecerTabla("names.txt");
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Tabla decorada</title>
	<link rel="stylesheet" href="estilo.css">
	<style>
		#principal
		{
			position: relative;
			width: 80%;
			height: <?php echo (obtener_numero_nombres()*22.2/3)."px"; ?>;/*800px;*/
			background: #1C083B;
			margin: 0 auto;
			margin-top: 30px;

		}

		section
		{
			position: absolute;
			height: 99.98%;
			width: 90%;
			top: 50%; left: 50%;
			transform: translate(-50%,-50%);
			background: #250227;
			margin: auto;
			margin-top: 40px;
		}
	</style>
</head>
<body>

	<div id="principal">
		<section>
			<?php  
				echo "$tabla";
			?>
		</section>
	</div>
	
</body>
</html>