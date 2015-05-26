<html>
<head>
	<title></title>
</head>
<body>	
<table>
	<form method="post">
	<tr>
		<td>Lengte<td/>
		<td><input type="text" name="lengte"><td/>
	<tr/>
	<tr>
		<td>Breedte<td/>
		<td><input type="text" name="breedte"><td/>
	<tr/>
	<tr>
		<td>Hoogte<td/>
		<td><input type="text" name="hoogte"><td/>
	<tr/>
	<tr>
		<td><td/>
	    <td><input type="submit" name="submit" value="verzend"><td/>
	<tr/>
	</form>		
</table>
<hr/>
<?php

	require "opdracht2b_function.php";
	if(isset($_POST['submit']))
	{
		$l = $_POST['lengte'];
		$b = $_POST['breedte'];
		$h = $_POST['hoogte'];
		$balk1 = new Balk($l, $b, $h);
		echo "De inhoud is: ".$balk1->Bereken()."kubieke centimeter";
	}
?>	
</body>
</html>