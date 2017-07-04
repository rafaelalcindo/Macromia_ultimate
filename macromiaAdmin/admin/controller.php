<?php

session_start();
$titulo  = "Pagina de Login de Fotografo";
$conexao = mysqli_connect($db_host,$db_user, $db_pass,$db_name);
$dir  	 = "admin_foto/";
$ext_img = array('jpg','gif','png');

if(mysqli_connect_errno($conexao)){
	echo "A conexão falhou, Erro Reportando ".mysqli_connect_error();
	exit;
}else{
	//echo "A conexão foi estabelecida com sucesso!";
}

require('mdl_admin.php');


if(isset($_GET['ad'])){
	$passo = $_GET['ad'];
}else{
	$passo = null;
}

switch($passo){
	
	case 'logout':
		unsetSessionsAndCookies();
		header("Location: index.php?r=admin");
	break;
	
	case 'logar_admin':
		painel_admin($conexao);
	break;
	
	case 'view_painel_cli':
		require_once('view_painel_cli.php');
	break;
	
	case 'adm_visu_cli':
		if(session_verification()){
			require_once('view_adm_op_cli_foto.php');
		}else{
			require_once('view_admin_login.php');
		}
	break;
	
	default:
		if(session_verification()){
			painel_admin($conexao);
		}else{
			require_once('view_admin_login.php');
		}		
	break;	
}

function painel_admin($conexao){
	$usuario = (isset($_POST['usuario']))? $_POST['usuario'] : " ";
	$senha   = (isset($_POST['senha']))?   $_POST['senha']   : " ";

	$logar_admin = logar_admin($conexao,$usuario,$senha);
	
	if($usuario != " " && $senha != " "){
		if($logar_admin){
			$log_admin = data_log_admin($logar_admin);
			$_SESSION['admin_login'] = $usuario; $_SESSION['admin_senha'] = $senha; $_SESSION['admin_nivel'] = $log_admin['nivel']; $_SESSION['admin_dep'] = $log_admin['dep'];
			if(isset($_POST['cbx_lembrar_admin']) && $_POST['cbx_lembrar_admin'] == "1"){
				setcookie("admin_login", $usuario, 					  time() + 60 * 60 * 24 * 7);	
				setcookie("admin_senha", $senha,   					  time() + 60 * 60 * 24 * 7);
				setcookie("admin_nivel", $logar_admin['admin_nivel'], time() + 60 * 60 * 24 * 7);
				setcookie("admin_dep",   $logar_admin['admin_dep'],	  time() + 60 * 60 * 24 * 7);			
				}
				require_once('view_painel_prin.php');
		}else{ echo 'login ou senha incorreto!'; require_once('view_admin_login.php'); }
	}else if($_SESSION['admin_login'] && $_SESSION['admin_senha']){
		$usuario_ses = $_SESSION['admin_login'];  $senha_ses = $_SESSION['admin_senha'];
		
		$logar_admin = logar_admin($conexao,$usuario_ses, $senha_ses);
		if($logar_admin){
			$log_admin = data_log_admin($logar_admin);
			require_once('view_painel_prin.php');
		}		
	}
}













//------------------------------------------------------- part of HELPERS ---------------------------------------------------------



function data_log_admin($log_admin){
	while($row = mysqli_fetch_array($log_admin)){
		$data[] = array("login"=>$row['login'], "senha"=>$row['senha'], "nivel"=>$row['nivel'], "dep"=>$row['dep']);
	}
	$lista = array('login','senha','nivel','nivel','dep');
	foreach($data as $linha){
		$lista['login'] = $linha['login'];
		$lista['senha'] = $linha['senha'];
		$lista['nivel'] = $linha['nivel'];
		$lista['dep']	= $linha['dep'];
	}
	return $lista;	
}





function session_verification(){
	if((isset($_SESSION['admin_login']) && isset($_SESSION['admin_senha']) && isset($_SESSION['admin_nivel']) && isset($_SESSION['admin_dep']) )
	 || (isset($_COOKIE['admin_login']) && isset($_COOKIE['admin_senha']) && isset($_COOKIE['admin_nivel']) && isset($_COOKIE['admin_dep']) ) ){
		 
		 if((isset($_COOKIE['admin_login']) && isset($_COOKIE['admin_senha']) && isset($_COOKIE['admin_nivel']) && isset($_COOKIE['admin_dep']) )){
			$_SESSION['admin_login'] = $_COOKIE['admin_login'];
			$_SESSION['admin_senha'] = $_COOKIE['admin_senha'];
			$_SESSION['admin_nivel'] = $_COOKIE['admin_nivel'];
			$_SESSION['admin_dep']   = $_COOKIE['admin_dep'];
			
			return true;
		}
		return true;		 
	}else
		return false;
}

function unsetSessionsAndCookies(){
	setcookie("admin_login", "", time() -3600);
	setcookie("admin_senha", "", time() -3600);
	setcookie("admin_nivel", "", time() -3600);
	setcookie("admin_dep",   "", time() -3600);
	
	unset($_SESSION['admin_login']); unset($_SESSION['admin_senha']); unset($_SESSION['admin_nivel']); unset($_SESSION['admin_dep']);
	unset($_COOKIE['admin_login']);  unset($_COOKIE['admin_senha']);  unset($_COOKIE['admin_nivel']);  unset($_COOKIE['admin_dep']);
}







