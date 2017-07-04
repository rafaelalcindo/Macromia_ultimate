<?php

	
	
require('mdl_compra_credito.php');
	

	

	function RegistroCompraTrinta($conexao, $foto_nome, $foto_email, $foto_credito, $foto_id){
		//ini_set('default_charset','UTF-8');
		//header("Content-Type: text/html; charset=ISO-8859-1", true);

		$credi_val = 29.99;
		$credi_desc = "30 créditos";
		$credi_status = "espera";
		$credi_modo_pay = "indefinido";

		$resultado = comprarTrintaCredito_banco($conexao, $foto_nome, $foto_id, $credi_val, $credi_desc, $credi_status, $credi_modo_pay);

		//echo "<br/><br/> Resultado Final do processo: ".$resultado[0]." <br/>";
		echo "Mostra a descricão acento : ".$credi_desc;
		echo "<br/>	em utf 8: ".utf8_encode($credi_desc);

		CompraViaPagSeguro($credi_val, $credi_desc, $resultado[0]);
		
	}

	function RegistroCompraCinquenta($conexao, $foto_nome, $foto_email, $foto_credito, $foto_id){

		echo "entrou controller";

		$credi_val = 49.99;
		$credi_desc = "50 créditos";
		$credi_status = "espera";
		$credi_modo_pay = "indefinido";

		$resultado = compraCinquentaCredito_banco($conexao, $foto_nome, $foto_id, $credi_val, $credi_desc, $credi_status, $credi_modo_pay);
		CompraViaPagSeguro($credi_val, $credi_desc, $resultado[0]);
	}


	function RegistroCompraOintenta($conexao, $foto_nome, $foto_email, $foto_credito, $foto_id){

		$credi_val = 79.99;
		$credi_desc = "80 créditos";
		$credi_status = "espera";
		$credi_modo_pay = "indefinido";

		$resultado = compraOintentaCredito_banco($conexao, $foto_nome, $foto_id, $credi_val, $credi_desc, $credi_status, $credi_modo_pay);
		CompraViaPagSeguro($credi_val, $credi_desc, $resultado[0]);
	}



	function RegistroCreditoAvulso($conexao, $foto_nome, $foto_email, $foto_credito, $foto_id, $valor_credito){
		$credi_val = number_format($valor_credito,2);
		$credi_desc =  print_r($valor_credito,true)." créditos";
		$credi_status = "espera";
		$credi_modo_pay = "indefinido";

		echo " valor: ".$credi_val."<br/>";
		echo " valor_desc: ".$credi_desc."<br/>";
		

		$resultado = compraCreditoAvulso_banco($conexao, $foto_nome, $foto_id, $credi_val, $credi_desc, $credi_status, $credi_modo_pay);
		CompraViaPagSeguro($credi_val, $credi_desc, $resultado[0]);


	}




	function RegistroPagamentoPagSeguro($conexao, $credi_nome, $credi_status, $credi_modo_pay, $credi_val_pago, $credi_desc, $credi_id_compra, $credi_email){

		$resuRegistro = registrarNotificacaoPag($conexao, $credi_nome,$credi_status, $credi_modo_pay, $credi_val_pago, $credi_desc, $credi_id_compra, $credi_email);

		if($resuRegistro){
			echo "<br/>Deu certo!";
		}else{
			echo "Deu errado!";
		}

		mysqli_close($conexao);

	}















	// Compra Crédito PagSeguro


function CompraViaPagSeguro($credi_val, $credi_desc, $id_compra){

	header("Content-Type: text/html; charset=utf-8");

	
	echo "<br/> ".mb_detect_encoding($credi_desc, "auto")."<br/>";
	echo "<br/>Now with decode: ".utf8_decode($credi_desc)."<br/>";

	$data['token'] = "E547BB2BFAEE40E1AB6998BD39A5A208";
	$data['email'] = "pagamento@mazy.com.br";
	$data['currency'] = "BRL";
	$data['itemId1'] = $id_compra;
	$data['itemQuantity1'] = "1";
	$data['itemDescription1'] = utf8_decode($credi_desc);
	$data['itemAmount1'] = $credi_val;
	$data['encoding'] = "UTF-8";

	$url = "https://ws.sandbox.pagseguro.uol.com.br/v2/checkout";

	$data = http_build_query($data);

	$curl = curl_init($url);

	curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
	curl_setopt($curl, CURLOPT_POST, true);
	curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
	curl_setopt($curl, CURLOPT_HTTP_VERSION, CURL_HTTP_VERSION_1_1);

	$xml = curl_exec($curl);

	curl_close($curl);

	$xml = simplexml_load_string($xml);
	echo $xml -> code;

	header("Location: https://sandbox.pagseguro.uol.com.br/v2/checkout/payment.html?code=".$xml->code." ");

}

