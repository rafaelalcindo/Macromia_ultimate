<?php 

	require('../connection.php');
	
	if(mysqli_connect_errno($conexao)){
	echo "A conexão falhou, Erro Reportado ".mysqli_connect_error();
	exit();
	}else{
		echo "A conexão foi estabelecida com sucesso!";
	}
	
	require('mld_login_cliente');
	
	
	function getClienteInfo($conexao, $email, $senha){
		$dados_banco_cli = logar_cliente($conexao,$email,$senha);
		$dados_cli = dataCliente($dados_banco_cli);
		return $dados_cli;
	}
	
	
	
	
	
	
	
	
	
	
	
	
	
	
// Helpers------------------------------------------------------------------------------
	
	function dataCliente($data_logar){

	while ($row = mysqli_fetch_array($data_logar)) {
		$data[] =  array("nome"=>$row['cli_nome'], "email"=>$row['cli_email'],"senha"=>$row['cli_senha'],"img"=>$row['cli_img_perf_dir'],"ativo"=>$row['cli_ativo']);
	}
	$lista = array('nome','email','senha','img','ativo');				
				foreach($data as $linha){
					$lista['nome'] = $linha['nome'];
					$lista['email'] = $linha['email'];
					$lista['senha'] = $linha['senha'];
					$lista['img']   = $linha['img'];
					$lista['ativo'] = $linha['ativo'];
				}
	return $lista;
}