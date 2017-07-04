<?php

session_start();
$titulo = "pagina de Login";
$conexao = mysqli_connect($db_host,$db_user, $db_pass,$db_name);

$dir = 'up_cli/';
$ext_img = array('jpg','gif','png');


if(mysqli_connect_errno($conexao)){
	echo "A conexão falhou, Erro Reportado ".mysqli_connect_error();
	exit();
}else{
	echo "A conexão foi estabelecida com sucesso!";
}

require("mld_login_cliente.php");

if(isset($_GET['p'])){
	$passo = $_GET['p'];
}else{
	$passo = null;
}

switch($passo){
	
	case 'logout':
		unsetCookiesSessionCliente();
		header("Location: index.php?r=login");
		//require_once('view_login.php');
	break;
	
	case 'logar':					
			$dados = logarCliente($conexao);								
	break;
	
	case 'view_cad_cli':
		require_once('view_cadastro_cli.php');
	break;
	
	case 'cad_cli':
		cadastrarCliente($conexao, $dir,$ext_img);
	break;
	
	case 'ativa_cli':
		ativarCliente($conexao);
	break;
	
	default:
		$verifica = Session_verification();
		if($verifica){
			logarCliente($conexao);
		}else{			
			require_once('view_login.php');
		}		
	break;	
}

mysqli_close($conexao);






// Espaço para as funções de Cases


function logarCliente($conexao){
	$titulo = 'logado';
	//echo "Email : ".$_POST['txt_email']." Senha: ".$_POST['txt_senha'];
	//exit();
	if(isset($_POST['txt_email']) && isset($_POST['txt_senha'])){
		$email = $_POST['txt_email'];
		$senha = $_POST['txt_senha'];
		$senhaCript = sha1($senha);
		$data_logar = logar_cliente($conexao,$email,$senhaCript);
		$pageName = (isset($_POST['page_name']))?  $_POST['page_name'] : "index.php";
		
		if($data_logar)
		{
				$data_log_Cli = dataCliente($data_logar);
				if($data_log_Cli['ativo'] == 'V'){
					$_SESSION['cli_email'] = $_POST['txt_email']; $_SESSION['cli_senha'] = $senhaCript;
					if(isset($_POST['lembrar']) && $_POST['lembrar'] == "1"){
						setcookie("cli_email",$_POST['txt_email'], time() + 60 * 60 * 24 * 7);
						setcookie("cli_senha",$senhaCript        , time() + 60 * 60 * 24 * 7);
					}
					//echo "<br/>".print_r($data_log_Cli)."ultima faze...<br/>";	
					//require_once('view_boas_vindas.php');
					if($pageName == 'login-e-cadastro.php'){ $pageName = 'solicitar-fotografo.php'; }
					header("Location: ".$pageName."");	
				}else{ 
					header("Location: ".$pageName."?errAtivacao=3243");
				}
											
		}else{
			header("Location: ".$pageName."?errAut=1873");
		}		
				
	}else if(isset($_SESSION['cli_email']) && isset($_SESSION['cli_senha'])){
		$sesEmail = $_SESSION['cli_email']; $sesSenha = $_SESSION['cli_senha'];		
		$data_logar = logar_cliente($conexao,$sesEmail, $sesSenha);
		if($data_logar){
			$data_log_Cli = dataCliente($data_logar);
			if($pageName == 'confirmado.php'){$pageName = 'index.php';}
			if($pageName == 'login-e-cadastro.php'){ $pageName = 'solicitar-fotografo.php'; }
			
			header("Loaction: ".$pageName."");
		}
	}else{
		header("Location: ".$pageName."?errAut=1873");
	}
		
}


