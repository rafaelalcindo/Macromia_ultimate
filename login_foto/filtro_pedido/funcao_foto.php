<?php

header("Expires: Mon, 21 Out 1991 00:00:00 GMT");
header("Cacho-control: no-cache");
header("Progma: no-cache");

$db_host = "127.0.0.1";
$db_user = "root";
$db_pass = "";
$db_name = "mazy_projeto03";


$conexao = mysqli_connect($db_host,$db_user, $db_pass, $db_name);
	//mysqli_select_db("mazy_projeto02",$conexao);
	
	
if(mysqli_connect_errno($conexao)){
	echo "A conexão falhou, Erro Reportado ".mysqli_connect_error();
	exit();
}else{
	//echo "A conexão foi estabelecida com sucesso! -- Page  ";
}

require('filtro_cli.php');
require('limite_creditos.php');

//---------------------------------------------------------------------------------------------------

(isset($_GET['id_foto']))?     $id_foto     = $_GET['id_foto']     : $id_foto  = " ";
(isset($_GET['id_evento']))?   $id_event    = $_GET['id_evento']   : $id_event = " ";
(isset($_GET['credi_foto']))?  $credi_foto  = $_GET['credi_foto']  : $credi_foto =  0;
(isset($_GET['credi_event']))? $credi_event = $_GET['credi_event'] : $credi_foto =  0;
(isset($_GET['vagas']))?       $vagas_event = $_GET['vagas']       : $vagas_event = 0;
(isset($_GET['cod_active']))?  $cod_active  = $_GET['cod_active']  : $cod_active  = 0;


if($id_foto != " " && $id_event != " "){
	echo "<br/> id: foto: ".$id_foto."  id evento".$id_event." <br/>";
	//echo "Vagas: ".$vagas_event."<br/>";
  $descontaCredito = descontaCredito($conexao,$credi_foto,$credi_event,$id_foto,$vagas_event,$id_event);
  $limite_por_dia  = puxar_foto_limite_click($conexao, $id_foto);
  desconta_limite_click($conexao, $id_foto, $limite_por_dia);
  
	if($descontaCredito == true){
		$ligarFotoEvent = ligaFotoEvent($conexao,$id_foto,$id_event);
		if($ligarFotoEvent){
			echo "Funcionou!";			
		}else{
			echo "<br/>Erro em ligar o Fotografo com o evento";
		}
	}else{ echo "<br/>Erro ao descontar créditos "; }  
	
}


if($id_foto != " " && $cod_active == '82124343'){
	puxar_duas_datas($conexao, $id_foto);
}


// ------------------------------- Helpers of this page ----------------------------------------


















function VerificaCreditos($conexao, $credi_foto){
	
}

