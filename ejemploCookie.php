<?php  
	//si no esta nombre dentro de cookie
	if(!isset($_COOKIE["nombre"]))
	{
		setcookie("nombre","Abraham", time()+60);
	}

	if(isset($_GET["borrar"]))
		if($_GET["borrar"]==true)
			unset($_COOKIE["nombre"]);
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Ejemplo read cookie</title>
	<link rel="stylesheet" href="">
</head>
<body>
<?php  
	if(isset($_COOKIE["nombre"]))
	{
		echo "tu nombre es : ".$_COOKIE["nombre"];
	}
	elseif (isset($_GET["borrar"]) && $_GET["borrar"]==true) 
	{
		echo "<h1>Se borro la variable de la cookie</h1>";
	}
	else
	{
		echo "<h1>Aun no se ha establecido la variable dentro de la cookie</h1>";
	}

	//borra una cookie
	unset($_COOKIE["nombre"]);
?>
<br>
<a href="ejemploCookie.php?borrar=true">Borrar nombre</a>
</body>
</html>