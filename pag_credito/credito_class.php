<?php

/**
* 
*/
class Credito 
{

	var $credi_val;
	var $credi_val;
	var $credi_nome;
	var $credi_status;
	var $credi_modo_pay;
	var $credi_desc;
	var $credi_id_compra;
	var $credi_email;
	
	
	function __construct()
	{
		
	}

	function setCrediCod($credi_val){
		$this->credi_val = $credi_val;
	}

	function getCrediCod(){
		return $this->credi_val;
	}


}