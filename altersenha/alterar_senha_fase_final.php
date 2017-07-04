<?php


require('../connection.php');
require('sql_alter_senha.php');

$conexao = mysqli_connect($db_host,$db_user,$db_pass,$db_name);
if(mysqli_connect_errno($conexao)){
	echo "Falha na conexão com banco de dados!";
	exit();
}else{
	
}

	(isset($_POST['email_ref']))? $email           = $_POST['email_ref'] : $email = "";
	(isset($_POST['cli_ident_ref']))? $cli_ident   = $_POST['cli_ident_ref'] : $cli_ident = "";
	(isset($_POST['key_change_ref']))? $key_change = $_POST['key_change_ref'] : $key_change = "";
	(isset($_POST['txt_senha']))? $senha 		   = $_POST['txt_senha'] : $senha = "";

	$chave_cli = 105345893781;
	$chave_foto_fisi = 235482187187;

	echo "email: ".$email." cli_ident_ref: ".$cli_ident." key_change_ref: ".$key_change." txt_senha: ".$senha."<br/>";

	if($email != '' && $cli_ident != '' && $key_change != '' && $senha != ''){
		if($key_change == $chave_cli){
			if(alterCliSenha($conexao, $email, $senha)){
				header("Location: ../confirmado.php");
			}else{
				header("Location: ../index.php");
			}
		}else if($key_change == $chave_foto_fisi){
			if(alterFotoFisi($conexao,$email,$senha)){
				header("Location: ../confirmado.php");
			}else{
				header("Location: ../index.php");
			}
		}
	}
