<?php
require('cadaPedido02.php');
function preencheLista($nome, $email, $telefone, $celular, $codigo,$data,  $servico, $vagas, $val_min, $val_max, $estado, $cidade, $id_foto, $credi_foto, $id_lista, $pg, $complementar){
	@header ('Content-type: text/html; charset=utf-8');

	
	$creditos = varificaPontos($val_min, $val_max);
	$verEventFoto = verificaContatoComprado($codigo,$id_foto);
	// formatando data...
	$dataMod = DateTime::createFromFormat('Y-m-d',$data);
    $data = $dataMod->format('d/m/Y');
	if($verEventFoto == true){	
	 /*	echo "
			<tr id='tb_lista'>
			  <td>
				<blockquote id='bloco' class='lista_pedido".$id_lista."' >
				  <p><label>Nome:</label> ".utf8_encode($nome)."   <label>Email:</label> ". utf8_encode($email)."  </p>
				  <p><label>Celular: </label> ".$celular."   <label>Serviços:</label> ". utf8_encode($servico)."   <label>Estado</label> ". utf8_encode($estado)." <label>Cidade</label> ".utf8_encode($cidade)."<label>ID: do Fotografo</label>".$id_foto."</p>
				  <p><label>Telefone:</label> ".$telefone."   <label>Endereço:</label> ".utf8_encode($endereco)."   <label>Cep:</label>".$cep." <label>Data</label> ".$data."  <input type='hidden' value=".$codigo." id='id_evento'/> <input type='hidden'  value=".$pg."/> </p> 
				  <p><label>Hora</label> ".$hora." <label>Valor Minimo</label> ".$val_min."  <label>Valor Maximo</label> ".$val_max."<label>Créditos:</label>".$creditos."  &nbsp;&nbsp;&nbsp; <a href='#' class='btn btn-success btn-lg disabled' role='button'>Contato Adiquirido com Sucesso!</a> &nbsp;&nbsp;&nbsp; <label>Vagas: </label><span id='vagas'> ".$vagas."</span></p>       
				 </blockquote>
			  <td>
			</tr>
		"; */
		$listagemPedidos = PedidosComprado($nome, $email,$telefone,$celular,$codigo,$data,$servico,$vagas,$val_min,$val_max,$estado,$cidade,$id_foto,$id_lista,$pg,$creditos, $complementar);
		echo $listagemPedidos;
	}else{
		/*echo "
			<tr id='tb_lista'>
			  <td>
				<blockquote id='bloco' class='lista_pedido".$id_lista."' >
				  <p><label>Nome:</label> ************** <label>Email:</label> ********  </p>
				  <p><label>Celular: </label> (**)*****-****  <label>Serviços:</label> *********   <label>Estado</label> ". utf8_encode($estado)." <label>Cidade</label> ". utf8_encode($cidade)."<label>ID: do Fotografo</label>".$id_foto."</p>
				  <p><label>Telefone:</label> (**)****-****   <label>Endereço:</label> *******************   <label>Cep:</label>*********** <label>Data</label> ".$data."  <input type='hidden' value=".$codigo." id='id_evento'/> <input type='hidden'  value=".$pg."/></p> 
				  <p><label>Hora</label> ".$hora." <label>Valor Minimo</label> ".$val_min."  <label>Valor Maximo</label> ".$val_max."<label>Créditos:</label>".$creditos."  &nbsp;&nbsp;&nbsp; <a href='login_foto/filtro_pedido/funcao_foto.php?id_evento=".$codigo."&id_foto=".$id_foto."&credi_foto=".$credi_foto."&credi_event=".$creditos."&vagas=".$vagas."' class='btn btn-primary'>Comprar contato</a> &nbsp;&nbsp;&nbsp; <label>Vagas: </label><span id='vagas'> ".$vagas."</span></p>       
				  <button class='btn btn-primary btn-teste' id='lista".$id_lista."' onclick='comprar_listagem(".$codigo.", ".$creditos.", ".$vagas.", ".$pg.")' >testeee</button>
				 </blockquote>
			  <td>
			</tr>	  
		";*/

		$listagemPedidos02 = MostrarPedidos($estado,$cidade,$id_foto,$data,$codigo,$val_min,$val_max,$creditos,$credi_foto,$vagas,$pg,$complementar, $servico);
		echo $listagemPedidos02;
	}
}


