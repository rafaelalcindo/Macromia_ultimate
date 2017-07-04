<?php

session_start();
$titulo = "Pagina de Login de Fotografo";
$conexao = mysqli_connect($db_host,$db_user, $db_pass,$db_name);
$dir = "up_foto/";
$ext_img = array('jpg','gif','png');

if(mysqli_connect_errno($conexao)){
	echo "A conexão falhou, Erro Reportado ".mysqli_connect_error();
	exit();
}else{
	echo "A conexão foi estabelecida com sucesso!";
}

require('mdl_foto.php');
require("foto.class.php");
require("foto_fisi.class.php");


if(isset($_GET['f'])){
	$passo = $_GET['f'];
}else{
	$passo = null;	
}

// Parte de Direcionamento ---------------------------------------------

switch ($passo){

	case 'logout':
		unsetSessionAndCookies();
		header("Location: index.php?r=login_foto");
	break;

	case 'logar':
		logarFotografo($conexao);
	break;
	
	case 'view_cad_foto':
		require_once('view_cad_foto.php');
	break;
	
	case 'cad_foto':
		(isset($_POST['rd_foto']))? $rd_foto = $_POST['rd_foto'] : $rd_foto = " ";
		if($rd_foto == 1){
			CadFotoFisico($conexao,$dir,$ext_img);
		}else{
			CadFotoJuri($conexao,$dir,$ext_img)	;
		}		
	break;
	
	case 'ativa_foto':
		ativaFotografo($conexao);
	break;
	
	case 'list_cli':
		if(session_verification()){
				require_once('view_list_cli_foto.php');
			}else{
				require_once('view_fotografo_login.php');
			}
	break;
	
	case 'list_cli_sele':
		require_once('filtro_pedido/lista_pedido.php');
	break;
	
	case 'view_comp_credi':
		if(session_verification()){
			require_once('view_comp_credi.php');
		}else{
			require_once('view_fotografo_login.php');
		}
	break;
	
	case 'comp_credi':
		compraCredito($conexao);
	break;
	
	case 'view_perf_foto':
		if(session_verification()){
				FotoPerfil($conexao);
			}else{
				require_once('view_fotografo_login.php');
			}
	break;
	
	default:
			if(session_verification()){
				logarFotografo($conexao);
			}else{
				require_once('view_fotografo_login.php');
			}
		break;
}


