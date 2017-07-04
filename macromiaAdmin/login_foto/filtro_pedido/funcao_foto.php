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
	//echo "A conexão falhou, Erro Reportado ".mysqli_connect_error();
	//exit();
}else{
	//echo "A conexão foi estabelecida com sucesso! -- Page  ";
}

require('filtro_cli.php');

//---------------------------------------------------------------------------------------------------

(isset($_GET['id_foto']))?     $id_foto     = $_GET['id_foto']     : $id_foto  = " ";
(isset($_GET['id_evento']))?   $id_event    = $_GET['id_evento']   : $id_event = " ";
(isset($_GET['credi_foto']))?  $credi_foto  = $_GET['credi_foto']  : $credi_foto =  0;
(isset($_GET['credi_event']))? $credi_event = $_GET['credi_event'] : $credi_foto =  0;
(isset($_GET['vagas']))?       $vagas_event = $_GET['vagas']       : $vagas_event = 0;


if($id_foto != null && $id_event != null){
	echo "<br/> id: foto: ".$id_foto."  id evento".$id_event." <br/>";
	echo "Vagas: ".$vagas_event."<br/>";
  $descontaCredito = descontaCredito($conexao,$credi_foto,$credi_event,$id_foto,$vagas_event,$id_event);
	if($descontaCredito == true){
		$ligarFotoEvent = ligaFotoEvent($conexao,$id_foto,$id_event);
		if($ligarFotoEvent){
			echo "Funcionou!";			
		}else{
			echo "<br/>Erro em ligar o Fotografo com o evento";
		}
	}else{ echo "<br/>Erro ao descontar créditos "; }  
	
}else{
	echo 'Falha na ligação entre o fotografo e o evento';
}

// ------------------------------- Helpers of this page ----------------------------------------


















function VerificaCreditos($conexao, $credi_foto){
	
}

