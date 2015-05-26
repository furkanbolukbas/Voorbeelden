<?php
	require("opdr3_classfile.php");
	$a = new meubelnamen();
	$a->uitlezen();

	echo "<table border='1' cellspacing='5' padding='5'>";
	echo "<tr>";
	echo "<td>artikelnr</td>";
	echo "<td>naam</td>";
	echo "<td>type</td>";
	echo "<td>omschrijving</td>";
	echo "<td>prijs</td>";
	echo "</tr>";
	
	while ($rij = mysql_fetch_array($a->teruggeven()))
	{
		echo "<tr>";
		echo "<td>".$rij["artikelnr"]."</td>";
		echo "<td>".$rij["naam"]."</td>";
		echo "<td>".$rij["type"]."</td>";
		echo "<td>".$rij["omschrijving"]."</td>";
		echo "<td>".$rij["prijs"]."</td>";
		echo "<td><a href='opdracht3b.php?verwijderen=".$rij["artikelnr"]."' name='verwijderen'>Verwijderen</td>";
		echo "<td><a href='opdracht3b.php?aanpassen=".$rij["artikelnr"]."'name='aanpassen'>Aanpassen</td>";
		echo "</tr>";

	}
	echo "</table>";
?>