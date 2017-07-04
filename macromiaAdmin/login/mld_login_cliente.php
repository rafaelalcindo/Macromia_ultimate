<?php 

function logar_cliente($conexao, $email, $senha){
	
	$sql = sprintf("select cli_nome, cli_email, cli_senha, cli_img_perf_dir, cli_ativo from cliente where cli_email = '%s' and cli_senha = '%s' ",$email,$senha);		
	$resultado = mysqli_query($conexao, $sql);		
	$count = mysqli_num_rows($resultado);	
	if($count == 1){
		return $resultado;
	}else{
		return false;	
	}			
}

function logar_session($conexao, $email){
	$sql = sprintf("select cli_nome, cli_email, cli_senha from cliente where cli_email = '%s' ",$email);
	$resultado = mysqli_query($conexao, $sql);
	$count = mysqli_num_rows($resultado);
	
	if($count == 1){
		return $resultado;
	}else{
		return false;
	}		
}


function cadastro_cliente($conexao, $nome, $email, $senha, $tel, $cel, $ident, $img){
	$ativo = 'F';
	$sql = sprintf("INSERT INTO cliente (cli_nome, cli_email, cli_senha, cli_telefone, cli_cel, cli_indeti, cli_img_perf_dir,cli_ativo) VALUES 
    ('%s','%s','%s','%s','%s','%s', '%s','%s')",$nome, $email, $senha, $tel, $cel, $ident, $img, $ativo);
	$resultado = mysqli_query($conexao, $sql) or die(mysql_error($conexao)."<br/>".$sql);
	if($resultado){
		return $resultado;
	}else{
		echo "Email já cadastrado no sistema.";
		return false;
	}
}


function ativar_cliente($conexao, $email){
	$ativo = 'V';
	$sql = sprintf("UPDATE cliente SET cli_ativo = '%s' WHERE cli_email = '%s'; ",$ativo,$email);
	$resultado = mysqli_query($conexao, $sql) or die(mysql_error($conexao)."<br/>".$sql);
	if($resultado){
		return $resultado;
	}else{
		echo "Falha da ativação do cadastro";
		return false;
	}
	
}