<?php

function inserirEvento($conexao,$event, $cli_id,$data, $hora, $cep,$num, $val_mi, $val_max, $cidade, $estado, $endereco){	
	
	$vagas = (int) 5;
		 
	$sql1 = sprintf("insert into evento(`cli_cod`, `servico`, `data`, `hora`, vagas) VALUES ('%s','%s','%s','%s','%s')",$cli_id,$event,$data,$hora, $vagas);
	$resultado1 = mysqli_query($conexao,$sql1) or die(mysql_error($conexao)."<br/>".$sql1);
	echo "<br/>".print_r($resultado1)." Resultado da Query1";
	$id_evento = mysqli_insert_id($conexao);
	echo "<br/>O Id do evento é: ".$id_evento." <-- <br/>";
		
	echo "<br/> Para Inserir -> ".$cidade." - ".$num." - ".$endereco." - ".$cep." <-- <br/> ";
	$sql2 = sprintf("INSERT INTO localizacao_evento (local_cidade_ev, loca_numero_ev, loca_end_ev, loca_estado_ev, loca_cep_ev, cod_evento) 
						VALUES ('%s','%s','%s','%s','%s',LAST_INSERT_ID())",$cidade,$num, $endereco, $estado, $cep);
	$resultado2 = mysqli_query($conexao, $sql2) or die(mysql_error($conexao)."<br/>".$sql2);;
	echo "<br/>".print_r($resultado2)." Resultado da Query2";
	
	$sql3 = sprintf("INSERT INTO orcamento ( `orc_valor_min`, `orc_valor_max`, `cod_evento`) VALUES ( '%s', '%s', '%s' )",$val_mi, $val_max,$id_evento);
	$resultado3 = mysqli_query($conexao, $sql3) or die(mysql_error($conexao)."<br/>".$sql3);
	echo "<br/>".print_r($resultado3)." Resultado da Query3";
	
	if($resultado1){
		return $resultado1;
	}else{
		echo "Evento já cadastrado no sistema!";
	}
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