function cadastrarCliente($conexao, $dir,$ext_img){
	if($_POST['txt_nome_cli'] && $_POST['txt_senha_cli'] && $_POST['txt_email_cli']){
		$nome = $_POST['txt_nome_cli']; $senha = sha1($_POST['txt_senha_cli']); $email = $_POST['txt_email_cli'];
		$identi  = "CL"; $tel = (isset($_POST['txt_tel_cli']))? $_POST['txt_tel_cli'] : " ";
		$cel = (isset($_POST['txt_cel_cli']))? $_POST['txt_cel_cli'] : " "; $img = (isset($_FILES['img_cli']))? $_FILES['img_cli'] : " ";
		$pageName = (isset($_POST['page_name']))?  $_POST['page_name'] : "index.php";
		$foto = "";
		@$email_explode = explode('@',$email);
		mkdir('../up_cli/'.$email_explode[0]);		
		
		if($img != " "){
			echo "<br/> imagem entrou".print_r($img);
						
			$dir = $dir.$email_explode[0];
			
			$file = $dir.$img['name'];
			$ext  = strtolower(end(explode(".",$img['name'])));
			if(array_search($ext,$ext_img) === 0 || array_search($ext,$ext_img) === 1 || array_search($ext,$ext_img) === 2){
				if(move_uploaded_file($img['tmp_name'],$file))
					$foto = $img['name'];
					//include("libs/wideimage/lib/WideImage.php");
					//WideImage::load($file)->resize(200,150)->saveToFile($dir."thumbnail/".$foto);
					//WideImage::load($file)->crop('center','center', 350,250)->saveToFile($dir."thumbnail_m/".$foto);
			}else{
				
				header("Location: ".$pageName."?erCadEmail=1287");
				//require_once('view_cadastro_cli.php');
			}
		}
			
		if(cadastro_cliente($conexao, $nome, $email, $senha, $tel, $cel, $identi , $foto)){			
			echo "Cadastro efetuado com sucesso!";
			EnviarEmailCliente($email);
			/*header("Location: ../".$pageName.""); */
			header("Location: ../confirmar.php");
		}else{
			header("Location: ../".$pageName."?erCadEmail=1287");		
		}
								
	}else{
		echo "Por favor Digite seu Nome, Email e Senha e  outros campos obrigatórios";
	}
}

//----------------------------------------------------------------------------------------------

function ativarCliente($conexao){
	if(isset($_GET['em'])){
		$email = $_GET['em'];
	}else{
		$email = null;
	}	
	$ativar = ativar_cliente($conexao,$email);
	if($ativar){
		echo "Parabens! você acaba de ativar seu cadastro!";	
		header("Location: ../confirmado.php");
	}else{
		echo "erro ao tentar ativar a conta";
	}
}



























// Funções de agilidade


function dataCliente($data_logar){

	while ($row = mysqli_fetch_array($data_logar)) {
		$data[] =  array("nome"=>$row['cli_nome'], "email"=>$row['cli_email'],"senha"=>$row['cli_senha'],"img"=>$row['cli_img_perf_dir'], "ativo"=>$row['cli_ativo'], "dir"=>$row['cli_dir']);
	}
	$lista = array('nome','email','senha','img','ativo','dir');				
				foreach($data as $linha){
					$lista['nome'] = $linha['nome'];
					$lista['email'] = $linha['email'];
					$lista['senha'] = $linha['senha'];
					$lista['img']   = $linha['img'];
					$lista['ativo'] = $linha['ativo'];
					$lista['dir']   = $linha['dir'];
				}
	return $lista;
}

function Session_verification(){
	if((isset($_SESSION['cli_email']) && isset($_SESSION['cli_senha'])) || (isset($_COOKIE['cli_email'] ) && isset($_COOKIE['cli_senha']) )  ){
		if(isset($_COOKIE['cli_email'] ) && isset($_COOKIE['cli_senha'])){
			$_SESSION['cli_email'] = $_COOKIE['cli_email']; 
			$_SESSION['cli_senha'] = $_COOKIE['cli_senha'];
			return true;
		}
		return true;
	}else
		return false;
}		

function unsetCookiesSessionCliente(){
	setcookie("cli_email","",time() -3600);
	setcookie("cli_email","",time() -3600);
	unset($_SESSION['cli_email']); unset($_SESSION['cli_senha']);
	unset($_COOKIE['cli_email']);  unset($_SESSION['cli_senha']);
}

function EnviarEmailCliente($email){
	require('corpo_email.php');
	
	$fotografo = array($email);
	$to_send = " ";
	$titulo  = "Obrigado por se cadastrar no macromia.";
	
	$from =  'MIME-Version: 1.0' . "\r\n";
	$from .= 'Content-type: text/html; charset=utf-8' . "\r\n";
	$from .= "From: sabrina@macromia.com.br";
	
	foreach($fotografo as $foto){
		$to_send .= $foto.", ";
	}
	
	$msg = "
		<p>Olá! Obrigado por se cadastrar no Macromia, abaixo está o link para confirmar seu cadastro.</p>
		<br/>
		<a href='http://www.macromia.com.br/helper/path_cad_cli.php?em=".$email."'>Clique aqui para confirmar seu cadastro.</a>
		<br/>
		<p>Em breve teremos mais recursos disponíveis em nosso sistema.</p>
	";
	
	if(mail($to_send,$titulo,$msg,$from) ) {
		echo "Email enviada com sucesso!";
	}else{
		echo "Erro ao eviar o email!";
	}
}























