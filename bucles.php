<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Ejemplos de Bucles</title>
	<link rel="stylesheet" href="">
</head>
<body>

<?php  
	for ($i=0; $i < 10 ; $i++) 
	{ 
		echo "i vale: $i<br>";
	}

	$frutas = array(1=>"manzana","pera","durazno","uva");
	echo "Tenemos ".count($frutas)." frutas<br>";
	for($i=1; $i <= count($frutas);$i++)
	{
		echo "fruta $i: $frutas[$i]<br>";
	}

	//ejemplo foreach
	foreach($frutas as $indice => $valor)
	{
		echo $indice." => ".$valor."<br>";
	}
?>
	
</body>
</html>