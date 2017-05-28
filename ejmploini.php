<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>ejemplo ini</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<?php  
		echo ini_get("session.use_cookies");

		if (ini_get("session.use_cookies") == true) 
		{
			echo "<br>si se esta usando sesiones ".
				 "dentro de este servidor";
		}
	?>
</body>
</html>