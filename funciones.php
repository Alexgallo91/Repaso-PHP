<?php  
function listarMatriz($matriz)
{
	$codigo = "<ul>";

	foreach ($matriz as $value) 
	{
		$codigo .= "<li>".$value."</li>";  
	}
	$codigo .= "</ul>";
	return $codigo;
}
?>