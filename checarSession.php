<?php 
	session_start();
 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Borrando variable de session</title>
	<link rel="stylesheet" href="">
</head>
<body>

<?php  
	if(isset($_SESSION["nombre"],$_SESSION["apellido"],
			 $_SESSION["edad"]))
	{
		echo "<h1>Variables de Session</h1><br>";
		echo "Nombre: ".$_SESSION['nombre']."<br>";
		echo "Nombre: ".$_SESSION['apellido']."<br>";
		echo "Nombre: ".$_SESSION['edad']."<br>";
	}
	else
	{
		echo "<h1>Se borro toda la session</h1>";
	}
?>

<a href="ejemploBorradoSession.php">Crear de nuevo variables de Session</a>
<a href="deleteSession.php">Borrar variables</a>
	
</body>
</html>