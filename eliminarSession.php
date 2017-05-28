<?php  
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Eliminando Session</title>
	<link rel="stylesheet" href="">
</head>
<body>

<?php  
	$_SESSION = array();
	if (ini_get("session.use_cookies")==true) 
	{
		$parametros = session_get_cookie_params();
		setcookie(session_name(), '', time()-99999,
			      $parametros["domain"], $parametros["secure"],
			      $parametros["httponly"]);
		session_destroy();
	}
?>

	
</body>
</html>