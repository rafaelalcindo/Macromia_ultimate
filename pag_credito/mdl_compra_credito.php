<?php


function comprarTrintaCredito_banco($conexao, $foto_nome, $foto_id, $credi_val, $credi_des, $credi_status, $credi_modo_pay){

	$credi_nome = "Pacote de 30 créditos";
	$new_id_compra =  criaIdCompraCredito($conexao,$foto_id);
	if($new_id_compra != false){
		//echo "Numero: ".$new_id_compra;
		$resultado_isercao = InserirSoliCredito($conexao, $credi_val, $credi_status,  $credi_modo_pay, $credi_des, $foto_id, $new_id_compra, $credi_nome);
		//echo "<br/>Resutado funcao insert ".$resultado_isercao;
		if($resultado_isercao){
			//echo "<br/>entrou no if";
			$arrayProductCode = ArrayProductCode($foto_id, $new_id_compra);
			return $arrayProductCode;
		}else{
			
		}

		//exit();
    }else{
    	echo "e false";
    }

}



function compraCinquentaCredito_banco($conexao, $foto_nome, $foto_id, $credi_val, $credi_des, $credi_status, $credi_modo_pay){
	$credi_nome = "Pacote de 50 créditos";
	$new_id_compra =  criaIdCompraCredito($conexao,$foto_id);
	if($new_id_compra != false){
		//echo "Numero: ".$new_id_compra;
		$resultado_isercao = InserirSoliCredito($conexao, $credi_val, $credi_status,  $credi_modo_pay, $credi_des, $foto_id, $new_id_compra, $credi_nome);
		//echo "<br/>Resutado funcao insert ".$resultado_isercao;
		if($resultado_isercao){
			//echo "<br/>entrou no if";
			$arrayProductCode = ArrayProductCode($foto_id, $new_id_compra);
			return $arrayProductCode;
		}else{
			
		}

		//exit();
    }else{
    	echo "e false";
    }
}

function compraOintentaCredito_banco($conexao, $foto_nome, $foto_id, $credi_val, $credi_des, $credi_status, $credi_modo_pay){
	$credi_nome = "Pacote de 80 créditos";
	$new_id_compra =  criaIdCompraCredito($conexao,$foto_id);
	if($new_id_compra != false){
		//echo "Numero: ".$new_id_compra;
		$resultado_isercao = InserirSoliCredito($conexao, $credi_val, $credi_status,  $credi_modo_pay, $credi_des, $foto_id, $new_id_compra, $credi_nome);
		//echo "<br/>Resutado funcao insert ".$resultado_isercao;
		if($resultado_isercao){
			//echo "<br/>entrou no if";
			$arrayProductCode = ArrayProductCode($foto_id, $new_id_compra);
			return $arrayProductCode;
		}else{
			
		}

		//exit();
    }else{
    	echo "e false";
    }
}




function compraCreditoAvulso_banco($conexao, $foto_nome, $foto_id, $credi_val, $credi_des, $credi_status, $credi_modo_pay){
	$credi_nome = "Pacote de créditos Avulso";
	$new_id_compra =  criaIdCompraCredito($conexao,$foto_id);
	if($new_id_compra != false){
		//echo "Numero: ".$new_id_compra;
		$resultado_isercao = InserirSoliCredito($conexao, $credi_val, $credi_status,  $credi_modo_pay, $credi_des, $foto_id, $new_id_compra, $credi_nome);
		//echo "<br/>Resutado funcao insert ".$resultado_isercao;
		if($resultado_isercao){
			//echo "<br/>entrou no if";
			$arrayProductCode = ArrayProductCode($foto_id, $new_id_compra);
			return $arrayProductCode;
		}else{
			
		}

		//exit();
    }else{
    	echo "e false";
    }
}














function registrarNotificacaoPag($conexao, $credi_nome, $credi_status, $credi_modo_pay, $credi_val_pago,$credi_desc, $credi_id_compra, $credi_email){

	$verificaCompra = verificaIdCompra($conexao, $credi_id_compra);
	if($verificaCompra){
		$resultadoRegistroPag = RegistrarPagamento($conexao, $credi_nome, $credi_status, $credi_modo_pay, $credi_val_pago, $credi_desc, $credi_id_compra, $credi_email);
		
		$credito_na_conta_array = getCreditosConta($conexao, $credi_id_compra, $credi_val_pago);
		
		$credito_set_newCredito = setCreditosConta($conexao, $credi_id_compra, $credito_na_conta_array);
		
		

		if($resultadoRegistroPag){
			return true;
		}else{
			return false;
		}

	}else{
		return false;
	}

}


