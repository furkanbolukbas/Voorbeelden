<?
include("opd4class.php");
session_start();
if (isset($_SESSION['rekening1'])) {
  $rek1 = $_SESSION['rekening1'];
  $rek2 = $_SESSION['rekening2'];
}
else{
$rek1 = new rekeningen(55555, 1000);
$rek2 = new rekeningen(77777, 1000);
}
?>
<style type="text/css">
<!--
#apDiv1 {
	position:absolute;
	left:362px;
	top:20px;
	width:312px;
	height:226px;
	z-index:1;
}
#apDiv2 {
	position:absolute;
	left:42px;
	top:20px;
	width:286px;
	height:227px;
	z-index:2;
}
-->
</style>
<?php
if (isset($_POST['uitv1'])) {
  $bedrag1 = $_POST['bedrag1'];

  $rek1->vermindersaldo($bedrag1);
  $rek2->vermeerdersaldo($bedrag1);

  $_SESSION['rekening2'] = $rek2;
  $_SESSION['rekening1'] = $rek1;

}
if (isset($_POST['uitv2'])) {
  $bedrag3 = $_POST['bedrag3'];

  $rek2->vermindersaldo($bedrag3);
  $rek1->vermeerdersaldo($bedrag3);

  $_SESSION['rekening1'] = $rek1;
  $_SESSION['rekening2'] = $rek2;

}
?>
<div id="apDiv1">
<form name="form2" method="post" action="">
  <table width="300" border="1" cellspacing="4" cellpadding="4">
    <tr>
      <td colspan="2">Rekening 2</td>
    </tr>
    <tr>
      <td>rekeningnummer</td>
      <td><? echo $rek2->geefreknr(); ?></td>
    </tr>
    <tr>
      <td>saldo</td>
      <td><? echo $rek2->geefsaldo(); ?></td>
    </tr>
    <tr>
      <td>overschrijven</td>
      <td><input type="text" name="bedrag1" id="bedrag1"></td>
    </tr>
    <tr>
      <td><input type="hidden" name="naar" id="naar" value="ontvanger2"></td>
      <td><input type="submit" name="uitv1" id="uitv1" value="Submit"></td>
    </tr> 
  </table>
</form>
</div>

<div id="apDiv2">
<form name="form1" method="post" action="">
  <table width="229" border="1" cellspacing="4" cellpadding="4">
    <tr>
      <td colspan="2">Rekening 1 </td>
    </tr>
    <tr>
      <td width="80">rekeningnummer</td>
      <td width="115"><? echo $rek1->geefreknr(); ?></td>
    </tr>
    <tr>
      <td>saldo</td>
      <td><? echo $rek1->geefsaldo(); ?></td>
    </tr>
    
      <tr>
        <td>overschrijven</td>
        <td><label>
          <input type="text" name="bedrag3" id="bedrag3">
        </label></td>
      </tr>
      <tr>
        <td><input type="hidden" name="naar" id="naar" value="ontvanger1"></td>
        <td><label>
          <input type="submit" name="uitv2" id="uitv2" value="Submit">
        </label></td>
      </tr>
  </table>
</form>
</div>
</body>
</html>
