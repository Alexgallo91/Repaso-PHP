<?php 
	session_start();
 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Borrado de session</title>
	<link rel="stylesheet" href="">
</head>
<body>

<?php 
	//elimina toda las variables de nuestra sesion 
	$_SESSION = array();
	echo "<h1>Se elimino la session</h1>";
?>

<a href="checarSession.php">checar session</a>
<a href="ejemploBorradoSession.php">regresar a principal</a>
	
</body>
</html>