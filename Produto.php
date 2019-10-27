<?php

abstract class Produto
{
	private $codigo;
	private $preco;



public function getcodigo(){

	return $this -> codigo;
	}

public function setCodigo($codigo){

	$this -> codigo=$codigo;
	}

public function getPreco(){

	return $this -> preco;
	}

public function setPreco($preco){

	 $this-> preco=$preco;
	
	}


public function Produto($codigo, $preco,){

	$this -> setCodigo($codigo);
	$this -> setPreco($preco);
	

	}


}




?>
