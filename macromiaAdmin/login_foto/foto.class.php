<?php

class Foto{
	
	protected $foto_cod;
	protected $foto_ident;
	protected $foto_num_cartao;
	protected $foto_img_perf;
	protected $cod_rank;
	
	function getFotoIdent(){ return $this->foto_ident; }	
	function setFotoIdent($foto_ident){	$this->foto_ident = $foto_ident; }	
	function getFotoNumCartao(){ return $this->foto_num_cartao;	}	
	function setFotoNumCartao($foto_num_cartao){ $this->foto_num_cartao = $foto_num_cartao; }	
	function getFotoImgPerf(){ return $this->foto_img_perf; }	
	function setFotoImgPerf($foto_img_perf){ return $this->foto_img_perf = $foto_img_perf; }	
	function getCodRank(){return $this->cod_rank;}	
	function setCodRank($cod_rank){ $this->cod_rank = $cod_rank; }
	
}