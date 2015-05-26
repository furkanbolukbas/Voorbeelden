<?php
require("opdr3_classfile.php");
if (isset($_GET['verwijderen']))
{
 $a = new meubelnamen;
 $a->verwijderen();

 header("Location:opdracht3.php");
}
elseif (isset($_GET['aanpassen']))
{


 //$b = new meubelnamen
 //$b->pasaan();

 //header("Location:opdracht3.php"); 
}


//header("Location: opdracht3.php");
?>