function logarFotografo($conexao){
	$titulo = 'logado';

	if(isset($_POST['txt_email_foto']) && isset($_POST['txt_senha_foto'])){
			$email = $_POST['txt_email_foto'];
			$senha_r = $_POST['txt_senha_foto'];
			$senha   = sha1($senha_r);
			(isset($_POST['rd_foto']))? $rd_foto = $_POST['rd_foto'] : $rd_foto = 0;
			
			echo "Val do radio: ".$rd_foto."<br/>";
			if($rd_foto == 1){
				$data_fisi = logar_foto_fisi($conexao,$email,$senha);

				if($data_fisi){					
					$data_log_fisi = data_foto_fisico($data_fisi);
					if($data_log_fisi['status'] == 'V'){
						
						$_SESSION['foto_email'] = $_POST['txt_email_foto']; $_SESSION['foto_senha'] = $senha; $_SESSION['ident'] = $data_log_fisi['ident'];
						if(isset($_POST['cbx_lembrar_foto']) && $_POST['cbx_lembrar_foto'] == "1"){
							setcookie("fotografoEmail",$_POST['txt_email_foto'], time() + 60 * 60 * 24 * 7);
							setcookie("fotografoSenha",$senha                  , time() + 60 * 60 * 24 * 7);
							setcookie("ident"         ,$data_log_fisi['ident'] , time() + 60 * 60 * 24 * 7);
						}
						echo '<br/>'.print_r($data_log_fisi)." ultima faze... <br/>";
						require_once('view_boas_vidas.php');
					}else{ echo 'a sua conta ainda não foi ativada, por favor varifique o seu email!'; require_once('view_fotografo_login.php'); }
					
				}else{
					echo 'Por Favor Digite seu email e senha correto fisico';
					require('view_fotografo_login.php');
				}
			// ----------------------  Cadastro Fotografo Jurídico -----------------------------------
			}else if($rd_foto == 2){
				$data_juri = logar_foto_juri($conexao,$email,$senha);
				if($data_juri){
					$data_log_juri = data_foto_juridico($data_juri);
					if($data_log_juri['status'] == 'V'){
						$_SESSION['foto_email'] = $_POST['txt_email_foto']; $_SESSION['foto_senha'] = $senha; $_SESSION['ident'] = $data_log_juri['ident'];
						if(isset($_POST['cbx_lembrar_foto']) && $_POST['cbx_lembrar_foto'] == "1"){
							setcookie("fotografoEmail",$_POST['txt_email_foto'], time() + 60 * 60 * 24 * 7);
							setcookie("fotografoSenha",$senha				   , time() + 60 * 60 * 24 * 7);
							setcookie("ident"	      ,$data_log_juri['ident'] , time() + 60 * 60 * 24 * 7);
						}
						echo '<br/>'.print_r($data_log_juri)." ultima faze... <br/>";
						require_once('view_boas_vidas.php');
					}else{ echo 'a sua conta ainda não foi ativada, por favor verifique o seu email!'; require_once('view_fotografo_login.php'); }
				}else{ echo 'Por favor Digite seu email e senha correto juridico'; require_once('view_fotografo_login.php'); }  // fim if data_juri
			}else{echo 'Selecione uma Opção'; require_once('view_fotografo_login.php');} // fim da verificação fotografo
			


			// Parte 2 em SESSIONS.........................................

	}else if(isset($_SESSION['foto_email']) && isset($_SESSION['foto_senha'])){
			$sesEmail = $_SESSION['foto_email']; $sesSenha = $_SESSION['foto_senha'];
			
			if($_SESSION['ident'] == 'FF'){
				$data_fisi = logar_foto_fisi($conexao,$sesEmail,$sesSenha);
				if($data_fisi){
					$data_log_fisi = data_foto_fisico($data_fisi);
					require_once('view_boas_vidas.php');
				}
			}else{
				$data_juri = logar_foto_juri($conexao,$sesEmail,$sesSenha);
				if($data_juri){
					$data_log_juri = data_foto_juridico($data_juri);
					require_once('view_boas_vidas.php');
				}
			}
			
	}else{
		echo '<br/> Por Favor Digite o login ou senha correto';
		require_once('view_fotografo_login.php');
	}
}


function CadFotoFisico($conexao,$dir,$ext_img){
	require('foto_function.php');
	if(isset($_POST['txt_foto_nome']) && isset($_POST['txt_foto_email']) && isset($_POST['txt_foto_pass']) && isset($_POST['txt_foto_cpf'])){
		$foto_fisi = new Foto_fisi();
		$foto_fisi->setNome($_POST['txt_foto_nome']);   $foto_fisi->setEmail($_POST['txt_foto_email']);
		$foto_fisi->setSenha($_POST['txt_foto_pass']);  $foto_fisi->setCpf($_POST['txt_foto_cpf']);		
		$foto_fisi->setTel((isset($_POST['txt_foto_tel']))? $_POST['txt_foto_tel'] : " ");
		$foto_fisi->setCel((isset($_POST['txt_foto_cel']))? $_POST['txt_foto_cel'] : " ");
		$foto_end = $_POST['txt_foto_end'];    $foto_num = $_POST['txt_foto_num']; $foto_esta = $_POST['txt_foto_estado'];
		$foto_cid = $_POST['txt_foto_cidade']; 
		$ident = "FF";
		$foto_fisi->setFotoIdent($ident);
		$img = 	(isset($_FILES['img_foto']))? $_FILES['img_foto'] : " ";
		$senha_encry = EncryptSenhaSha1($foto_fisi->getSenha());
		
		if($img['size'] != 0){
			$foto = AddImageFotoFisi($img,$dir,$ext_img, $foto_fisi->getEmail());
			echo " Foto ".$foto; 
			if(!$foto)
				exit();
		}else
			$foto = " ";
		
		$resultado = cadFotoFisi($conexao,$ident, $foto, $foto_fisi->getNome(), $foto_fisi->getEmail(), $senha_encry, $foto_fisi->getTel(), $foto_fisi->getCel(), $foto_fisi->getCpf(),$foto_end,$foto_num,$foto_esta,$foto_cid);
		
		if($resultado){
			echo "Cadastro efetuado com sucesso!";			
			EnviarEmailFotogrado($foto_fisi->getEmail() ,$ident);
			require_once('view_fotografo_login.php');
		}else{
			echo "O cadastro Falhou.";
		}								
	}
}

