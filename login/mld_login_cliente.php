<?php 

function logar_cliente($conexao, $email, $senha){
	
	$sql = sprintf("select cli_nome, cli_email, cli_senha, cli_img_perf_dir, cli_ativo, cli_dir from cliente where cli_email = '%s' and cli_senha = '%s' ",$email,$senha);		
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
	$veri_cli       = verifiClienteEmail($conexao, $email);
	$veri_foto_fisi = verifiFotoFisiEmail($conexao, $email);
	$veri_foto_juri = verifiFotoJuriEmail($conexao, $email);

	if($veri_cli){

	}else if($veri_foto_fisi){
		return false;
	}else if($veri_foto_juri){
		return false;
	}else{

		$ativo = 'F';
	
		$email_explode = explode('@',$email);
		$dir_insert = $email_explode[0];
		
		$sql = sprintf("INSERT INTO cliente (cli_nome, cli_email, cli_senha, cli_telefone, cli_cel, cli_indeti, cli_img_perf_dir,cli_ativo, cli_dir) VALUES 
	    ('%s','%s','%s','%s','%s','%s', '%s','%s', '%s')",$nome, $email, $senha, $tel, $cel, $ident, $img, $ativo, $dir_insert);
		$resultado = mysqli_query($conexao, $sql) or die(mysql_error($conexao)."<br/>".$sql);
		if($resultado){
			return $resultado;
		}else{
			echo "Email já cadastrado no sistema.";
			return false;
		}
	}// fim da verificação

	
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









function verifiClienteEmail($conexao, $email){
	$sql = sprintf("select cli_nome, cli_email, cli_senha, cli_img_perf_dir, cli_ativo from cliente where cli_email = '%s'  ",$email);
	$resultado = mysqli_query($conexao,$sql);
	$count = mysqli_num_rows($resultado);
	if($count == 1){
		return true;
	}else{ return false;}
}

function verifiFotoFisiEmail($conexao, $email){
	$sql = sprintf("select f.foto_cod as 'cod', fs.foto_fisi_nome as 'nome', fs.foto_fisi_email as 'email', fs.foto_fisi_tel as 'tel', fs.foto_fisi_cel as 'cel', fs.foto_fisi_cpf as 'cpf', f.foto_img_perf as 'imagem'
        from fotografo f, fotografo_fisico fs where f.foto_cod = fs.foto_cod and fs.foto_fisi_email = '%s' ",$email);
	$resultado = mysqli_query($conexao, $sql);
	$count = mysqli_num_rows($resultado);
	if($count == 1){
		return true;
	}else{ return false; }
}

function verifiFotoJuriEmail($conexao, $email){
	$sql = sprintf("select 
			f.foto_cod as 'cod', fj.foto_juri_nome_fan as 'nome', fj.foto_juri_email as 'email',
			fj.foto_juri_tel as 'tel', fj.foto_juri_cel as 'cel', fj.foto_juri_cnpj as 'cnpj',
			f.foto_img_perf as 'imagem', f.foto_identi as 'ident', f.foto_ativo as 'status'		
		from fotografo f, fotografo_juridico fj where f.foto_cod = fj.foto_cod and fj.foto_juri_email = '%s' ",$email);
	$resultado = mysqli_query($conexao,$sql);
	$count = mysqli_num_rows($resultado);
	if($count == 1){
		return true;
	}else{ return false; }
}