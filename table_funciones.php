<?php  
	
	function establecerTabla($nombre_archivo)
	{
		$codigo = "<table id=\"tabla_nombres\" align=\"center\">";
		if($matriz = file($nombre_archivo))
		{
			//echo "Se añadio correctamente";
			//echo count($matriz);
			for ($i=0; $i < count($matriz); $i+=3) 
			{ 
				if($i%2==0)//si es par
				{
					if(isset($matriz[$i], $matriz[$i+1], $matriz[$i+2]))
					{
						$codigo.="<tr>";
						$codigo.="<td class=\"par\">".$matriz[$i]."</td>";
						$codigo.="<td class=\"par\">".$matriz[($i+1)]."</td>";
						$codigo.="<td class=\"par\">".$matriz[($i+2)]."</td>";
						$codigo.="</tr>";
					}
					elseif (isset($matriz[$i], $matriz[$i+1]))
					{
						$codigo.="<tr>";
						$codigo.="<td class=\"par\">".$matriz[$i]."</td>";
						$codigo.="<td class=\"par\">".$matriz[($i+1)]."</td>";
						$codigo.="</tr>";
					}
					elseif (isset($matriz[$i]))
					{
						$codigo.="<tr>";
						$codigo.="<td class=\"par\">".$matriz[$i]."</td>";
						$codigo.="</tr>";
					}
				}
				else
				{
					if(isset($matriz[$i], $matriz[$i+1], $matriz[$i+2]))
					{
						$codigo.="<tr>";
						$codigo.="<td class=\"impar\">".$matriz[$i]."</td>";
						$codigo.="<td class=\"impar\">".$matriz[($i+1)]."</td>";
						$codigo.="<td class=\"impar\">".$matriz[($i+2)]."</td>";
						$codigo.="</tr>";
					}
					elseif (isset($matriz[$i], $matriz[$i+1]))
					{
						$codigo.="<tr>";
						$codigo.="<td class=\"impar\">".$matriz[$i]."</td>";
						$codigo.="<td class=\"impar\">".$matriz[($i+1)]."</td>";
						$codigo.="</tr>";
					}
					elseif (isset($matriz[$i]))
					{
						$codigo.="<tr>";
						$codigo.="<td class=\"impar\">".$matriz[$i]."</td>";
						$codigo.="</tr>";
					}
				}
			}
			$codigo.="</table>";
		}	
		else
		{
			//echo "Algo malo sucedio";
			return false;
		}
		return $codigo;
	}

	function obtener_numero_nombres()
	{
		return count(file("names.txt"));
	}
?>