function CadFotoJuri($conexao,$dir,$ext_img){
	require('foto_function.php');
	if(isset($_POST['txt_foto_nome']) && isset($_POST['txt_foto_email']) && isset($_POST['txt_foto_pass']) && isset($_POST['txt_foto_cnpj']) ){
		$foto_juri_nome = $_POST['txt_foto_nome']; $foto_juri_email = $_POST['txt_foto_email'];  $foto_juri_senha = $_POST['txt_foto_pass'];
		$foto_juri_cnpj = $_POST['txt_foto_cnpj']; 
		$foto_juri_tel  = (isset($_POST['txt_foto_tel']))? $_POST['txt_foto_tel'] : " "; 
		$foto_juri_cel  = (isset($_POST['txt_foto_cel']))? $_POST['txt_foto_cel'] : " ";
		$foto_juri_end  = $_POST['txt_foto_end']; $foto_juri_num = $_POST['txt_foto_num']; $foto_juri_esta = $_POST['txt_foto_estado'];
		$foto_juri_cid  = $_POST['txt_foto_cidade'];
		$ident = "FJ";
		$img = (isset($_FILES['img_foto']))? $_FILES['img_foto'] : " ";
		$senhaEncrypt = EncryptSenhaSha1($foto_juri_senha);
		$foto_img_dir = criarDirFotografo($dir,$foto_juri_email);
		
		if($img['size'] != 0){
			$foto = AddImageFotoJuri($img,$dir,$ext_img);
			if(!$foto){
				echo "Erro ao salvar a imagem, o arquivo não é compativel com jpg, png e gif";
			}// fim do if verifica foto
		}else{
			$foto = " ";
		}// fim do if Adicionar Foto...
		
		$resultado = cadFotoJuridico($conexao,$ident, $foto, $foto_juri_nome, $foto_juri_email, $senhaEncrypt, $foto_juri_tel, $foto_juri_cel, $foto_juri_cnpj, $foto_juri_end, $foto_juri_num, $foto_juri_esta, $foto_juri_cid);
		
		if($resultado){
			echo "Cadastro efetuado com sucesso!";
			EnviarEmailFotogrado($foto_juri_email, $ident);
			require_once('view_fotografo_login.php');
		}else{
			echo "O cadastro Falhou";
		}// fim da verificação do resultado
	}
}

function FotoPerfil($conexao){
	if(isset($_GET['foto_id'])){
		(isset($_GET['ident']))? $ident = $_GET['ident'] : $ident = " ";
		$id = $_GET['foto_id'];
		$id_decode = base64_decode($id);
		echo "<br/> Id é - ".$id." e a ident: ".$ident." Funcionou!!! <br/>";
		$perf_foto = perfFoto($conexao,$id_decode, $ident);
		if($perf_foto){
			$perf_foto_data = data_perf_foto($perf_foto, $ident);
			require_once('view_perf_foto.php');
		}
	}else{ 
		echo "<br/> Vixi falhou!";
	}
		
}


