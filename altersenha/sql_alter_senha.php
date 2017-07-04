<?php


function alterCliSenha($conexao, $email, $senha){

	$senha_insert  = sha1($senha);

	$sql_alterCli  = sprintf("update cliente set cli_senha  = '%s' where cli_email = '%s' ",$senha_insert,$email);
	$resultado_cli = mysqli_query($conexao,$sql_alterCli) or die(mysqli_error($conexao)."<br/>".$sql_alterCli);
	
	if($resultado_cli){
		return true;
	}else{
		return false;
	}

}


function alterFotoFisi($conexao, $email, $senha){

	$senha_insert = sha1($senha);

	$sql_alterFotoFisi   = sprintf("update fotografo_fisico set foto_fisi_senha = '%s' where foto_fisi_email = '%s'",$senha_insert,$email);
	$resultado_foto_fisi = mysqli_query($conexao,$sql_alterFotoFisi) or die(mysqli_error($conexao)."<br/>".$sql_alterFotoFisi);

	if($resultado_foto_fisi){
		return true;
	}else{
		return false;
	}
}