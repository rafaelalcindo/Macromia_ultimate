<?php

function dataCliente($data_logar){

	while ($row = mysqli_fetch_array($data_logar)) {
		$data[] =  array("nome"=>$row['cli_nome'], "email"=>$row['cli_email'],"senha"=>$row['cli_senha'],"img"=>$row['cli_img_perf_dir']);
	}
	$lista = array('nome','email','senha','img');				
				foreach($data as $linha){
					$lista['nome'] = $linha['nome'];
					$lista['email'] = $linha['email'];
					$lista['senha'] = $linha['senha'];
					$lista['img']   = $linha['img'];
				}
	return $lista;
}