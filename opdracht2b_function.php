<?php
class Balk
{
	private $lengte;
	private $breedte;
	private $hoogte;
	private $inhoud;

	public function __construct($l, $b, $h)
	{
		$this->lengte = $l;
		$this->breedte = $b;
		$this->hoogte = $h;

	}
	public function Lengte()
	{
		return $this->lengte;
	}
	public function breedte()
	{
		return $this->breedte;
	}
	public function hoogte()
	{
		return $this->hoogte;
	}
	private function controleer()
	{
		if ($this->inhoud > 2000) {
			return FALSE;
		}
		else
		{
			return TRUE;
		}

	}
	public function Bereken()
	{
		$this->inhoud = $this->lengte * $this->breedte * $this->hoogte;

		if ($this->controleer())
		{
			
			return $this->inhoud;
		}
		else
		{
			return " over 2000 ";
		}
			
	}

}
?>