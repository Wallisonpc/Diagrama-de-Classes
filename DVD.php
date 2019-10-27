<?php
class DVD extends Produto
{
	private $titulo;
	private $ano;
	



public function getTitulo(){

	return $this -> titulo;
	}

public function setTitulo($titulo){

	$this -> titulo=$titulo;
	}

public function getano(){

	return $this -> ano;
	}

public function setAno($ano){

	 $this-> ano=$ano;
	}

public function DVD ($titulo, $ano,){

	$this -> setTitulo($titulo);
	$this -> setAno($ano);
	

	}

}	

?>