function ListaPediCli(){
	if(isset($_POST['sele_servico'])){ $servico = $_POST['sele_servico']; }else{ $servico = " "; }
	if(isset($_POST['estado'])){ $estado = $_POST['estado']; }else{ $estado = ""; }
	if(isset($_POST['cidade'])){ $cidade = $_POST['cidade']; }else{ $cidade = ""; }
	
}



//  -------------------------- activation----------

function ativaFotografo($conexao){
	if(isset($_GET['em']) && isset($_GET['in'])){
		$email = $_GET['em']; $ident = $_GET['in'];
	}else{
		$email = null; $ident = $_GET['in'];
	}
	$ativa = ativar_fotografo($conexao, $email,$ident);
	
	if($ativa){
		echo "Parabens! você acaba de ativar seu cadastro!";
		require_once('view_confirm_foto.php');
	}else{
		echo "erro ao tentar ativar a conta";
	}
	
}


function compraCredito($conexao){
  $foto_id      = (isset($_POST['id_foto']))?    $_POST['id_foto']  : " ";
  $foto_ident   = (isset($_POST['ident']))? 	 $_POST['ident'] : " ";
  $foto_credi   = (isset($_POST['credi_foto']))? $_POST['credi_foto'] : " ";
  $quanti_credi = (isset($_POST['txt_credi']))?  $_POST['txt_credi'] : " ";
  $email		= (isset($_POST['email']))?      $_POST['email'] : " ";
  $senha 		= (isset($_POST['senha']))?      $_POST['senha'] : " ";
// $quanti_credi = (isset($_POST['rd_credi']))? $_POST['rd_credi'] : " ";
  // inicio da verificação e da trasação
  if($quanti_credi != " " && $foto_id != " " && $foto_credi != " "){
	   
	   if($foto_ident == "FF"){
		   	$data_fisi = logar_foto_fisi($conexao,$email,$senha);
			if($data_fisi){
				$data_log = data_foto_fisico($data_fisi);
			}
		}else{
			$data_juri = logar_foto_juri($conexao,$email,$senha);
			if($data_juri){
				$data_log = data_foto_juridico($data_juri);
			}
	}
	
	$dados_cobrar_credi = dados_foto_credi($data_log);
	$dados_quanti_info  = quanti_info_pagar($quanti_credi);
	$processo_pagamento = processo_pagamento($conexao ,$dados_cobrar_credi, $dados_quanti_info, $email, $senha, $foto_credi, $foto_ident);
	  
  }else{  }// fim da verificação de crédito!!!
  
}






















function data_credi_tipo($conexao, $valor_credi){
	$dados_credit = credito_selecionado($conexao, $valor_credi);
	
	while($row = mysqli_fetch_array($dados_credit)){
		$data_credi[] = array("codigo"=>$row['codigo'], "valor"=>$row['valor'],"descri"=>$row['descri']);
	}
	$lista = array('codigo','valor','descri');
	echo "<br/>".print_r($data_credi)." dados do credito<br/> ";
	foreach($data_credi as $linha){
		$data_credi['codigo'] = $linha['codigo'];
		$data_credi['valor']  = $linha['valor'];
		$data_credi['descri'] = $linha['descri'];
	}
	return $data_credi;
}




// Funções de Atalho de Código

function data_foto_fisico($data_fisi){
	
	while($row = mysqli_fetch_array($data_fisi)) {
		$data[] = array("cod"=>$row['cod'],"nome"=>$row['nome'], "email" => $row['email'], "tel" =>$row['tel'], "cel"=>$row['cel'],"cpf" => $row['cpf'], "imagem"=>$row['imagem'], "ident"=>$row['ident'], "status"=>$row['status'], "senha" => $row['senha']);
	}
	$lista = array('cod','nome','email','tel','cel','cpf','imagem','ident','status','senha');
	echo "<br/>".print_r($data)." dados do fotografo<br/>";
	foreach ($data as $linha) {
		$lista['cod']	  = $linha['cod'];
		$lista['nome']    = $linha['nome'];
		$lista['email']   = $linha['email'];
		$lista['tel']     = $linha['tel'];
		$lista['cel']     = $linha['cel'];
		$lista['cpf']	  = $linha['cpf'];
		$lista['imagem']  = $linha['imagem'];
		$lista['ident']	  = $linha['ident'];
		$lista['status']  = $linha['status'];
		$lista['senha']   = $linha['senha'];
	}
	
	return $lista;
}

