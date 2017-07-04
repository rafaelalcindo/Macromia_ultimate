<?php

function logar_admin($conexao, $usuario, $senha){
	$sql = sprintf("select admin_login as 'login', admin_senha as 'senha', admin_nivel as 'nivel', admin_dep as 'dep' 
						from admin where admin_login = '%s' and admin_senha = '%s' ", $usuario, $senha);
	$resultado = mysqli_query($conexao, $sql);
	$count     = mysqli_num_rows($resultado);
	if($count == 1){
		return $resultado;
	}else{
		return false;
	}
}


// functions Helpers

function quanti_cliente($conexao){
	$sql = sprintf("select count(cli_cod) as 'quant_cli' from cliente");
	$resultado = mysqli_query($conexao, $sql);
	$count = mysqli_num_rows($resultado);
	if($count == 1){
		return $resultado;
	}else{
		return false;
	}
}

function quanti_Pedido($conexao){
	$sql = sprintf("select count(cod_evento) as 'cod_event' from evento");
	$resultado = mysqli_query($conexao, $sql);
	$count = mysqli_num_rows($resultado);
	if($count == 1){
		return $resultado;
	}else{
		return false;
	}
}

function listar_cliente($conexao,$start,$limite = 5){
	$sql = sprintf("select cli.cli_cod as 'codigo', cli.cli_nome as 'nome', cli.cli_email as 'email', count(eve.cli_cod) as 'quant_pedido' from cliente cli, evento eve where cli.cli_cod = eve.cli_cod group by eve.cli_cod limit %u, %u",$start,$limite);
	$resultado = mysqli_query($conexao, $sql);
	$count = mysqli_num_rows($resultado);
	if($count > 0){
		return $resultado;
	}else{
		return false;
	}
}

function lista_cliente_count($conexao, $limite = 5){
	$sql = sprintf("select cli.cli_cod as 'codigo', cli.cli_nome as 'nome', cli.cli_email as 'email', count(eve.cli_cod) as 'quant_pedido' from cliente cli, evento eve where cli.cli_cod = eve.cli_cod group by eve.cli_cod");
	$resultado_count = mysqli_query($conexao, $sql);
	// pega os valores em array
	$fetch 			 = mysqli_num_rows($resultado_count);
	//echo "<br/>resultado do mysqli_fetch_assoc: ".print_r($fetch)."<br/>";
	// conta a quantidade de linha de arrays e mostra em numeros
	//$resu_fetch		 = array_shift($fetch);
	//echo "<br/>resultado do array_shift: ".$resu_fetch." <br/>";	
	$sql_resul		 = ceil($fetch / $limite);
	//echo "aqui estÃ¡ o valor do sql_resul: ".$sql_resul." <br/>";
	//exit;
	if($sql_resul >= 0){
		return $sql_resul;
	}else{ echo "Error. "; }
}

function listar_cliente02($conexao, $search="",$start ,$limite = 5){
	$sql2 = sprintf("select cli.cli_cod as 'codigo', cli.cli_nome as 'nome', cli.cli_email as 'email', count(eve.cli_cod) as 'quant_pedido' from cliente cli, evento eve where cli.cli_cod = eve.cli_cod and cli.cli_nome like '%%%s%%'   group by eve.cli_cod limit %u, %u",mysqli_real_escape_string($conexao, $search),$start,$limite);
	$resultado = mysqli_query($conexao, $sql2);
	$count 	= mysqli_num_rows($resultado);
	if($count > 0){
		return $resultado;
	}else{
		return false;
	}
}

function listar_cliente02_count($conexao, $search="", $limite = 5){
	$sql2 = sprintf("select cli.cli_cod as 'codigo', cli.cli_nome as 'nome', cli.cli_email as 'email', count(eve.cli_cod) as 'quant_pedido' from cliente cli, evento eve where cli.cli_cod = eve.cli_cod and cli.cli_nome like '%%%s%%'   group by eve.cli_cod",mysqli_real_escape_string($conexao, $search));
	$resultado02_count = mysqli_query($conexao, $sql2);
	$count 			   = mysqli_num_rows($resultado02_count);
	$sql_result = ceil($count / $limite);
	if($sql_result >= 0){
		return $sql_result;
	}else{ echo "Error. ";	 }
}

