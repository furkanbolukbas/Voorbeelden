<html>
<head>
	<title></title>
</head>
<body>	
<table>
	<form method="post">
	<tr>
		<td>Getal<td/>
		<td><input type="text" name="getal"><td/>
	<tr/>
	<tr>
		<td><td/>
	    <td><input type="submit" name="submit" value="verzend"><td/>
	<tr/>
	</form>		
</table>
<hr/>
<?php

	require "opdr1_function.php";
	if(isset($_POST['submit']))
	{
		$g = $_POST['getal'];
		echo maakTafel($g);
	}
?>	
</body>
</html>