function data_foto_juridico($data_juri){
	while($row = mysqli_fetch_array($data_juri)){
		$data[] = array("cod"=>$row['cod'], "nome"=>$row['nome'], "email"=>$row['email'], "tel"=>$row['tel'], "cel"=>$row['cel'], "cnpj"=>$row['cnpj'], "imagem"=>$row['imagem'], "ident"=>$row['ident'], "status" => $row['status'], "senha" => $row['senha']);
	}
	$lista = array('cod','nome','email','tel','cel','cnpj','imagem','ident','status','senha');
	echo "<br/>".print_r($data)." dados do fotografo<br/>";
	foreach($data as $linha){
		$lista['cod']    = $linha['cod'];
		$lista['nome']   = $linha['nome'];
		$lista['email']  = $linha['email'];
		$lista['tel']    = $linha['tel'];
		$lista['cel']    = $linha['cel'];
		$lista['cnpj']   = $linha['cnpj'];
		$lista['imagem'] = $linha['imagem'];
		$lista['ident']  = $linha['ident'];
		$lista['status'] = $linha['status'];
		$lista['senha']  = $linha['senha'];
	}
	return $lista;
}




function data_perf_foto($perf_foto, $ident){
	if($ident == "FF"){
		while($row = mysqli_fetch_array($perf_foto)){
		$data[] = array("cod"=>$row['cod'], "nome"=>$row['nome'],"email"=>$row['email'],"tel"=>$row['tel'],"cel"=>$row['cel'], "cpf"=>$row['cpf'],"end"=>$row['end'],"num"=>$row['num'], "estado"=>$row['estado'],"cidade"=>$row['cidade'],"img"=>$row['img']);       
		}
		$lista = array('cod','nome','email','tel','cel','cpf','end','num','estado','cidade','img');
		foreach($data as $linha){
			$lista['cod']     = $linha['cod'];
			$lista['nome']    = $linha['nome'];
			$lista['email']   = $linha['email'];
			$lista['tel']     = $linha['tel'];
			$lista['cel']     = $linha['cel'];
			$lista['cpf']	  = $linha['cpf'];
			$lista['end']     = $linha['end'];
			$lista['num']     = $linha['num'];
			$lista['estado']  = $linha['estado'];
			$lista['cidade']  = $linha['cidade'];
			$lista['img']     = $linha['img'];
		}
		return $lista;
	}else if($ident == "FJ"){  // Fim do if Ident FF
		while($row = mysqli_fetch_array($perf_foto)){
			$data[] = array("cod"=>$row['cod'], "nome"=>$row['nome'], "email"=>$row['email'], "tel"=>$row['tel'], "cel"=>$row['cel'], "cnpj"=>$row['cnpj'],"end"=>$row['end'], "num"=>$row['num'], "estado"=>$row['estado'],"cidade"=>$row['cidade'],"img"=>$row['img']);
		}
		$lista2 = array('cod','nome','email','tel','cel','cnpj','end','num','estado','cidade','img');
		foreach($data as $linha){
			$lista2['cod']     = $linha['cod'];
			$lista2['nome']    = $linha['nome'];
			$lista2['email']   = $linha['email'];
			$lista2['tel']	   = $linha['tel'];
			$lista2['cel']	   = $linha['cel'];
			$lista2['cnpj']	   = $linha['cnpj'];
			$lista2['end']     = $linha['end'];
			$lista2['num']	   = $linha['num'];
			$lista2['estado']  = $linha['estado'];
			$lista2['cidade']  = $linha['cidade'];
			$lista2['img']     = $linha['img'];
		}
		return $lista2;
	} // fim do if que verifica a ident
}


