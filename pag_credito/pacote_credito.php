<?php
header('Content-Type: text/html; charset=utf-8');
require('../connection.php');
$conexao = mysqli_connect($db_host,$db_user, $db_pass,$db_name);

if(mysqli_connect_errno($conexao)){
	echo "Falha na conexão com banco de dados!";
	exit();
}else{
	
}
	

require('controller.php');







if(isset($_GET['pacote_credito'])){
	$pacote_credito = $_GET['pacote_credito'];
}else{
	$pacote_credito = null;
}


switch ($pacote_credito) {
	case '30':
		compraTrintaCredito($conexao);
	break;

	case '50':
		compraCinquentaCredito($conexao);
	break;

	case '80':
		compraOintentaCredito($conexao);
	break;
	
	default:
		compraCreditoAvulso($conexao);
	break;
}

mysqli_close($conexao);





function compraTrintaCredito($conexao){
	 (isset($_GET['foto_nome']))?    $foto_nome    = $_GET['foto_nome']    : $foto_nome = null;
	 (isset($_GET['foto_email']))?   $foto_email   = $_GET['foto_email']   : $foto_email = null;
	 (isset($_GET['foto_credito']))? $foto_credito = $_GET['foto_credito'] : $foto_credito = null;
	 (isset($_GET['foto_id']))?      $foto_id 	   = $_GET['foto_id']	   : $foto_id = null;

	 if($foto_nome != null && $foto_email != null && $foto_credito != null && $foto_id != null){
	 	RegistroCompraTrinta($conexao,$foto_nome, $foto_email, $foto_credito, $foto_id);
	 }// fim do if filtro de fotografo.

}

function compraCinquentaCredito($conexao){
	
	(isset($_GET['foto_nome']))?    $foto_nome    = $_GET['foto_nome'] : $foto_nome = null;
	(isset($_GET['foto_email']))?   $foto_email   = $_GET['foto_email'] : $foto_email = null;
	(isset($_GET['foto_credito']))? $foto_credito = $_GET['foto_credito'] : $foto_credito = null;
	(isset($_GET['foto_id']))?      $foto_id 	  = $_GET['foto_id'] : $foto_id = null;


	if($foto_nome != null && $foto_email != null && $foto_credito != null && $foto_id != null){
	 	RegistroCompraCinquenta($conexao,$foto_nome, $foto_email, $foto_credito, $foto_id);
	 }

}

function compraOintentaCredito($conexao){

	(isset($_GET['foto_nome']))?    $foto_nome    = $_GET['foto_nome'] : $foto_nome = null;
	(isset($_GET['foto_email']))?   $foto_email   = $_GET['foto_email'] : $foto_email = null;
	(isset($_GET['foto_credito']))? $foto_credito = $_GET['foto_credito'] : $foto_credito = null;
	(isset($_GET['foto_id']))?      $foto_id 	  = $_GET['foto_id'] : $foto_id = null;

	if($foto_nome != null && $foto_email != null && $foto_credito != null && $foto_id != null){
	 	RegistroCompraOintenta($conexao,$foto_nome, $foto_email, $foto_credito, $foto_id);
	 }		

}

function compraCreditoAvulso($conexao){
	(isset($_GET['foto_nome']))?     $foto_nome    		 = $_GET['foto_nome'] : $foto_nome = null;
	(isset($_GET['foto_email']))?    $foto_email   		 = $_GET['foto_email'] : $foto_email = null;
	(isset($_GET['foto_credito']))?  $foto_credito 		 = $_GET['foto_credito'] : $foto_credito = null;
	(isset($_GET['foto_id']))?       $foto_id 	   		 = $_GET['foto_id'] : $foto_id = null;
	(isset($_GET['quant_credito']))? $foto_credi_avulso  = $_GET['quant_credito'] : $foto_credi_avulso = null;

	if($foto_nome != null && $foto_email != null && $foto_credito != null && $foto_id != null){
	 	RegistroCreditoAvulso($conexao,$foto_nome, $foto_email, $foto_credito, $foto_id, $foto_credi_avulso);
	 }
}












/*   Helpers of this page   */









