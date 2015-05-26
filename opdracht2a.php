<?php
class persoon
{
	public $naam;
	public $leeftijd;
	public $beroep;

	public function geef_naam()
	{
		return $this->naam;
	}
	public function geef_leeftijd()
	{
		return $this->leeftijd;
	}
	public function geef_beroep()
	{
		return $this->beroep;
	}
	public function bepaal_naam($nieuwe_naam)
	{
		$this->naam = $nieuwe_naam;
	}
	public function bepaal_leeftijd($nieuwe_leeftijd)
	{
		$this->leeftijd = $nieuwe_leeftijd;
	}
	public function bepaal_beroep($nieuwe_beroep)
	{
		$this->beroep = $nieuwe_beroep;
	}
}

$a = new persoon();
$a -> bepaal_naam(Marianne);
$a -> bepaal_leeftijd(23);
$a -> bepaal_beroep(Adviseur);
echo $a->geef_naam()."&nbsp&nbsp".$a->geef_leeftijd()."&nbsp&nbsp".$a->geef_beroep()."<br/>";

$b = new persoon();
$b -> bepaal_naam(Maruz);
$b -> bepaal_leeftijd(19);
$b -> bepaal_beroep(Student);
echo $b->geef_naam()."&nbsp&nbsp".$b->geef_leeftijd()."&nbsp&nbsp".$b->geef_beroep()."<br/>";

$c = new persoon();
$c -> bepaal_naam(Nicolai);
$c -> bepaal_leeftijd(36);
$c -> bepaal_beroep(Striptekenaar);
echo $c->geef_naam()."&nbsp&nbsp".$c->geef_leeftijd()."&nbsp&nbsp".$c->geef_beroep()."<br/>";
?>