function session_verification(){
	if((isset($_SESSION['foto_senha']) && isset($_SESSION['foto_email']) && isset($_SESSION['ident']) ) || (isset($_COOKIE['fotografoEmail']) && isset($_COOKIE['fotografoSenha']) && isset($_COOKIE['ident']) ) ) {

		if(isset($_COOKIE['fotografoEmail']) && isset($_COOKIE['fotografoSenha']) && isset($_COOKIE['ident']) ){
			$_SESSION['foto_email'] = $_COOKIE['fotografoEmail'];
			$_SESSION['foto_senha'] = $_COOKIE['fotografoSenha'];
			$_SESSION['ident']      = $_COOKIE['ident'];
			
			return true;
		}
		return true;
	}else
		return false; 
}

function unsetSessionAndCookies(){
		setcookie("fotografoEmail","", time() -3600);
		setcookie("fotografoSenha","", time() -3600);
		setcookie("ident"         ,"", time() -3600);
		unset($_SESSION['foto_email']);     unset($_SESSION['foto_senha']);    unset($_SESSION['ident']);
		unset($_COOKIE['fotografoEmail']);  unset($_COOKIE['fotografoSenha']); unset($_SESSION['ident']);
}

function EncryptSenhaSha1($senha){
	$senha_encry = sha1($senha);
	echo "<br/> encrypt: ".$senha_encry." here <br/>";
	return $senha_encry;
}

function AddImageFotoFisi($img,$dir,$ext_img, $email){
	echo "<br/> imagem entrou ".print_r($img)." Essa e a imagem<br/>";
	$email_explode = explode("@",$email);
	mkdir($dir.$email_explode[0]);
	$getDir = getcwd();
	$dir    = $getDir.$dir.$email_explode[0];
	echo "<br/> Aqui está o diretório: ".$dir."<br/> ";
	exit;
	$file = $dir.$img['name'];
	echo "<br/> Essse é o diretorio do arquivo ".$file."  <-- <br/>";
	$ext  = strtolower(end(explode(".",$img['name'])));
	echo " extencao -->  ".$ext." <br/>";
	echo " array echo...>  ".print_r(array_search($ext,$ext_img))."  end <br/>";
	if(array_search($ext,$ext_img) === 0 || array_search($ext,$ext_img) === 1 || array_search($ext,$ext_img) === 2){
		if(move_uploaded_file($img['tmp_name'],$file)){
				$foto = $img['name'];
				return $foto;
			}	
	}else{
		echo "Falha ao fazer o upload do arquivo";
		return false;
	}	
}

function AddImageFotoJuri($img, $dir, $ext_img){
	echo "<br/> a imagem entrou ".print_r($img)." Essa é a imagem<br/>"; // Verificado se a image realmente chegou na função
	$file = $dir.$img['name']; // pegando o diretório e ajuntando com o nome da imagem.
	echo "<br/> Esse é o diretório do arquivo ".$file." <-- <br/>";
	$ext = strtolower(end(explode(".",$img['name']) ) );
	echo " extencao --> ".$ext." <br/>";
	echo " array echo...> ".print_r(array_search($ext, $ext_img))."  end <br/>";
	if(array_search($ext, $ext_img) === 0 || array_search($ext,$ext_img) === 1 || array_search($ext,$ext_img) === 2 ){
		if(move_uploaded_file($img['tmp_name'],$file)){
			$foto = $img['name'];
			return $foto;
		}// fim do if do move_iploaded_file
	}else{     
		echo "Falha ao fazer o upload do arquivo";
		return false;
	} // fim do if do arraySearch
}


function criarDirFotografo($dir_atual, $email){
	$email_explode = explode('@',$email);
	$email_dir = $email_explode[0];
	mkdir($dir_atual."/".$email_dir);
	$new_dir_image = $dir_atual."/".$email_dir;
	return $new_dir_image;
}

//------------------------------------------- combrar créditos ---------------------------------------------------







