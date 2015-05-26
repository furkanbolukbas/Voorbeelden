<?php
	class Computer{
		//EIGENSCHAPPEN
		private $s_Naam;
		private $s_Processor;
		private $s_Harddisk;
		//CONSTRUCTOR
		public function __construct($nm, $pr, $hd){
			$this->s_Naam = $nm;
			$this->s_Processor = $pr;
			$this->s_Harddisk = $hd;
		}
		// DE SET-METHODE
		public function __set($Eigenschap, $Waarde){
			switch($Eigenschap){
				case "Naam": $this->s_Naam = $Waarde;
					break;
				case "Processor": $this->s_Processor = $Waarde;
					break;
				case "Harddisk": $this->s_Harddisk = $Waarde;
					break;
				default: echo "FOUT Met Eigenschap: ".$Eigenschap."<BR\>";
			}
		}
		// DE GET-METHODE
		public function __get($Eigenschap){
			$Waarde = null;
			switch($Eigenschap){
				case "Naam": $Waarde = $this->s_Naam;
					break;
				case "Processor": $Waarde = $this->s_Processor;
					break;
				case "Harddisk": $Waarde = $this->s_Harddisk;
					break;
				default: echo "FOUT Met Eigenschap: ".$Eigenschap."<BR\>";
			}
			return $Waarde;
		}
	}


?>