function verificaIdCompra($conexao, $credi_id_compra){
	$sql_vericationIdCompra = sprintf("select * from creditos where credi_id_compra = %u ",$credi_id_compra);
	$resultado_buscaIdCompra = mysqli_query($conexao, $sql_vericationIdCompra) or die(mysql_error($conexao)."<br/>".$sql_vericationIdCompra);

	$count_rows = mysqli_num_rows($resultado_buscaIdCompra);
	if($count_rows == 1){
		
		return true;
	}else{
		return false;
	}

}

function RegistrarPagamento($conexao, $credi_nome, $credi_status, $credi_modo_pay, $credi_val_pago, $credi_desc, $credi_id_compra, $credi_email){

	if($credi_status == 1){
		$credi_desc = "Aguardando pagamento: o comprador iniciou a transação, mas até o momento o PagSeguro não recebeu nenhuma informação sobre o pagamento.";
	}else if($credi_status == 2){
		$credi_desc = "Em análise: o comprador optou por pagar com um cartão de crédito e o PagSeguro está analisando o risco da transação.";
	}else if($credi_status == 3){
		$credi_desc = "Paga: a transação foi paga pelo comprador e o PagSeguro já recebeu uma confirmação da instituição financeira responsável pelo processamento.";
	}else if($credi_status == 4){
		$credi_status = "Disponível: a transação foi paga e chegou ao final de seu prazo de liberação sem ter sido retornada e sem que haja nenhuma disputa aberta. ";
	}else if($credi_status == 5){
		$credi_status = "Em disputa: o comprador, dentro do prazo de liberação da transação, abriu uma disputa. ";
	}else if($credi_status == 6){
		$credi_status = "Devolvida: o valor da transação foi devolvido para o comprador. ";
	}else if($credi_status == 7){
		$credi_status = "Cancelada: a transação foi cancelada sem ter sido finalizada. ";
	}

	$credi_modo_pay = ListaOpcoesPagas($credi_modo_pay);

	$sql_update_credito = sprintf("update creditos set credi_status = '%s', credi_modo_pag = '%s', credi_val_pago = '%s', credi_desc = '%s', credi_email = '%s' where credi_id_compra = '%s' ",$credi_status, $credi_modo_pay, $credi_val_pago, $credi_desc, $credi_email, $credi_id_compra);

	$resultado_sql = mysqli_query($conexao, $sql_update_credito) or die(mysql_error($conexao)."<br/>".$sql_update_credito);

	if($resultado_sql){
		return true;
	}else{
		return false;
	}

}

function getCreditosConta($conexao, $credi_id_compra, $credi_val_pago){

	$valor_credi_pago = round($credi_val_pago);

	$sql_get_valorCredi = sprintf("select f.foto_credito as 'credito', f.foto_cod as 'codigo', fhc.creditos_credi_cod as 'cod_credi' from fotografo f, fotografo_historico_creditos fhc, creditos cd where f.foto_cod = fhc.fotografo_foto_cod and fhc.creditos_credi_cod = cd.credi_cod and cd.credi_id_compra = %s",$credi_id_compra);
	$resultado_getCredi = mysqli_query($conexao, $sql_get_valorCredi) or die(mysql_error($conexao)."<br/>".$sql_get_valorCredi);

	if($resultado_getCredi){
		while($row = mysqli_fetch_array($resultado_getCredi)){
			$credi_getValor    = $row['credito'];
			$credi_getfotoCod  = $row['codigo'];
			$credi_getcredCod  = $row['cod_credi'];
		}		

		$array_crediValor = array();
		$array_crediValor[] = $credi_getValor + $valor_credi_pago;
		$array_crediValor[] = $credi_getfotoCod;
		$array_crediValor[] = $credi_getcredCod;

		return $array_crediValor;

	}else{
		echo "<br/>Ocorreu erros no select dos créditos";
		return false;
	}

}