function dados_foto_credi($array_foto){
	
	 
	
	$cod_compra = rand(1000, 1000000);
	
	if($array_foto['tel'] != " "){
		$tel_ddd  = substr($array_foto['tel'],1,2);
		$tel_comp = substr($array_foto['tel'],4,9);
		$tel_comp_array = explode("-",$tel_comp);
		$tel_comp_final = implode("",$tel_comp_array);
		$cel_comp_final = " ";
		$cel_ddd		= " ";
	}else if($array_foto['cel'] != " "){
		$cel_ddd  = substr($array_foto['cel'],1,2);
		$cel_comp = substr($array_foto['cel'],4,9);
		$cel_comp_array = explode("-",$cel_comp);
		$cel_comp_final = implode("",$cel_comp_array);
		$tel_comp_final = " ";
		$tel_ddd		= " ";
	}
	
    $cpf  = (isset($array_foto['cpf']))? $array_foto['cpf'] : " ";
	$cnpj = (isset($array_foto['cnpj']))? $array_foto['cnpj'] : " ";
	
	if($cpf != " "){
		$foto_ident_send = $cpf;
	}else if($cnpj != " "){
		$foto_ident_send = $cnpj;
	}
	
	if($array_foto['ident'] == "FF"){
		$info_credi = array("nome" => $array_foto['nome'], "email" => $array_foto['email'], "tel_ddd" => $tel_ddd, "cel_ddd" => $cel_ddd, "tel" => $tel_comp_final, "cel" => $cel_comp_final, "docu" => $foto_ident_send, "cod_compra" => $cod_compra);		
	}else if($array_foto['ident'] == "FJ"){
		$info_credi = array("nome" => $array_foto['nome'], "email" => $array_foto['email'], "tel_ddd" => $tel_ddd, "cel_ddd" => $cel_ddd, "tel" => $tel_comp_final, "cel" => $cel_comp_final, "docu" => $foto_ident_send, "cod_compra" => $cod_compra);		
	}
	
	echo "The array: ".print_r($info_credi)." best Seller<br/>";
	echo "This is the code of the Product: ".$cod_compra;
		
	
		
	return $info_credi;
		
}

function quanti_info_pagar($quantidade){
	$itens = array(
		0 => array(
			'id' => '6red170',
			'description' => 'Quantidade de créditos a vender',
			'quantity' => $quantidade,
			'amount' => 1.00,
			'weight' => 0
		)
	);
	return $itens;
}

function processo_pagamento($conexao, $array_pg, $quant_itens, $email, $senha, $credi_atual, $ident){
	require_once "pg_seguro/source/PagSeguroLibrary/PagSeguroLibrary.php";
	$email_teste = "rafael_alcindo@hotmail.com";
	
	$urlNotificacao = "http://macromia.com.br/testephp/pagseguro/notificacao.php?compra=".$array_pg['cod_compra'];                   
	$urlFim  		= "http://macromia.com.br/testephp/pagseguro/fimcompra.php?cod=".$array_pg['cod_compra'];
	
	$requisicaoPagamento = new PagSeguroPaymentRequest();
	
	$credenciais = PagSeguroConfig::getAccountCredentials();
	
	$requisicaoPagamento->setItems($quant_itens);
	
	$requisicaoPagamento->setSender($array_pg['nome'], $email_teste, $array_pg['tel_ddd'], $array_pg['tel']);
	
	$requisicaoPagamento->setCurrency("BRL");
	
	$requisicaoPagamento->setReference($array_pg['cod_compra']);
	
	$requisicaoPagamento->setRedirectURL($urlFim);
	
	$requisicaoPagamento->addParameter('notificationURL', $urlNotificacao);
	
	$url = $requisicaoPagamento->register($credenciais);
	
	$credi_atual = $credi_atual + 5;
	
	$salva_credi_foto = adiciona_credito($conexao,$email,$senha,$ident,$credi_atual);
	
	header("Location: ".$url);
	
	exit;
	
}





