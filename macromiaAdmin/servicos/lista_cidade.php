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
	echo "A conexão foi estabelecida com sucesso!";
}

$id = $_GET['id'];
echo "  ".$id."  ";
header('Content-type: text/html; charset=ISO-8859-1');
$select = sprintf("SELECT * FROM cidade WHERE estado = '%s' ORDER BY nome",$id);
$sql = mysqli_query($conexao,$select);
while($row = mysqli_fetch_array($sql)){
	$nome   = $row['nome'];
	$id_cid = $row['id'];
	
	echo '<option value='.$id_cid.' class="cidades">'.$nome.'</option>';
}