<?php

function inserirEvento($conexao,$event, $cli_id,$data, $hora, $num, $val_min, $val_max, $cidade, $estado, $endereco, $area_obs, $filmagem, $edicao){	
	
	$vagas = (int) 5;
	
	$sql1 = sprintf("insert into evento(`cli_cod`, `servico`, `data`, `hora`, complementar, vagas, filmagem, edicao) VALUES ('%s','%s','%s','%s','%s', '%s','%s','%s')",$cli_id,$event,$data,$hora, $area_obs, $vagas, $filmagem, $edicao);
	$resultado1 = mysqli_query($conexao,$sql1) or die(mysql_error($conexao)."<br/>".$sql1);
	echo "<br/>".print_r($resultado1)." Resultado da Query1";
	$id_evento = mysqli_insert_id($conexao);
	echo "<br/>O Id do evento é: ".$id_evento." <-- <br/>";
		
	echo "<br/> Para Inserir -> ".$cidade." - ".$num." - ".$endereco."  <-- <br/> ";
	$sql2 = sprintf("INSERT INTO localizacao_evento (local_cidade_ev, loca_numero_ev, loca_end_ev, loca_estado_ev,  cod_evento) 
						VALUES ('%s','%s','%s','%s', LAST_INSERT_ID())",$cidade,$num, $endereco, $estado);
	$resultado2 = mysqli_query($conexao, $sql2) or die(mysql_error($conexao)."<br/>".$sql2);;
	echo "<br/>".print_r($resultado2)." Resultado da Query2";
	
	
	$sql3 = sprintf("INSERT INTO orcamento ( `orc_valor_min`, `orc_valor_max`, `cod_evento`) VALUES ( '%s', '%s', '%s' )",$val_min, $val_max,$id_evento);
	$resultado3 = mysqli_query($conexao, $sql3) or die(mysql_error($conexao)."<br/>".$sql3);
	echo "<br/>".print_r($resultado3)." Resultado da Query3";
	
	if($resultado1){
		return $resultado1;
	}else{
		echo "Evento já cadastrado no sistema!";
	}
}

function inserirEventoModo02($conexao, $nome, $cel, $tel = '', $email, $sele_servico, $val_min, $val_max, $area_observa, $data, $estado, $cidade, $area_local){
	$vagas = (int) 5;

	date_default_timezone_set('America/Sao_Paulo');
	$data_cad_evento = date('Y-m-d');

	$sql_evento01 = sprintf("insert into cliente02 (cli_nome, cli_cel, cli_telefone, cli_email) VALUES ('%s','%s','%s','%s')", $nome, $cel, $tel, $email);
	$resultado_evento = mysqli_query($conexao, $sql_evento01) or die(mysql_error($conexao)."<br/>".$sql_evento01);
	$last_id = mysqli_insert_id($conexao);
	
	
	$sql_evento02 = sprintf("insert into evento(cliente02_cli_cod02, servico ,data, complementar, vagas, data_pedi_cad) VALUES ('%s', '%s', '%s', '%s', '%s', '%s') ",$last_id, $sele_servico, $data, $area_observa, $vagas, $data_cad_evento);
	$resultado_evento02 = mysqli_query($conexao, $sql_evento02)  or die(mysql_error($conexao)."<br/>".$sql_evento02);
	$last_id02 = mysqli_insert_id($conexao);
	echo " ultimo id: ".$last_id02."<br/>";

	$sql_evento03 = sprintf("insert into orcamento (orc_valor_min, orc_valor_max, cod_evento ) VALUES ('%s','%s', '%s')",$val_min, $val_max, $last_id02);
	$resultado_evento03 = mysqli_query($conexao, $sql_evento03);

	$sql_evento04 = sprintf("insert into localizacao_evento (local_cidade_ev, loca_estado_ev,  cod_evento) 
						VALUES ('%s','%s', '%s')",$cidade,$estado, $last_id02);
	$resultado0_evento04  = mysqli_query($conexao, $sql_evento04) or die(mysql_error($conexao)."<br/>".$sql_evento04);


	if($resultado_evento){
		if($resultado_evento02){
			if($resultado_evento03){
				return true;
			}else{ return false; }
		}else{return false;}
	}else{ return false; }
}


function getIdCliente($conexao,$email){
	$sql = sprintf("select cli_cod as 'cod' from cliente where cli_email = '%s'",$email);
	$resultado = mysqli_query($conexao, $sql);
	$id_cli = array('cod');
	while($row = mysqli_fetch_array($resultado)){
		$data = array("cod"=>$row['cod']);
	}
	$id_cli['cod'] = $data['cod'];
	return $id_cli['cod'];
}

function gcm_code_foto($conexao, $servico){
	//echo "Serviços: ".$servico."<br/>";
	$servicos_completo = ServicosAcentos($servico);
	$sql_gcm   = sprintf("select foto_gcm from fotografo f, especialidades esp where f.foto_cod = esp.foto_cod and foto_gcm != '' 
and foto_gcm is not null and foto_gcm != 'null' and esp.especi_tipo = '%s' ",$servicos_completo);
	
	$resultado = mysqli_query($conexao, $sql_gcm) or die (mysql_error($conexao)."<br/>".$sql_gcm);

	echo " val array: ".print_r($resultado)."<br/>";
	if($resultado){
		return $resultado;
	}else{
		return false;
	}
}






function ServicosAcentos($servico){
	if($servico == 'Artístico'){
		$servi_return = 'Artistico';
		return $servi_return;
	}else if($servico == 'Nú Artístico'){
		$servi_return = 'Nu Artistico';
		return $servi_return;
	}else if($servico == 'Médico'){
		$servi_return = 'Medico';
		return $servi_return;
	}else if($servico == 'Odontológico'){
		$servi_return = 'Odontologico';
		return $servi_return;
	}else if($servico == 'Aéreas'){
		$servi_return = 'Aereas';
		return $servi_return;
	}else if($servico == 'Jornalístico'){
		$servi_return = 'Jornalistico';
		return $servi_return;
	}else{
		return $servico;
	}

}


