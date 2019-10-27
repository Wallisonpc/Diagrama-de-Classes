<?php
 class Leite extends Produto implements Perecivel
{
	private $marca;
	private $volume;
	private $dataValidade;
	


public function getMarca(){

	return $this -> marca;
	}

public function setMarca($marca){

	$this -> nome=$name;
	}

public function getVolume(){

	return $this -> volume;
	}

public function setVolume($volume){

	 $this-> volume=$volume;
	}

public function getDataValidade(){

	return $this -> dataValidade;

	}

public function setDataValidade($dataValidade){

	$this -> dataValidade=$dataValidade;

	}

public function Leite($marca, $volume, $validade){

	$this -> setMarca($marca);
	$this -> setVolume($volume);
	$this -> setDataValidade($dataValidade);

	}

public function estaVencido(){


	}

}

?>