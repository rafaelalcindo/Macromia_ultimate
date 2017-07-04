<?php
header('Content-Type: text/html; charset=utf-8');
$conexao = mysqli_connect($db_host,$db_user, $db_pass,$db_name);
mysql_query("SET NAMES 'utf8'");
mysql_query('SET character_set_connection=utf8');
mysql_query('SET character_set_client=utf8');
mysql_query('SET character_set_results=utf8');

session_start();

if(mysqli_connect_errno($conexao)){
	echo "A conexão falhou, Erro Reportado ".mysqli_connect_error();
	exit();
}else{
	echo "A conexão foi estabelecida com sucesso!";
}

require('function_servico.php');
require('mdl_servicos.php');
require('corpo_email_servico.php');

if(isset($_GET['s'])){
	$passo = $_GET['s'];
}else{
	$passo = null;
}



switch($passo){
	
	case 'solicitar_foto':
		sevicoSelect($conexao);
	break;
	
	default:
		require('view_vista.php');
	break;	
	
}

mysqli_close($conexao);



function sevicoSelect($conexao){
	if(isset($_POST['Pedido'])){   $eventos_str          = implode(",",$_POST['Pedido']);      $eventos_array          = explode(",",$eventos_str); }else{ $eventos_array = " "; }
	if(isset($_POST['Edicao'])){   $edicao_str			 = implode(",",$_POST['Edicao']);      }

	/* if(isset($_POST['books'])){	$book_str           = implode(",",$_POST['books']);        $book_array             = explode(",", $book_str); 	}else{ $book_array = " "; }
	if(isset($_POST['publicidade'])){  $publicidade_str = implode(",", $_POST['publicidade']); $publicidade_array      = explode(",", $publicidade_str); }else{ $publicidade_array = " "; }	
	if(isset($_POST['natureza'])){ $natureza_str        = implode(",", $_POST['natureza']);    $natureza_array         = explode(",", $natureza_str); }else{ $natureza_array = " "; }
	if(isset($_POST['artistico'])){ $artistico_str      = implode(",", $_POST['artistico']);   $artistico_array        = explode(",", $artistico_str); }else{ $artistico_array = " "; }
	if(isset($_POST['cientifico'])){ $cientifico_str    = implode(",", $_POST['cientifico']);  $cientifico_array       = explode(",", $cientifico_str); }else{ $cientifico_array = " "; }
	if(isset($_POST['outros'])){  $outros_str           = implode(",", $_POST['outros']);      $outros_array           = explode(",", $outros_str); }else{ $outros_array = " "; } */
	
	if(isset($_POST['Filmagem'])){ 		      $filmagem		= $_POST['Filmagem'];      }
	if(isset($_POST['cli_email_pedi'])){      $email_cli   	= $_POST['cli_email_pedi']; }
	if(isset($_POST['txt_data'])){    	      $data_evento    = $_POST['txt_data'];    }else{ $data_evento = " "; }
	if(isset($_POST['txt_hora'])){ 	          $horario_evento = $_POST['txt_hora'];    }else{ $horario_evento  = " "; }
	if(isset($_POST['sele_estado'])){         $estado_evento  = $_POST['sele_estado']; }else{ $estado_evento = " "; }
	if(isset($_POST['sele_cidade'])){         $cidade_evento  = $_POST['sele_cidade']; }else{ $cidade_evento = " "; }
	if(isset($_POST['txt_area_observacao'])){ $area_observa   = $_POST['txt_area_observacao'];  }else{ $area_observa = " "; }
	
	if(isset($_POST['txt_numero'])){  	 $loca_num   	= $_POST['txt_numero'];   }else{ $loca_num    = " "; }
	if(isset($_POST['txt_endereco'])){   $loca_ende   	= $_POST['txt_endereco']; }else{ $loca_ende = " "; }
	
	
	
	$data_event_insert = FormataDataMysql($data_evento);
	echo "<br/> Data do Evento -> ".$data_event_insert." <-- <br/>";
	
	
	if(isset($_POST['Orcamento'])){
			$orcamento = $_POST['Orcamento'];
			echo "Valor Orcamento: ".$orcamento."<br/>";
			
			if($orcamento == 1){
				$orc_min = 100; $orc_max = 1000;
			}else if($orcamento == 2){
				$orc_min = 1000; $orc_max = 2000;
			}else if($orcamento == 3){
				$orc_min = 2000; $orc_max = 5000;
			}else if($orcamento == 4){
				$orc_min = 5000; $orc_max = 10000;
			}else if($orcamento == 5){
				$orc_min = 10000; $orc_max = 600000;
			}
		}
	
	echo " email do cliente ".$email_cli." <br/>";
	echo "Valor orca_min: ".$orc_min." orca_max: ".$orc_max."<br/>";
	
	$id_cli = getIdCliente($conexao, $email_cli);
	echo "Aqui está o id do cliente: ".$id_cli."  <- <br/>";
	
	//$resultado = inserirEvento();	
	$eventos = array();
	$eventos[] = $eventos_array;
	
	
	echo " Valores do Array: ".print_r($eventos)."<br/>";
	
	foreach($eventos as $data){
  		if(is_array($data)){
			foreach($data as $other_data){
				echo "-".$other_data."<br/>";
				$event_enviar = $other_data;
			}
		}else{
			echo "-".$data."<br/>";
			$event_enviar = $data;
		}
	}
	
	$resultadoSql = inserirEvento($conexao,$event_enviar,$id_cli,$data_event_insert,$horario_evento, $loca_num, $orc_min, $orc_max,$cidade_evento ,$estado_evento, $loca_ende, $area_observa, $filmagem, $edicao_str);
	
	if($resultadoSql){
		sendEmail($event_enviar,$email_cli);	
		echo "Cadastro deu certo!";
		//header("Location: index.php?r=login");
		header("Location: ../index.php");
	}else{
		echo "Falha oa cadastrar eventos!";
	}
	
}








































function FormataDataMysql($data){
	$dataMod = DateTime::createFromFormat('d/m/Y',$data);
	return $dataMod->format('Y-m-d');
}





function sendEmail($eventos,$email_cli){
	$fotografo = array('bruno@mazy.com.br','igor.rios@mazy.com.br','rafael@mazy.com.br','computer10intelligent@hotmail.com');
	$to_send = " ";
	$titulo  = "temos clientes com email ".$email_cli." procurando seu serviço.";
	
	$from =  'MIME-Version: 1.0' . "\r\n";
	$from .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
	$from .= "From: rafael10expert@gmail.com";
	
	$msg = corpoEmailServ($eventos, $email_cli);
	
	foreach($fotografo as $foto){
		$to_send .= $foto.", ";
	}
	
	
	if(mail($to_send,$titulo,$msg,$from)){
		echo "Mensagem enviada com sucesso!";
	}else{ echo "não foi possivel enviar a mensagem."; }
		
}
