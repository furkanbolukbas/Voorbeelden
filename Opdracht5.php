
<html>
<head>
	<title></title>
</head>
<body>

<table>
	<form action="" method="POST">
	<tr>
		<td>Modelnaam</td>
		<td><input type="text" name="nieuwNaam" placeholder=""></td>
	</tr>
	<tr>
		<td>Processor</td>
		<td><input type="text" name="nieuwProcessor" placeholder=""></td>
	</tr>
	<tr>	
		<td>Hardeschijf grootte</td>
		<td><input type="text" name="nieuwHarddisk" placeholder=""></td>
	</tr>
	<tr>	
		<td><input type="submit" name="button" value="Voegtoe"></td>
	</tr>
</table>
	<br>
	<?php
	include("Opdracht5_Class.php");
	
	echo "Oude computer:";
	echo "<br>";
	$Computer = new Computer ("ASUS", "INTEL i5", "1TB");
	echo "Naam: ".$Computer->Naam."<br>";
	echo "Processor: ".$Computer->Processor."<br>";
	echo "Harddisk: ".$Computer->Harddisk."<br>";
	
	if(isset($_POST['button'])){
		$nieuwNaam = $_POST["nieuwNaam"];
		$nieuwProcessor = $_POST["nieuwProcessor"];
		$nieuwHarddisk = $_POST["nieuwHarddisk"];

		echo "<br>";
		echo "<br>";

		echo "Nieuwe computer:";
		echo "<br>";
		
		$Computer->Naam = $nieuwNaam;
		echo "Naam ". $Computer->Naam."<br>";
		
		$Computer->Processor = $nieuwProcessor;
		echo "Processor ". $Computer->Processor."<br>";
		
		$Computer->Harddisk = $nieuwHarddisk;
		echo "Harddisk ". $Computer->Harddisk."<br>";
	}
?>

</body>
</html>