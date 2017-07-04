<?php

require('connection.php');

$conexao = mysqli_connect($db_host,$db_user,$db_pass,$db_name);
if(mysqli_connect_errno($conexao)){
	echo "Falha na conexão com banco de dados!";
	exit();
}else{
	
}

if(isset($_POST['txt_email']) && isset($_POST['txt_senha']) ){
	$email = $_POST['txt_email'];
	$senha_crip = $_POST['txt_senha'];
	echo "Email: ".$email." Senha: ".$senha_crip;
	$pageName = (isset($_POST['page_name']))?  $_POST['page_name'] : "index.php";
	//exit();
	$senha = sha1($senha_crip);
	$veri_cli  = verifiCliente($conexao, $email, $senha);
	$veri_foto_fisi = verifiFotoFisi($conexao, $email, $senha);
	$veri_foto_juri = verifiFotoJuri($conexao, $email, $senha);
	
	if($veri_cli){
		echo "Cliente Cliente mesmo!";
		$_GET['p'] = "logar";
		require_once('login/controller.php');		
	}else if($veri_foto_fisi){
		//echo "cliente Fotografo Físico.";
        $_POST['rd_foto'] = 1;
        $_GET['f'] = "logar";
        echo "<br/> Entrou no foto fisi<br/>";
        require_once('login_foto/controller.php');
	}else if($veri_foto_juri){
		//echo "cliente Fotografo Jurídico";
		$_POST['rd_foto'] = 2;
        $_GET['f'] = "logar";
        require_once('login_foto/controller.php');
	}else{		
		header("Location: ".$pageName."?errAut=wrong");
	}
}

if(isset($_GET['p']) == "logout"){
    require_once('login/controller.php');
}

if(isset($_GET['f']) == "logout"){
    require_once('login_foto/controller.php');
}
if(isset($_GET['p']) == 'cad_cli'){
	require_once('login/controller.php');
}
if(isset($_GET['p']) == 'ativa_cli'){
    require_once('login/controller.php');
}


function verifiCliente($conexao, $email,$senha){
	$sql = sprintf("select cli_nome, cli_email, cli_senha, cli_img_perf_dir, cli_ativo from cliente where cli_email = '%s' and cli_senha = '%s' ",$email,$senha);
	$resultado = mysqli_query($conexao,$sql);
	$count = mysqli_num_rows($resultado);
	if($count == 1){
		return true;
	}else{ return false;}
}

function verifiFotoFisi($conexao, $email, $senha){
	$sql = sprintf("select f.foto_cod as 'cod', fs.foto_fisi_nome as 'nome', fs.foto_fisi_email as 'email', fs.foto_fisi_tel as 'tel', fs.foto_fisi_cel as 'cel', fs.foto_fisi_cpf as 'cpf', f.foto_img_perf as 'imagem'
        from fotografo f, fotografo_fisico fs where f.foto_cod = fs.foto_cod and fs.foto_fisi_email = '%s' and fs.foto_fisi_senha = '%s'",$email,$senha);
	$resultado = mysqli_query($conexao, $sql);
	$count = mysqli_num_rows($resultado);
	if($count == 1){
		return true;
	}else{ return false; }
}

function verifiFotoJuri($conexao, $email, $senha){
	$sql = sprintf("select 
			f.foto_cod as 'cod', fj.foto_juri_nome_fan as 'nome', fj.foto_juri_email as 'email',
			fj.foto_juri_tel as 'tel', fj.foto_juri_cel as 'cel', fj.foto_juri_cnpj as 'cnpj',
			f.foto_img_perf as 'imagem', f.foto_identi as 'ident', f.foto_ativo as 'status',
			fj.foto_juri_senha as 'senha'			
			from fotografo f, fotografo_juridico fj where f.foto_cod = fj.foto_cod and fj.foto_juri_email = '%s' and fj.foto_juri_senha = '%s'",$email,$senha);
	$resultado = mysqli_query($conexao,$sql);
	$count = mysqli_num_rows($resultado);
	if($count == 1){
		return true;
	}else{ return false; }
}

