<?php  
	$color;
	if(isset($_POST["estilo"]))
	{
		$color = $_POST["estilo"];
		setcookie("estilo",$_POST["estilo"], time()+60*60);
	}
	elseif (isset($_POST["estilo"])) 
	{
		$color = $_POST["estilo"];
	}
	else
	{
		//valor por default
		$color = "negro";
	}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<style>
		body
		{
			<?php  
				switch ($color) {
						case "rojo":
							$color = "#FF0707";              
							break;
						case "verde":
							$color = "#11E116";
							break;
						case "azul":
							$color = "#2400D9";
							break;
						case "negro":
							$color = "#000000";
							break;
					}
				echo "background-color: $color;";	
			?>
		}

		#square
		{
			background-color: yellow;
			width: 200px;
			height: 200px;
			margin: 0 auto;
			margin-top: 200px;
		}
	</style>
</head>
<body>
	<form action="paginaSeleccion.php" method="post">
		<select name="estilo" required>
			<option value="rojo">rojo</option>
			<option value="verde">verde</option>
			<option value="azul">azul</option>
			<option value="negro">negro</option>
		</select>
		<input type="submit" value="Enviar">
	</form>
	<div id="square"></div>
</body>
</html>