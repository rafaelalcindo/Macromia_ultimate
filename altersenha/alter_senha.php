<?php 

require('../connection.php');

$conexao = mysqli_connect($db_host,$db_user,$db_pass,$db_name);
if(mysqli_connect_errno($conexao)){
	echo "Falha na conexão com banco de dados!";
	exit();
}else{
	
}

if(isset($_POST['txt_email']) ){
	require('email_cli_alter_senha.php');

	$email = $_POST['txt_email'];

	$veri_cli  = verifiCliente($conexao, $email);
	$veri_foto_fisi = verifiFotoFisi($conexao, $email);
	$veri_foto_juri = verifiFotoJuri($conexao, $email);

	if($veri_cli){
		$cli_ident = 'cli';
		EnviarEmailCliAlterSenha($email,$cli_ident);
	}else if($veri_foto_fisi){	
		$cli_ident = 'FF';
		EnviarEmailCliAlterSenha($email,$cli_ident);
	}else if($veri_foto_juri){
		$cli_ident = 'FJ';
		EnviarEmailCliAlterSenha($email,$cli_ident);
	}else{
		header("Location: ../esqueci-minha-senha.php?erroremail=K126T32C");
	}

}


function verifiCliente($conexao, $email){
	$sql = sprintf("select cli_nome, cli_email, cli_senha, cli_img_perf_dir, cli_ativo from cliente where cli_email = '%s' ",$email);
	$resultado = mysqli_query($conexao,$sql);
	$count = mysqli_num_rows($resultado);
	if($count == 1){
		return true;
	}else{ return false;}
}

function verifiFotoFisi($conexao, $email){
	$sql = sprintf("select f.foto_cod as 'cod', fs.foto_fisi_nome as 'nome', fs.foto_fisi_email as 'email', fs.foto_fisi_tel as 'tel', fs.foto_fisi_cel as 'cel', fs.foto_fisi_cpf as 'cpf', f.foto_img_perf as 'imagem'
        from fotografo f, fotografo_fisico fs where f.foto_cod = fs.foto_cod and fs.foto_fisi_email = '%s' ",$email);
	$resultado = mysqli_query($conexao, $sql);
	$count = mysqli_num_rows($resultado);
	if($count == 1){
		return true;
	}else{ return false; }
}

function verifiFotoJuri($conexao, $email){
	$sql = sprintf("select 
			f.foto_cod as 'cod', fj.foto_juri_nome_fan as 'nome', fj.foto_juri_email as 'email',
			fj.foto_juri_tel as 'tel', fj.foto_juri_cel as 'cel', fj.foto_juri_cnpj as 'cnpj',
			f.foto_img_perf as 'imagem', f.foto_identi as 'ident', f.foto_ativo as 'status',
			fj.foto_juri_senha as 'senha'			
			from fotografo f, fotografo_juridico fj where f.foto_cod = fj.foto_cod and fj.foto_juri_email = '%s' ",$email);
	$resultado = mysqli_query($conexao,$sql);
	$count = mysqli_num_rows($resultado);
	if($count == 1){
		return true;
	}else{ return false; }
}



function enviar_email_cli($email){
	
}


function enviar_email_foto($email){
	
}