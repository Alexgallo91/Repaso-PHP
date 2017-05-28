<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Ejemplo List</title>
	<style>
		.impar
		{
			background-color: #000000;
			color: #FFFFFF;
		}

		.par
		{
			background-color: #FFFFFF
			color: #000000;
		}
	</style>
</head>
<body>
	<?php  
		$datos["nombre"] = "Juan Perez";
		$datos["edad"] = 24;
		$datos["estado"] = "casado";
		$datos["sueldo"] = 800;
		$este = each($datos);

		print("El indice de este elemento es " . $este[0]."<br>");
		print("El valor de este elemento es " . $este[1]."<br>");
		print("El indice de este elemento es " . $este["key"]."<br>");
		print("El valor de este elemento es " . $este["value"]."<br>");

		print_r($este);
		echo "<br>";
		$elementos = array("elemento1" => "fuego",
						   "elemento2" => "agua",
						   "elemento3" => "tierra",
						   "elemento4" => "viento",
							);

		print_r($elementos);
		echo "<br>";

		while(list($key,$value) = each($elementos))
		{
			echo "La llave es $key y su valor es $value<br>";
		}

		//bucle do-while
		echo "<br>";
		$limite = 5;
		do 
		{
			echo "limite: $limite<br>";
			$limite++;	
			if($limite==9)
			{
				echo "<br>";
			}
		} while ($limite<9);

		$vegetales = array("zanahoria","lechuga","tomate","pepino");
		$numVeg = count($vegetales)-1;

		echo "<table>";
		while(true)
		{
			echo "<tr>";
			if ($numVeg%2==0) 
			{
				echo "<td class=\"par\">";
				echo "La fila de $vegetales[$numVeg] es par";
				echo "</td>";
			}
			else
			{
				echo "<td class=\"impar\">";
				echo "La fila de $vegetales[$numVeg] es impar";
				echo "</td>";
			}
			echo "</tr>";

			if($numVeg == 0)
				break;

			$numVeg--;
		}
		echo "</table>";
	?>
</body>
</html>