<?
class rekeningen{
private $rekeningnummer;
public $saldo;

public function geefreknr(){
return $this->rekeningnummer;
}

public function geefsaldo(){
return $this->saldo;
}
public function vermindersaldo($bedrag){
$this->saldo = $this->saldo - $bedrag;
}

public function vermeerdersaldo($bedrag){
$this->saldo = $this->saldo + $bedrag;
}

public function __construct($a, $b){
$this ->rekeningnummer = $a;
$this ->saldo = $b;
}





}
?>