function setCreditosConta($conexao, $credi_id_compra, $novo_valor_array){

	$sql_setCreditoFoto = sprintf("update fotografo f, fotografo_historico_creditos fhc, creditos cd set f.foto_credito = '%s' 
	     where f.foto_cod = fhc.fotografo_foto_cod and fhc.creditos_credi_cod = cd.credi_cod and f.foto_cod = '%s' and fhc.creditos_credi_cod = '%s' and cd.credi_id_compra = '%s'", $novo_valor_array[0], $novo_valor_array[1], $novo_valor_array[2], $credi_id_compra );
	$resultado_setFotoCredi = mysqli_query($conexao, $sql_setCreditoFoto);

	if($resultado_setFotoCredi){
		return true;
	}else{
		return false;
	}

}










/* Helpers of this Page */





function criaIdCompraCredito($conexao ,$id_foto){
	$sql_get_count = sprintf("select count(f.foto_cod) as 'num_soli_compra' from fotografo f, fotografo_historico_creditos fhc 
where f.foto_cod = fhc.fotografo_foto_cod and f.foto_cod = %u ",$id_foto);
	$resultdado_get_count = mysqli_query($conexao, $sql_get_count) or die(mysql_error($conexao)."<br/>".$sql_get_count);

	//echo print_r($resultdado_get_count);

	$count_row = mysqli_num_rows($resultdado_get_count);
	if($count_row == 1){
		while($row = mysqli_fetch_array($resultdado_get_count)){
			$num_soli_compra = $row['num_soli_compra'];
		}
		//echo "<br/> num: ".$num_soli_compra." <br/>";

		if($num_soli_compra == 0 || $num_soli_compra >= 1){
			$num_soli_compra += 1;
			return $num_soli_compra;
		}

		return $num_soli_compra;
	}else{
		return false;
	}

}


function InserirSoliCredito($conexao, $credi_val, $credi_status, $credi_modo_pay, $credi_des, $foto_id, $new_code,$credi_nome){

	$novo_id_compra = GenerateIdCompra($foto_id, $new_code);
	$data_now = GerarDataHoje();
	$hora_now = GerarHoraHoje();


	$sql_soliCredito = sprintf("insert into creditos (credi_val, credi_nome, credi_status, credi_modo_pag, credi_desc, credi_id_compra)
									values
						('%s', '%s','%s', '%s', '%s', '%s')",$credi_val, $credi_nome, $credi_status, $credi_modo_pay, $credi_des, $novo_id_compra);	
	$resultado_sql = mysqli_query($conexao, $sql_soliCredito) or die(mysql_error($conexao)."<br/>".$sql_soliCredito);
	$last_id_soliCredito = mysqli_insert_id($conexao);

	//echo "<br/>Resultado SQL ".print_r($resultado_sql);	


	$sql_relaciona = sprintf("insert into fotografo_historico_creditos (fotografo_foto_cod, creditos_credi_cod, credi_hist_data, credi_hist_hora)
								values 
							('%u','%u','%s','%s')",$foto_id, $last_id_soliCredito,$data_now, $hora_now);
	$resultado_sql_relaciona  = mysqli_query($conexao, $sql_relaciona) or die(mysql_error($conexao)."<br/>".$sql_relaciona);

	//echo "<br/>Resultado SQL_relaciona ".print_r($resultado_sql_relaciona);


	if($resultado_sql){
		if($resultado_sql_relaciona){
			//echo "<br/>entrou true";
			return true;
		}else{ return false; }

	}else{
		return false;
	}
}


function GenerateIdCompra($foto_id,$num_soli_compra){

	$new_id_compra = ($foto_id * 3) * 100 + $num_soli_compra;
	return $new_id_compra;
}

function GerarDataHoje(){
	$data = date("Y-m-d");
	return $data;
}

function GerarHoraHoje(){
	$hora = date("H:i:s");
	return $hora;
}

function ArrayProductCode($foto_id,$newCode){
	$new_codeGenereted = GenerateIdCompra($foto_id,$newCode);
	$arrayCodeProduct = array($new_codeGenereted);
	return $arrayCodeProduct;
}


function ListaOpcoesPagas($credi_modo_pag){

	if($credi_modo_pag == 1){
		return "Cartão de Crédito";
	}else if($credi_modo_pag == 2){
		return "Boleto";
	}else if($credi_modo_pag == 3){
		return "Débito Online (TEF)";
	}else if($credi_modo_pag == 4){
		return "Saldo PagSeguro";
	}else if($credi_modo_pag == 5){
		return "Oi Paggo";
	}else if($credi_modo_pag == 6){
		return "Depósito em conta";
	}

}


