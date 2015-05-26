<?php

function maakTafel($getal)
{
	if(is_numeric($getal))
	{
		for ($x=1; $x <=10; $x++)
		{ 
			$tafel.= "$x x $getal = ". $getal * $x."<br/>";	
		}
		return $tafel;
	}
	else
	{
		return "Voer een getal in";
	}
}

?>