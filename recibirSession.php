<?php  
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Me llego algo en el session</title>
</head>
<body>
	<?php  
		echo "<h1>Bienvenido ".$_SESSION["nombre"]."</h1>";
		echo SID."<br>";
		echo session_id()."<br>";
		echo session_name()."<br>";

	?>
</body>
</html>