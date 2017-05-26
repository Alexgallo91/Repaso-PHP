<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Recibir if 2</title>
	<link rel="stylesheet" href="">
</head>
<body>

<?php  
	if($_POST["genero"] == "Hombre")
		echo "<h1>Bienvenido Hombre!!!</h1>";
	else
		echo "<h1>Bienvenida Mujer!!!</h1>";

	//calcula la edad de la persona
	if($_POST["años"]<30)
		echo "<p>Es usted una persona joven</p>";
	elseif($_POST["años"]>=30 && $_POST["años"]<65)
		echo "<p>Es usted una persona joven adulta</p>";
	elseif($_POST["años"]>=65)
		echo "<p>Es usted una persona adulta</p>";

	if(isset($_POST["dia"]))
	{
		switch ($_POST["dia"]) 
		{
			case "lunes":
				echo "<h2>Usted eligio el dia lunes</h2>";
				break;
			case "martes":
				echo "<h2>Usted eligio el dia martes</h2>";
				break;
			case "miercoles":
				echo "<h2>Usted eligio el dia miercoles</h2>";
				break;
			case "jueves":
				echo "<h2>Usted eligio el dia jueves</h2>";
				break;
			case "viernes":
				echo "<h2>Usted eligio el dia viernes</h2>";
				break;
			case "sabado":
				echo "<h2>Usted eligio el dia sabado</h2>";
				break;
			case "domingo":
				echo "<h2>Usted eligio el dia domingo</h2>";
				break;
			default:
				echo "<h2>Hubo un error</h2>";
				break;
		}
	}

	/*
	$date = localtime();
	$day = date('l',strtotime());
	echo "$day";
	*/
?>
	
</body>
</html>