function lista_cli_opt01($conexao,$servico,$estado,$cidade, $start, $limite = 5,$orc_min, $orc_max, $ordenar, $id_foto){
		//echo "<br/> id_estado: ".$estado." id_cidade: ".$cidade;

		if($orc_min > 0 && $orc_max > 0){
			if($ordenar == 'DESC'){
				$sql = sprintf("
					select 
					cli.cli_nome as 'nome', cli.cli_email as 'email', cli.cli_telefone as 'Telefone', cli.cli_cel as 'Celular',
					ev.complementar as 'complementar', ev.cod_evento as 'codigo', ev.data as 'data', ev.servico as 'Servico', ev.vagas as 'vagas',
					orc.orc_valor_min as 'val_min', orc.orc_valor_max as 'val_max', es.uf as 'estado', cid.nome as 'cidade', es.id as 'id_estado', cid.id as 'id_nome'

					from cliente02 cli, evento ev, localizacao_evento le, orcamento orc, estado es, cidade cid, atende ate, fotografo foto
					where cli.cli_cod02 = ev.cliente02_cli_cod02 and ev.cod_evento = le.cod_evento
					and orc.cod_evento = ev.cod_evento
					and le.loca_estado_ev = es.id
					and cid.id =  le.local_cidade_ev
					and ev.cod_evento = ate.cod_evento
					and foto.foto_cod = ate.foto_cod
					and foto.foto_cod = '%s'
					and orc.orc_valor_min >= '%s' and orc.orc_valor_max <= '%s'
				and ev.servico like '%s' and es.id = '%s' and cid.id = '%s' ORDER BY ev.cod_evento DESC limit %u, %u",$id_foto,$orc_min, $orc_max,$servico,$estado,$cidade,$start,$limite);
			}else{
				$sql = sprintf("
					select 
					cli.cli_nome as 'nome', cli.cli_email as 'email', cli.cli_telefone as 'Telefone', cli.cli_cel as 'Celular',
					ev.complementar as 'complementar', ev.cod_evento as 'codigo', ev.data as 'data', ev.servico as 'Servico', ev.vagas as 'vagas',
					orc.orc_valor_min as 'val_min', orc.orc_valor_max as 'val_max', es.uf as 'estado', cid.nome as 'cidade', es.id as 'id_estado', cid.id as 'id_nome'

					from cliente02 cli, evento ev, localizacao_evento le, orcamento orc, estado es, cidade cid, atende ate, fotografo foto
					where cli.cli_cod02 = ev.cliente02_cli_cod02 and ev.cod_evento = le.cod_evento
					and orc.cod_evento = ev.cod_evento
					and le.loca_estado_ev = es.id
					and cid.id =  le.local_cidade_ev
					and ev.cod_evento = ate.cod_evento
					and foto.foto_cod = ate.foto_cod
					and foto.foto_cod = '%s'
					and orc.orc_valor_min >= '%s' and orc.orc_valor_max <= '%s'
				and ev.servico like '%s' and es.id = '%s' and cid.id = '%s' ORDER BY ev.cod_evento ASC limit %u, %u",$id_foto,$orc_min, $orc_max,$servico,$estado,$cidade,$start,$limite);
			}
			
		}else{
			if($ordenar == 'DESC'){
				$sql = sprintf("
					select 
					cli.cli_nome as 'nome', cli.cli_email as 'email', cli.cli_telefone as 'Telefone', cli.cli_cel as 'Celular',
					ev.complementar as 'complementar', ev.cod_evento as 'codigo', ev.data as 'data', ev.servico as 'Servico', ev.vagas as 'vagas',
					orc.orc_valor_min as 'val_min', orc.orc_valor_max as 'val_max', es.uf as 'estado', cid.nome as 'cidade', es.id as 'id_estado', cid.id as 'id_nome'

					from cliente02 cli, evento ev, localizacao_evento le, orcamento orc, estado es, cidade cid, atende ate, fotografo foto
					where cli.cli_cod02 = ev.cliente02_cli_cod02 and ev.cod_evento = le.cod_evento
					and orc.cod_evento = ev.cod_evento
					and le.loca_estado_ev = es.id
					and cid.id =  le.local_cidade_ev
					and ev.cod_evento = ate.cod_evento
					and foto.foto_cod = ate.foto_cod
					and foto.foto_cod = '%s'
				and ev.servico like '%s' and es.id = '%s' and cid.id = '%s' ORDER BY ev.cod_evento DESC limit %u, %u",$id_foto,$servico,$estado,$cidade,$start,$limite);	
			}else{
				$sql = sprintf("
					select 
					cli.cli_nome as 'nome', cli.cli_email as 'email', cli.cli_telefone as 'Telefone', cli.cli_cel as 'Celular',
					ev.complementar as 'complementar', ev.cod_evento as 'codigo', ev.data as 'data', ev.servico as 'Servico', ev.vagas as 'vagas',
					orc.orc_valor_min as 'val_min', orc.orc_valor_max as 'val_max', es.uf as 'estado', cid.nome as 'cidade', es.id as 'id_estado', cid.id as 'id_nome'

					from cliente02 cli, evento ev, localizacao_evento le, orcamento orc, estado es, cidade cid, atende ate, fotografo foto
					where cli.cli_cod02 = ev.cliente02_cli_cod02 and ev.cod_evento = le.cod_evento
					and orc.cod_evento = ev.cod_evento
					and le.loca_estado_ev = es.id
					and cid.id =  le.local_cidade_ev
					and ev.cod_evento = ate.cod_evento
					and foto.foto_cod = ate.foto_cod
					and foto.foto_cod = '%s'
				and ev.servico like '%s' and es.id = '%s' and cid.id = '%s' ORDER BY ev.cod_evento ASC limit %u, %u",$id_foto,$servico,$estado,$cidade,$start,$limite);
			}
					
		}

		
		$resultado = mysqli_query($conexao,$sql) or die(mysql_error($conexao)."<br/>".$sql);
		//echo "<br/> Perf_Foto: ".print_r($resultado)." <br/>";
		$count = mysqli_num_rows($resultado);
		if($count >= 1){
		//	echo "<br/> Entrou no count<br/>";
			return $resultado;
		}else{
			//echo "Falha em localizar o perfil ";
			return false; 
		}
}

function lista_cli_opt01_count($conexao, $servico, $estado, $cidade, $limite = 5,$orc_min, $orc_max, $id_foto){

	if($orc_min > 0 && $orc_max > 0){
		$sql_count = sprintf("
					select count(ev.cod_evento) 
					from cliente02 cli, evento ev, localizacao_evento le, orcamento orc, estado es, cidade cid, fotografo foto, atende ate
					where cli.cli_cod02 = ev.cliente02_cli_cod02 and ev.cod_evento = le.cod_evento 
					and orc.cod_evento = ev.cod_evento
					and le.loca_estado_ev = es.id
					and cid.id =  le.local_cidade_ev
					and ev.cod_evento = ate.cod_evento
					and foto.foto_cod = ate.foto_cod
					and foto.foto_cod = '%s'
					and orc.orc_valor_min >= '%s' and orc.orc_valor_max <= '%s'
					and ev.servico like '%s'      and es.id = '%s' and cid.id = '%s'",$id_foto,$orc_min,$orc_max,$servico, $estado, $cidade);
	}else{
		$sql_count = sprintf("
					select count(ev.cod_evento) 
					from cliente02 cli, evento ev, localizacao_evento le, orcamento orc, estado es, cidade cid, fotografo foto, atende ate
					where cli.cli_cod02 = ev.cliente02_cli_cod02 and ev.cod_evento = le.cod_evento 
					and orc.cod_evento = ev.cod_evento
					and le.loca_estado_ev = es.id
					and cid.id =  le.local_cidade_ev
					and ev.cod_evento = ate.cod_evento
					and foto.foto_cod = ate.foto_cod
					and foto.foto_cod = '%s'
					and ev.servico like '%s' and es.id = '%s' and cid.id = '%s'",$id_foto,$servico, $estado, $cidade);
	}


	$resultado_count = mysqli_query($conexao, $sql_count);
	$fetch 			 = mysqli_fetch_assoc($resultado_count);
	$resul_fetch 	 = array_shift($fetch);
	
	$sql_resul = array_shift($fetch);
	if($sql_resul >= 0){
		return $sql_resul;
	}else{ echo "Error. "; }
}

function lista_cli_opt02($conexao, $servico, $estado, $start, $limite = 5, $orc_min, $orc_max, $ordenar, $id_foto){

	if($orc_min > 0 && $orc_max > 0){
		if($ordenar == 'DESC'){
			$sql = sprintf("
					select 
					cli.cli_nome as 'nome', cli.cli_email as 'email', cli.cli_telefone as 'Telefone', cli.cli_cel as 'Celular',
					ev.complementar as 'complementar', ev.cod_evento as 'codigo', ev.data as 'data', ev.servico as 'Servico', ev.vagas as 'vagas',
					orc.orc_valor_min as 'val_min', orc.orc_valor_max as 'val_max', es.uf as 'estado', cid.nome as 'cidade', es.id as 'id_estado', cid.id as 'id_nome'

					from cliente02 cli, evento ev, localizacao_evento le, orcamento orc, estado es, cidade cid, atende ate, fotografo foto
					where cli.cli_cod02 = ev.cliente02_cli_cod02 and ev.cod_evento = le.cod_evento
					and orc.cod_evento = ev.cod_evento
					and le.loca_estado_ev = es.id
					and cid.id =  le.local_cidade_ev
					and ev.cod_evento = ate.cod_evento
					and foto.foto_cod = ate.foto_cod
					and foto.foto_cod = '%s'
					and orc.orc_valor_min >= '%s' and orc.orc_valor_max <= '%s'
					and ev.servico like '%s' and es.id = '%s' ORDER BY ev.cod_evento DESC limit %u, %u",$id_foto,$orc_min,$orc_max,$servico,$estado, $start, $limite);
		}else{
			$sql = sprintf("
					select 
					cli.cli_nome as 'nome', cli.cli_email as 'email', cli.cli_telefone as 'Telefone', cli.cli_cel as 'Celular',
					ev.complementar as 'complementar', ev.cod_evento as 'codigo', ev.data as 'data', ev.servico as 'Servico', ev.vagas as 'vagas',
					orc.orc_valor_min as 'val_min', orc.orc_valor_max as 'val_max', es.uf as 'estado', cid.nome as 'cidade', es.id as 'id_estado', cid.id as 'id_nome'

					from cliente02 cli, evento ev, localizacao_evento le, orcamento orc, estado es, cidade cid, atende ate, fotografo foto
					where cli.cli_cod02 = ev.cliente02_cli_cod02 and ev.cod_evento = le.cod_evento
					and orc.cod_evento = ev.cod_evento
					and le.loca_estado_ev = es.id
					and cid.id =  le.local_cidade_ev
					and ev.cod_evento = ate.cod_evento
					and foto.foto_cod = ate.foto_cod
					and foto.foto_cod = '%s'
					and orc.orc_valor_min >= '%s' and orc.orc_valor_max <= '%s'
					and ev.servico like '%s' and es.id = '%s' ORDER BY ev.cod_evento ASC limit %u, %u",$id_foto,$orc_min,$orc_max,$servico,$estado, $start, $limite);
		}
	}else{
		if($ordenar == 'DESC'){
			$sql = sprintf("
					select 
					cli.cli_nome as 'nome', cli.cli_email as 'email', cli.cli_telefone as 'Telefone', cli.cli_cel as 'Celular',
					ev.complementar as 'complementar', ev.cod_evento as 'codigo', ev.data as 'data', ev.servico as 'Servico', ev.vagas as 'vagas',
					orc.orc_valor_min as 'val_min', orc.orc_valor_max as 'val_max', es.uf as 'estado', cid.nome as 'cidade', es.id as 'id_estado', cid.id as 'id_nome'

					from cliente02 cli, evento ev, localizacao_evento le, orcamento orc, estado es, cidade cid, atende ate, fotografo foto
					where cli.cli_cod02 = ev.cliente02_cli_cod02 and ev.cod_evento = le.cod_evento
					and orc.cod_evento = ev.cod_evento
					and le.loca_estado_ev = es.id
					and cid.id =  le.local_cidade_ev
					and ev.cod_evento = ate.cod_evento
					and foto.foto_cod = ate.foto_cod
					and foto.foto_cod = '%s'
				and ev.servico like '%s' and es.id = '%s' ORDER BY ev.cod_evento DESC limit %u, %u", $id_foto,$servico,$estado, $start, $limite);
		}else{
			$sql = sprintf("
					select 
					cli.cli_nome as 'nome', cli.cli_email as 'email', cli.cli_telefone as 'Telefone', cli.cli_cel as 'Celular',
					ev.complementar as 'complementar', ev.cod_evento as 'codigo', ev.data as 'data', ev.servico as 'Servico', ev.vagas as 'vagas',
					orc.orc_valor_min as 'val_min', orc.orc_valor_max as 'val_max', es.uf as 'estado', cid.nome as 'cidade', es.id as 'id_estado', cid.id as 'id_nome'

					from cliente02 cli, evento ev, localizacao_evento le, orcamento orc, estado es, cidade cid, atende ate, fotografo foto
					where cli.cli_cod02 = ev.cliente02_cli_cod02 and ev.cod_evento = le.cod_evento
					and orc.cod_evento = ev.cod_evento
					and le.loca_estado_ev = es.id
					and cid.id =  le.local_cidade_ev
					and ev.cod_evento = ate.cod_evento
					and foto.foto_cod = ate.foto_cod
					and foto.foto_cod = '%s'
			and ev.servico like '%s' and es.id = '%s' ORDER BY ev.cod_evento ASC limit %u, %u", $id_foto,$servico,$estado, $start, $limite);
		}
		
	}


	
	$resultado = mysqli_query($conexao,$sql) or die(mysql_error($conexao)."<br/>".$sql);
	//echo "<br/> Perf_Foto: ".print_r($resultado)."<br/>";
	$count = mysqli_num_rows($resultado);
	if($count >= 1){
		//echo "<br/> Entrou no count<br/>";
		return $resultado;
	}else{
		//echo "Falha em localizar o perfil ";
		return false;
	}
}

function lista_cli_opt02_count($conexao, $servico, $estado, $limite = 5,$orc_min, $orc_max, $id_foto){

	if($orc_min > 0 && $orc_max > 0){
		$sql_count = sprintf("select count(ev.cod_evento) 
					from cliente02 cli, evento ev, localizacao_evento le, orcamento orc, estado es, cidade cid, fotografo foto, atende ate
					where cli.cli_cod02 = ev.cliente02_cli_cod02 and ev.cod_evento = le.cod_evento 
					and orc.cod_evento = ev.cod_evento
					and le.loca_estado_ev = es.id
					and cid.id =  le.local_cidade_ev
					and ev.cod_evento = ate.cod_evento
					and foto.foto_cod = ate.foto_cod
					and foto.foto_cod = '%s'
					and orc.orc_valor_min >= '%s' and orc.orc_valor_max <= '%s'
			and ev.servico like '%s' and es.id = '%s'",$id_foto,$orc_min, $orc_max,$servico, $estado);
	}else{
		$sql_count = sprintf("select count(ev.cod_evento) 
				from cliente02 cli, evento ev, localizacao_evento le, orcamento orc, estado es, cidade cid, fotografo foto, atende ate
				where cli.cli_cod02 = ev.cliente02_cli_cod02 and ev.cod_evento = le.cod_evento 
				and orc.cod_evento = ev.cod_evento
				and le.loca_estado_ev = es.id
				and cid.id =  le.local_cidade_ev
				and ev.cod_evento = ate.cod_evento
				and foto.foto_cod = ate.foto_cod
				and foto.foto_cod = '%s'
			and ev.servico like '%s' and es.id = '%s'",$id_foto,$servico, $estado);
	}

	
	$resultado_count = mysqli_query($conexao, $sql_count);
	$fetch = mysqli_fetch_assoc($resultado_count);
	$resul_fetch = array_shift($fetch);
	
	$sql_resul = array_shift($fetch);
	if($sql_resul >= 0){
		return $sql_resul;
	}else{ echo "Error. "; };
}

function lista_cli_opt03($conexao, $estado, $start, $limit = 5,$orc_min, $orc_max, $ordenar, $id_foto){
	
	if($orc_min > 0 && $orc_max > 0){
		if($ordenar == 'DESC'){
			$sql = sprintf("
					select 
					cli.cli_nome as 'nome', cli.cli_email as 'email', cli.cli_telefone as 'Telefone', cli.cli_cel as 'Celular',
					ev.complementar as 'complementar', ev.cod_evento as 'codigo', ev.data as 'data', ev.servico as 'Servico', ev.vagas as 'vagas',
					orc.orc_valor_min as 'val_min', orc.orc_valor_max as 'val_max', es.uf as 'estado', cid.nome as 'cidade', es.id as 'id_estado', cid.id as 'id_nome'

					from cliente02 cli, evento ev, localizacao_evento le, orcamento orc, estado es, cidade cid, atende ate, fotografo foto
					where cli.cli_cod02 = ev.cliente02_cli_cod02 and ev.cod_evento = le.cod_evento
					and orc.cod_evento = ev.cod_evento
					and le.loca_estado_ev = es.id
					and cid.id =  le.local_cidade_ev
					and ev.cod_evento = ate.cod_evento
					and foto.foto_cod = ate.foto_cod
					and foto.foto_cod = '%s'
					and orc.orc_valor_min >= '%s' and orc.orc_valor_max <= '%s'
					and es.id = '%s' ORDER BY ev.cod_evento DESC limit %u, %u  ",$id_foto,$orc_min,$orc_max,$estado, $start, $limit);
		}else{
			$sql = sprintf("
					select 
					cli.cli_nome as 'nome', cli.cli_email as 'email', cli.cli_telefone as 'Telefone', cli.cli_cel as 'Celular',
					ev.complementar as 'complementar', ev.cod_evento as 'codigo', ev.data as 'data', ev.servico as 'Servico', ev.vagas as 'vagas',
					orc.orc_valor_min as 'val_min', orc.orc_valor_max as 'val_max', es.uf as 'estado', cid.nome as 'cidade', es.id as 'id_estado', cid.id as 'id_nome'

					from cliente02 cli, evento ev, localizacao_evento le, orcamento orc, estado es, cidade cid, atende ate, fotografo foto
					where cli.cli_cod02 = ev.cliente02_cli_cod02 and ev.cod_evento = le.cod_evento
					and orc.cod_evento = ev.cod_evento
					and le.loca_estado_ev = es.id
					and cid.id =  le.local_cidade_ev
					and ev.cod_evento = ate.cod_evento
					and foto.foto_cod = ate.foto_cod
					and foto.foto_cod = '%s'
					and orc.orc_valor_min >= '%s' and orc.orc_valor_max <= '%s'
					and es.id = '%s' ORDER BY ev.cod_evento ASC limit %u, %u  ",$id_foto,$orc_min,$orc_max,$estado, $start, $limit);
		}
		
	}else{

		if($ordenar == 'ASC'){
			$sql = sprintf("
					select 
					cli.cli_nome as 'nome', cli.cli_email as 'email', cli.cli_telefone as 'Telefone', cli.cli_cel as 'Celular',
					ev.complementar as 'complementar', ev.cod_evento as 'codigo', ev.data as 'data', ev.servico as 'Servico', ev.vagas as 'vagas',
					orc.orc_valor_min as 'val_min', orc.orc_valor_max as 'val_max', es.uf as 'estado', cid.nome as 'cidade', es.id as 'id_estado', cid.id as 'id_nome'

					from cliente02 cli, evento ev, localizacao_evento le, orcamento orc, estado es, cidade cid, atende ate, fotografo foto
					where cli.cli_cod02 = ev.cliente02_cli_cod02 and ev.cod_evento = le.cod_evento
					and orc.cod_evento = ev.cod_evento
					and le.loca_estado_ev = es.id
					and cid.id =  le.local_cidade_ev
					and ev.cod_evento = ate.cod_evento
					and foto.foto_cod = ate.foto_cod
					and foto.foto_cod = '%s'
					and es.id = '%s' ORDER BY ev.cod_evento DESC limit %u, %u  ",$id_foto,$estado, $start, $limit);
		}else{
			$sql = sprintf("
					select 
					cli.cli_nome as 'nome', cli.cli_email as 'email', cli.cli_telefone as 'Telefone', cli.cli_cel as 'Celular',
					ev.complementar as 'complementar', ev.cod_evento as 'codigo', ev.data as 'data', ev.servico as 'Servico', ev.vagas as 'vagas',
					orc.orc_valor_min as 'val_min', orc.orc_valor_max as 'val_max', es.uf as 'estado', cid.nome as 'cidade', es.id as 'id_estado', cid.id as 'id_nome'

					from cliente02 cli, evento ev, localizacao_evento le, orcamento orc, estado es, cidade cid, atende ate, fotografo foto
					where cli.cli_cod02 = ev.cliente02_cli_cod02 and ev.cod_evento = le.cod_evento
					and orc.cod_evento = ev.cod_evento
					and le.loca_estado_ev = es.id
					and cid.id =  le.local_cidade_ev
					and ev.cod_evento = ate.cod_evento
					and foto.foto_cod = ate.foto_cod
					and foto.foto_cod = '%s'
					and es.id = '%s' ORDER BY ev.cod_evento ASC limit %u, %u  ",$id_foto,$estado, $start, $limit);
		}		
	}
		
	$resultado = mysqli_query($conexao, $sql);
	//echo "<br/> Perf_Foto: ".print_r($resultado)."<br/>";

	$count = mysqli_num_rows($resultado);
	if($count >= 1){
	//	echo "<br/> Entrou no count<br/>";
		return $resultado;
	}else{
		//echo "Falha em localizar o perfil!";
		return false;
	}
}

function lista_cli_opt3_count($conexao, $estado, $limite = 5, $orc_min, $orc_max, $id_foto){

	if($orc_min > 0 && $orc_max > 0){
		$sql_count = sprintf("select count(ev.cod_evento) 
					from cliente02 cli, evento ev, localizacao_evento le, orcamento orc, estado es, cidade cid, fotografo foto, atende ate
					where cli.cli_cod02 = ev.cliente02_cli_cod02 and ev.cod_evento = le.cod_evento 
					and orc.cod_evento = ev.cod_evento
					and le.loca_estado_ev = es.id
					and cid.id =  le.local_cidade_ev
					and ev.cod_evento = ate.cod_evento
					and foto.foto_cod = ate.foto_cod
					and foto.foto_cod = '%s'
					and orc.orc_valor_min >= '%s' and orc.orc_valor_max <= '%s'
					and es.id = '%s'",$id_foto,$orc_min,$orc_max,$estado);
	}else{
		$sql_count = sprintf("select count(ev.cod_evento) 
					from cliente02 cli, evento ev, localizacao_evento le, orcamento orc, estado es, cidade cid, fotografo foto, atende ate
					where cli.cli_cod02 = ev.cliente02_cli_cod02 and ev.cod_evento = le.cod_evento 
					and orc.cod_evento = ev.cod_evento
					and le.loca_estado_ev = es.id
					and cid.id =  le.local_cidade_ev
					and ev.cod_evento = ate.cod_evento
					and foto.foto_cod = ate.foto_cod
					and foto.foto_cod = '%s'
					and es.id = '%s'",$id_foto,$estado);
	}

	
	$resultado_count = mysqli_query($conexao,$sql_count);
	$fetch = mysqli_fetch_assoc($resultado_count);	
	$resul_fetch = array_shift($fetch);	
	$sql_resul = ceil($resul_fetch / $limite );

	if($sql_resul >= 0){
		return $sql_resul;
	}else{ echo "Error."; }
	
}

function lista_cli_opt04($conexao, $estado, $cidade, $start, $limite = 5,$orc_min,$orc_max, $ordenar, $id_foto) {

	if($orc_min > 0 && $orc_max > 0){
		if($ordenar == 'DESC'){
			
			$sql = sprintf("
					select 
					cli.cli_nome as 'nome', cli.cli_email as 'email', cli.cli_telefone as 'Telefone', cli.cli_cel as 'Celular',
					ev.complementar as 'complementar', ev.cod_evento as 'codigo', ev.data as 'data', ev.servico as 'Servico', ev.vagas as 'vagas',
					orc.orc_valor_min as 'val_min', orc.orc_valor_max as 'val_max', es.uf as 'estado', cid.nome as 'cidade', es.id as 'id_estado', cid.id as 'id_nome'

					from cliente02 cli, evento ev, localizacao_evento le, orcamento orc, estado es, cidade cid, atende ate, fotografo foto
					where cli.cli_cod02 = ev.cliente02_cli_cod02 and ev.cod_evento = le.cod_evento
					and orc.cod_evento = ev.cod_evento
					and le.loca_estado_ev = es.id
					and cid.id =  le.local_cidade_ev
					and ev.cod_evento = ate.cod_evento
					and foto.foto_cod = ate.foto_cod
					and foto.foto_cod = '%s'
					and orc.orc_valor_min >= '%s' and orc.orc_valor_max <= '%s'
				and es.id = '%s' and cid.id = '%s' ORDER BY ev.cod_evento DESC limit %u, %u",$id_foto,$orc_min,$orc_max,$estado,$cidade, $start, $limite);
		}else{
			
			$sql = sprintf("
					select 
					cli.cli_nome as 'nome', cli.cli_email as 'email', cli.cli_telefone as 'Telefone', cli.cli_cel as 'Celular',
					ev.complementar as 'complementar', ev.cod_evento as 'codigo', ev.data as 'data', ev.servico as 'Servico', ev.vagas as 'vagas',
					orc.orc_valor_min as 'val_min', orc.orc_valor_max as 'val_max', es.uf as 'estado', cid.nome as 'cidade', es.id as 'id_estado', cid.id as 'id_nome'

					from cliente02 cli, evento ev, localizacao_evento le, orcamento orc, estado es, cidade cid, atende ate, fotografo foto
					where cli.cli_cod02 = ev.cliente02_cli_cod02 and ev.cod_evento = le.cod_evento
					and orc.cod_evento = ev.cod_evento
					and le.loca_estado_ev = es.id
					and cid.id =  le.local_cidade_ev
					and ev.cod_evento = ate.cod_evento
					and foto.foto_cod = ate.foto_cod
					and foto.foto_cod = '%s'
					and orc.orc_valor_min >= '%s' and orc.orc_valor_max <= '%s'
				and es.id = '%s' and cid.id = '%s' ORDER BY ev.cod_evento ASC limit %u, %u",$id_foto,$orc_min,$orc_max,$estado,$cidade, $start, $limite);
		}
		
	}else{
		if($ordenar == 'DESC'){
			
			$sql = sprintf("
					select 
					cli.cli_nome as 'nome', cli.cli_email as 'email', cli.cli_telefone as 'Telefone', cli.cli_cel as 'Celular',
					ev.complementar as 'complementar', ev.cod_evento as 'codigo', ev.data as 'data', ev.servico as 'Servico', ev.vagas as 'vagas',
					orc.orc_valor_min as 'val_min', orc.orc_valor_max as 'val_max', es.uf as 'estado', cid.nome as 'cidade', es.id as 'id_estado', cid.id as 'id_nome'

					from cliente02 cli, evento ev, localizacao_evento le, orcamento orc, estado es, cidade cid, atende ate, fotografo foto
					where cli.cli_cod02 = ev.cliente02_cli_cod02 and ev.cod_evento = le.cod_evento
					and orc.cod_evento = ev.cod_evento
					and le.loca_estado_ev = es.id
					and cid.id =  le.local_cidade_ev
					and ev.cod_evento = ate.cod_evento
					and foto.foto_cod = ate.foto_cod
					and foto.foto_cod = '%s'
				and es.id = '%s' and cid.id = '%s' ORDER BY ev.cod_evento DESC limit %u, %u",$id_foto,$estado,$cidade, $start, $limite);
		}else{

			$sql = sprintf("
					select 
					cli.cli_nome as 'nome', cli.cli_email as 'email', cli.cli_telefone as 'Telefone', cli.cli_cel as 'Celular',
					ev.complementar as 'complementar', ev.cod_evento as 'codigo', ev.data as 'data', ev.servico as 'Servico', ev.vagas as 'vagas',
					orc.orc_valor_min as 'val_min', orc.orc_valor_max as 'val_max', es.uf as 'estado', cid.nome as 'cidade', es.id as 'id_estado', cid.id as 'id_nome'

					from cliente02 cli, evento ev, localizacao_evento le, orcamento orc, estado es, cidade cid, atende ate, fotografo foto
					where cli.cli_cod02 = ev.cliente02_cli_cod02 and ev.cod_evento = le.cod_evento
					and orc.cod_evento = ev.cod_evento
					and le.loca_estado_ev = es.id
					and cid.id =  le.local_cidade_ev
					and ev.cod_evento = ate.cod_evento
					and foto.foto_cod = ate.foto_cod
					and foto.foto_cod = '%s'
				and es.id = '%s' and cid.id = '%s' ORDER BY ev.cod_evento ASC limit %u, %u",$id_foto,$estado,$cidade, $start, $limite);
		}
			
	}

	
	$resultado = mysqli_query($conexao, $sql);
	//echo "<br/> Perf_Foto: ".print_r($resultado)."<br/>";
	$count = mysqli_num_rows($resultado);
	if($count >= 1){
	//	echo "<br/> Entrou no count<br/>";
		return $resultado;
	}else{
	//	echo "Falha em localizar o perfil";
		return false;
	}
		
}

function lista_cli_opt04_count($conexao, $estado,$cidade ,$limite = 5,$orc_min,$orc_max, $id_foto){

	if($orc_min > 0 && $orc_max > 0){
		$sql_count = sprintf("
					select count(ev.cod_evento) 
					from cliente02 cli, evento ev, localizacao_evento le, orcamento orc, estado es, cidade cid, fotografo foto, atende ate
					where cli.cli_cod02 = ev.cliente02_cli_cod02 and ev.cod_evento = le.cod_evento 
					and orc.cod_evento = ev.cod_evento
					and le.loca_estado_ev = es.id
					and cid.id =  le.local_cidade_ev
					and ev.cod_evento = ate.cod_evento
					and foto.foto_cod = ate.foto_cod
					and foto.foto_cod = '%s'
					and orc.orc_valor_min >= '%s' and orc.orc_valor_max <= '%s'
				and es.id = '%s' and cid.id = '%s'",$id_foto,$orc_min,$orc_max,$estado, $cidade);
	}else{
		$sql_count = sprintf("
					select count(ev.cod_evento) 
					from cliente02 cli, evento ev, localizacao_evento le, orcamento orc, estado es, cidade cid, fotografo foto, atende ate
					where cli.cli_cod02 = ev.cliente02_cli_cod02 and ev.cod_evento = le.cod_evento 
					and orc.cod_evento = ev.cod_evento
					and le.loca_estado_ev = es.id
					and cid.id =  le.local_cidade_ev
					and ev.cod_evento = ate.cod_evento
					and foto.foto_cod = ate.foto_cod
					and foto.foto_cod = '%s'
				and es.id = '%s' and cid.id = '%s'",$id_foto,$estado, $cidade);
	}

	
	$resultado_count = mysqli_query($conexao, $sql_count);
	$fetch           = mysqli_fetch_assoc($resultado_count);
	$resul_fetch	 = array_shift($fetch);
	
	$sql_result = ceil($resul_fetch / $limite);
	if($sql_result >= 0){
		return $sql_result;
	}else{ echo "Error. "; }
}

function lista_cli_opt05($conexao, $servico, $start, $limite = 5,$orc_min,$orc_max, $ordenar, $id_foto){
	
	if($orc_min > 0 && $orc_max > 0){
		if($ordenar == 'DESC'){
			$sql = sprintf("
					select 
					cli.cli_nome as 'nome', cli.cli_email as 'email', cli.cli_telefone as 'Telefone', cli.cli_cel as 'Celular',
					ev.complementar as 'complementar', ev.cod_evento as 'codigo', ev.data as 'data', ev.servico as 'Servico', ev.vagas as 'vagas',
					orc.orc_valor_min as 'val_min', orc.orc_valor_max as 'val_max', es.uf as 'estado', cid.nome as 'cidade', es.id as 'id_estado', cid.id as 'id_nome'

					from cliente02 cli, evento ev, localizacao_evento le, orcamento orc, estado es, cidade cid, atende ate, fotografo foto
					where cli.cli_cod02 = ev.cliente02_cli_cod02 and ev.cod_evento = le.cod_evento
					and orc.cod_evento = ev.cod_evento
					and le.loca_estado_ev = es.id
					and cid.id =  le.local_cidade_ev
					and ev.cod_evento = ate.cod_evento
					and foto.foto_cod = ate.foto_cod
					and foto.foto_cod = '%s'
					and orc.orc_valor_min >= '%s' and orc.orc_valor_max <= '%s'
				and ev.servico like '%s' ORDER BY ev.cod_evento DESC limit %u, %u  ",$id_foto,$orc_min,$orc_max,$servico, $start, $limite);
		}else{
			$sql = sprintf("
					select 
					cli.cli_nome as 'nome', cli.cli_email as 'email', cli.cli_telefone as 'Telefone', cli.cli_cel as 'Celular',
					ev.complementar as 'complementar', ev.cod_evento as 'codigo', ev.data as 'data', ev.servico as 'Servico', ev.vagas as 'vagas',
					orc.orc_valor_min as 'val_min', orc.orc_valor_max as 'val_max', es.uf as 'estado', cid.nome as 'cidade', es.id as 'id_estado', cid.id as 'id_nome'

					from cliente02 cli, evento ev, localizacao_evento le, orcamento orc, estado es, cidade cid, atende ate, fotografo foto
					where cli.cli_cod02 = ev.cliente02_cli_cod02 and ev.cod_evento = le.cod_evento
					and orc.cod_evento = ev.cod_evento
					and le.loca_estado_ev = es.id
					and cid.id =  le.local_cidade_ev
					and ev.cod_evento = ate.cod_evento
					and foto.foto_cod = ate.foto_cod
					and foto.foto_cod = '%s'
					and orc.orc_valor_min >= '%s' and orc.orc_valor_max <= '%s'
				and ev.servico like '%s' ORDER BY ev.cod_evento ASC limit %u, %u  ",$id_foto,$orc_min,$orc_max,$servico, $start, $limite);
		}
		
	}else{
		if($ordenar == 'DESC'){
			$sql = sprintf("
					select 
					cli.cli_nome as 'nome', cli.cli_email as 'email', cli.cli_telefone as 'Telefone', cli.cli_cel as 'Celular',
					ev.complementar as 'complementar', ev.cod_evento as 'codigo', ev.data as 'data', ev.servico as 'Servico', ev.vagas as 'vagas',
					orc.orc_valor_min as 'val_min', orc.orc_valor_max as 'val_max', es.uf as 'estado', cid.nome as 'cidade', es.id as 'id_estado', cid.id as 'id_nome'

					from cliente02 cli, evento ev, localizacao_evento le, orcamento orc, estado es, cidade cid, atende ate, fotografo foto
					where cli.cli_cod02 = ev.cliente02_cli_cod02 and ev.cod_evento = le.cod_evento
					and orc.cod_evento = ev.cod_evento
					and le.loca_estado_ev = es.id
					and cid.id =  le.local_cidade_ev
					and ev.cod_evento = ate.cod_evento
					and foto.foto_cod = ate.foto_cod
					and foto.foto_cod = '%s'
				and ev.servico like '%s' ORDER BY ev.cod_evento DESC limit %u, %u  ",$id_foto,$servico, $start, $limite);
		}else{
			$sql = sprintf("
					select 
					cli.cli_nome as 'nome', cli.cli_email as 'email', cli.cli_telefone as 'Telefone', cli.cli_cel as 'Celular',
					ev.complementar as 'complementar', ev.cod_evento as 'codigo', ev.data as 'data', ev.servico as 'Servico', ev.vagas as 'vagas',
					orc.orc_valor_min as 'val_min', orc.orc_valor_max as 'val_max', es.uf as 'estado', cid.nome as 'cidade', es.id as 'id_estado', cid.id as 'id_nome'

					from cliente02 cli, evento ev, localizacao_evento le, orcamento orc, estado es, cidade cid, atende ate, fotografo foto
					where cli.cli_cod02 = ev.cliente02_cli_cod02 and ev.cod_evento = le.cod_evento
					and orc.cod_evento = ev.cod_evento
					and le.loca_estado_ev = es.id
					and cid.id =  le.local_cidade_ev
					and ev.cod_evento = ate.cod_evento
					and foto.foto_cod = ate.foto_cod
					and foto.foto_cod = '%s'
				and ev.servico like '%s' ORDER BY ev.cod_evento ASC limit %u, %u  ",$id_foto,$servico, $start, $limite);
		}
		
	}

	$resultado = mysqli_query($conexao,$sql);
	//echo "<br/> Perf_Foto: ".print_r($resultado)."<br/>";
	$count = mysqli_num_rows($resultado);
	if($count >= 1){
	//	echo "<br/> Entrou no count<br/>";
		return $resultado;
	}else{
		return false;
	}
}



function lista_cli_opt5_count($conexao, $servico, $limite = 5, $orc_min, $orc_max, $id_foto){

	if($orc_min > 0 && $orc_max > 0){
		$sql_count = sprintf("select count(ev.cod_evento) 
					from cliente02 cli, evento ev, localizacao_evento le, orcamento orc, estado es, cidade cid, fotografo foto, atende ate
					where cli.cli_cod02 = ev.cliente02_cli_cod02 and ev.cod_evento = le.cod_evento 
					and orc.cod_evento = ev.cod_evento
					and le.loca_estado_ev = es.id
					and cid.id =  le.local_cidade_ev
					and ev.cod_evento = ate.cod_evento
					and foto.foto_cod = ate.foto_cod
					and foto.foto_cod = '%s'
					and orc.orc_valor_min >= '%s' and orc.orc_valor_max <= '%s'
				and ev.servico like '%s' ",$id_foto,$orc_min,$orc_max,$servico);
	}else{
		$sql_count = sprintf("select count(ev.cod_evento) 
				from cliente02 cli, evento ev, localizacao_evento le, orcamento orc, estado es, cidade cid, fotografo foto, atende ate
				where cli.cli_cod02 = ev.cliente02_cli_cod02 and ev.cod_evento = le.cod_evento 
				and orc.cod_evento = ev.cod_evento
				and le.loca_estado_ev = es.id
				and cid.id =  le.local_cidade_ev
				and ev.cod_evento = ate.cod_evento
				and foto.foto_cod = ate.foto_cod
				and foto.foto_cod = '%s'
				and ev.servico like '%s' ",$id_foto,$servico);
	}

	
	$resultado_count = mysqli_query($conexao, $sql_count);
	$fetch = mysqli_fetch_assoc($resultado_count);
	$resul_fetch = array_shift($fetch);
	
	$sql_resul = ceil($resul_fetch / $limite);
	if($sql_resul >= 0){
		return $sql_resul;
	}else{ echo "Error."; }
}



function lista_cli_opt06($conexao, $start, $limite = 5,$orc_min=0,$orc_max=0,$ordenar, $id_foto){
	
	if($orc_min > 0 && $orc_max > 0){
		if($ordenar == 'DESC'){
			
			$sql = sprintf("
					select 
					cli.cli_nome as 'nome', cli.cli_email as 'email', cli.cli_telefone as 'Telefone', cli.cli_cel as 'Celular',
					ev.complementar as 'complementar', ev.cod_evento as 'codigo', ev.data as 'data', ev.servico as 'Servico', ev.vagas as 'vagas',
					orc.orc_valor_min as 'val_min', orc.orc_valor_max as 'val_max', es.uf as 'estado', cid.nome as 'cidade', es.id as 'id_estado', cid.id as 'id_nome'

					from cliente02 cli, evento ev, localizacao_evento le, orcamento orc, estado es, cidade cid, atende ate, fotografo foto
					where cli.cli_cod02 = ev.cliente02_cli_cod02 and ev.cod_evento = le.cod_evento
					and orc.cod_evento = ev.cod_evento
					and le.loca_estado_ev = es.id
					and cid.id =  le.local_cidade_ev
					and ev.cod_evento = ate.cod_evento
					and foto.foto_cod = ate.foto_cod
					and foto.foto_cod = '%s'
					and orc.orc_valor_min >= %u and orc.orc_valor_max <= %u
					and cid.id =  le.local_cidade_ev ORDER BY ev.cod_evento DESC limit %u, %u",$id_foto,$orc_min,$orc_max,$start,$limite);
		}else{
			//echo "entrou if 2";
			$sql = sprintf("select 
					cli.cli_nome as 'nome', cli.cli_email as 'email', cli.cli_telefone as 'Telefone', cli.cli_cel as 'Celular',
					ev.complementar as 'complementar', ev.cod_evento as 'codigo', ev.data as 'data', ev.servico as 'Servico', ev.vagas as 'vagas',
					orc.orc_valor_min as 'val_min', orc.orc_valor_max as 'val_max', es.uf as 'estado', cid.nome as 'cidade', es.id as 'id_estado', cid.id as 'id_nome'

					from cliente02 cli, evento ev, localizacao_evento le, orcamento orc, estado es, cidade cid, atende ate, fotografo foto
					where cli.cli_cod02 = ev.cliente02_cli_cod02 and ev.cod_evento = le.cod_evento
					and orc.cod_evento = ev.cod_evento
					and le.loca_estado_ev = es.id
					and cid.id =  le.local_cidade_ev
					and ev.cod_evento = ate.cod_evento
					and foto.foto_cod = ate.foto_cod
					and foto.foto_cod = '%s'
					and orc.orc_valor_min >= %u and orc.orc_valor_max <= %u
					and cid.id =  le.local_cidade_ev ORDER BY ev.cod_evento ASC limit %u, %u",$id_foto,$orc_min,$orc_max,$start,$limite);
		}
		
	}else{

		if($ordenar == 'DESC'){
			$sql = sprintf("
				    select 
					cli.cli_nome as 'nome', cli.cli_email as 'email', cli.cli_telefone as 'Telefone', cli.cli_cel as 'Celular',
					ev.complementar as 'complementar', ev.cod_evento as 'codigo', ev.data as 'data', ev.servico as 'Servico', ev.vagas as 'vagas',
					orc.orc_valor_min as 'val_min', orc.orc_valor_max as 'val_max', es.uf as 'estado', cid.nome as 'cidade', es.id as 'id_estado', cid.id as 'id_nome'

					from cliente02 cli, evento ev, localizacao_evento le, orcamento orc, estado es, cidade cid, atende ate, fotografo foto
					where cli.cli_cod02 = ev.cliente02_cli_cod02 and ev.cod_evento = le.cod_evento
					and orc.cod_evento = ev.cod_evento
					and le.loca_estado_ev = es.id
					and cid.id =  le.local_cidade_ev
					and ev.cod_evento = ate.cod_evento
					and foto.foto_cod = ate.foto_cod
					and foto.foto_cod = '%s'
					and cid.id = le.local_cidade_ev ORDER BY ev.cod_evento DESC limit %u, %u",$id_foto,$start,$limite);
		}else{
			$sql = sprintf("
					select 
					cli.cli_nome as 'nome', cli.cli_email as 'email', cli.cli_telefone as 'Telefone', cli.cli_cel as 'Celular',
					ev.complementar as 'complementar', ev.cod_evento as 'codigo', ev.data as 'data', ev.servico as 'Servico', ev.vagas as 'vagas',
					orc.orc_valor_min as 'val_min', orc.orc_valor_max as 'val_max', es.uf as 'estado', cid.nome as 'cidade', es.id as 'id_estado', cid.id as 'id_nome'

					from cliente02 cli, evento ev, localizacao_evento le, orcamento orc, estado es, cidade cid, atende ate, fotografo foto
					where cli.cli_cod02 = ev.cliente02_cli_cod02 and ev.cod_evento = le.cod_evento
					and orc.cod_evento = ev.cod_evento
					and le.loca_estado_ev = es.id
					and cid.id =  le.local_cidade_ev
					and ev.cod_evento = ate.cod_evento
					and foto.foto_cod = ate.foto_cod
					and foto.foto_cod = '%s'
					and cid.id = le.local_cidade_ev ORDER BY ev.cod_evento ASC limit %u, %u",$id_foto,$start,$limite);
		}

		
	}

	
	$resultado = mysqli_query($conexao,$sql);
	
	$count = mysqli_num_rows($resultado);
	if($count >= 1){
		return $resultado;
	}else{
		//echo "Falha em localizar o perfil";
		return false;
	}
}

function lista_cli_opt6_count($conexao,$limite = 5, $orc_min=0, $orc_max=0, $id_foto){

	if($orc_min > 0 && $orc_max > 0){
		//echo "<br/>entrou no maior que 0<br/>";
		$sql_count = sprintf("select count(ev.cod_evento) 
								from cliente02 cli, evento ev, localizacao_evento le, orcamento orc, estado es, cidade cid, fotografo foto, atende ate
								where cli.cli_cod02 = ev.cliente02_cli_cod02 and ev.cod_evento = le.cod_evento 
								and orc.cod_evento = ev.cod_evento
								and le.loca_estado_ev = es.id
								and cid.id =  le.local_cidade_ev
								and ev.cod_evento = ate.cod_evento
								and foto.foto_cod = ate.foto_cod
								and foto.foto_cod = '%s'
			                    and orc.orc_valor_min >= '%s' and orc.orc_valor_max <= '%s'
								and cid.id =  le.local_cidade_ev",$id_foto,$orc_min,$orc_max);

	}else{
		$sql_count = sprintf("select count(ev.cod_evento) 
								from cliente02 cli, evento ev, localizacao_evento le, orcamento orc, estado es, cidade cid, fotografo foto, atende ate
								where cli.cli_cod02 = ev.cliente02_cli_cod02 and ev.cod_evento = le.cod_evento 
								and orc.cod_evento = ev.cod_evento
								and le.loca_estado_ev = es.id
								and cid.id =  le.local_cidade_ev
								and ev.cod_evento = ate.cod_evento
								and foto.foto_cod = ate.foto_cod
								and foto.foto_cod = '%s'  ", $id_foto);
		//echo "<br/>entrou no menor que 0<br/>";
	}
	
	$resultado_count = mysqli_query($conexao, $sql_count) or die(mysql_error($conexao)."<br/>".$sql_count);
	$fetch = mysqli_fetch_assoc($resultado_count);
	$resul_fetch = array_shift($fetch);

	//echo "Resultado Fetch: ".$resul_fetch."<br/>";
	//echo "<br/>Limite: ".$limite." <br/>";

	$sql_resul = ceil($resul_fetch / $limite);
	if($sql_resul >= 0){
		return $sql_resul;
	}else{ echo "Error."; }
}

function ligaFotoEvent($conexao, $id_foto, $id_event){
	$visu = 'V';
	$sql = sprintf("INSERT INTO atende (`cod_evento`,`foto_cod`,`atend_visu`) VALUES ('%s','%s','%s')",$id_event,$id_foto,$visu);
	$resultado = mysqli_query($conexao,$sql) or die(mysqli_error($conexao)."<br/>".$sql);
	if($resultado){ return true; }else{ 
		return false;
	}
}









// --------------- if de orçamentos -----------

function varificaPontos($val_min, $val_max){
	if($val_min >= 100.00 && $val_max <= 1000.00){
		$pontos = 2;
		return $pontos;
	}else if($val_min >= 1000.00 && $val_max <= 2000.00){
		$pontos = 3;
		return $pontos;
	}else if($val_min >= 2000.00 && $val_max <= 5000.00){
		$pontos = 4;
		return $pontos;
	}else if($val_min >= 5000.00 && $val_max <= 10000.00){
		$pontos = 5;
		return $pontos;
	}else if($val_min >= 10000.00){
		$pontos = 10;
		return $pontos;
	}
}

// -------------------------------- desconta créditos --------------------------------------


function descontaCredito($conexao, $foto_credi, $event_credi, $foto_id, $vagas,$event_id){
	$resultado = $foto_credi - $event_credi;
	$vagas_mod = $vagas - 1;
	echo "Vagas Modificado: ".$vagas_mod." eo o id do evento: ".$event_id."<-- <br/>";
	if($resultado > 0 && $vagas > 0){
		$sql = sprintf("update fotografo set foto_credito = '%s' where foto_cod = '%s'",$resultado,$foto_id);
		$resultado = mysqli_query($conexao, $sql) or die (mysqli_error($conexao)."<br/>".$sql."<br/>");
		
		$sql2 = sprintf("update evento set vagas = '%s' where cod_evento = '%s'",$vagas_mod,$event_id);
		$resultado2 = mysqli_query($conexao,$sql2) or die(mysqli_error($conexao)."<br/>".$sql2);
		
		if($resultado){
			if($resultado2){
				return true;
			}else{ return false; }
		}else{ 
			return false;
		}
	}
}

// ---------------------- Verifica se o Fotogra já possui o contato --------------------------


function verificaContatoComprado($event_id, $foto_id){
	
	
	$db_host = "127.0.0.1";
	$db_user = "root";
	$db_pass = "";
	$db_name = "mazy_projeto03";
      
    //echo "Entrou no evento comprado";

	$conexao = mysqli_connect($db_host,$db_user, $db_pass, $db_name);
	$sql = sprintf("select * from atende where cod_evento = '%s' and foto_cod = '%s' ",$event_id,$foto_id);
	$resultado = mysqli_query($conexao,$sql) or die(mysqli_error($conexao)."<br/>".$sql);
	$count = mysqli_num_rows($resultado);
	if($count == 1){
		return true;
	}else{ return false; }
}

