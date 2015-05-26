<?php
class connect{
	private $host;
	private $gebruiker;
	private $wachtwoord;
	private $DBNaam;

	protected function verbinding()
	{
		$verbinding = mysql_connect($this->host, $this->gebruiker, $this->wachtwoord)
		or die("De verbinding is mislukt<p>".mysql_error());
		mysql_select_db($this->DBNaam);
	}
	public function __construct()
	{
		$this->host = "127.0.0.1";
		$this->gebruiker = "74757";
		$this->wachtwoord = "xMYQpe";
		$this->DBNaam = "db74757";
	}
}
class meubelnamen extends connect
{
	private $result;

	function uitlezen()
	{
		$this->verbinding();
		$this->result = mysql_query("SELECT * FROM meubels");
	}
	
	function verwijderen()
	{
		$this->verbinding();
		$id = $_GET['verwijderen'];
		return $this->result = mysql_query("DELETE FROM meubels WHERE artikelnr='$id'");
	}
	function pasaan($nr, $nm, $tp, $om, $pr)
	{
		$this->verbinding();
		$query = "UPDATE meubels SET naam='$nm', type='$tp', omschrijving='$om', prijs='$pr'";
		mysql_query($query);
	}
	function teruggeven()
	{
		$this->verbinding();
		$query->"SELECT * FROM meubels WHERE artikelnr = $artikelnr"
	}
	function teruggeven()
	{
		return $this->result;
	}
}
?>