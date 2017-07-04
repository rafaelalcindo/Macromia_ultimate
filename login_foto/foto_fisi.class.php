<?php

class Foto_fisi extends Foto{
	
	private $nome;
	private $email;
	private $senha;
	private $tel;
	private $cel;
	private $cpf;

	
	function getNome(){ return $this->nome; }	
	function setNome($nome){ $this->nome = $nome; }	
	function getEmail(){ return $this->email; }	
	function setEmail($email){ $this->email = $email; }	 
	function getSenha(){ return $this->senha; }	
	function setSenha($senha){ $this->senha = $senha; }	
	function getTel(){ return $this->tel; }	
	function setTel($tel){ $this->tel = $tel; }	
	function getCel(){ return $this->cel;}	
	function setCel($cel){ $this->cel = $cel; }	
	function getCpf(){ return $this->cpf; }	
	function setCpf($cpf){ $this->cpf = $cpf; }	
	
}