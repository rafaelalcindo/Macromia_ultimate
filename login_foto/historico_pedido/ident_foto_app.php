<?php

require('../../connection.php');

$conexao = mysqli_connect($db_host,$db_user, $db_pass,$db_name);

if(mysqli_connect_errno($conexao)){
	echo "A conexÃ£o falhou, Erro Reportado ".mysqli_connect_error();
	exit();
}else{
//	echo "A conexÃ£o foi estabelecida com sucesso!";
}

header("Access-Control-Allow-Origin: *");


(isset($_GET['email']))? $email = $_GET['email'] : $email = " ";
(isset($_GET['senha']))? $senha = $_GET['senha'] : $senha = " ";

$senha_crip = sha1($senha);

// echo "Email: ".$email." senha: ".$senha;

$data = array();

$sql_query_foto_ident = sprintf("select f.foto_cod as 'id', fs.foto_fisi_nome as 'nome', 
fs.foto_fisi_email as 'email',                 
f.foto_credito as 'credito',
f.foto_identi as 'ident'
from fotografo f, fotografo_fisico fs, localizacao_foto lf, estado es, cidade cid
 where                
 f.foto_cod = fs.foto_cod and                
 f.foto_cod = lf.foto_cod and                
 lf.loca_estado_foto = es.id and                
 lf.loca_cidade_foto = cid.id        
 and 
 fs.foto_fisi_email = '%s' and fs.foto_fisi_senha = '%s' ",$email,$senha_crip);

$resultado = mysqli_query($conexao, $sql_query_foto_ident) or die(mysql_error($conexao)."<br/>".$sql_query_foto_ident);

while($row = mysqli_fetch_object($resultado)){
	$data[]=$row;
}

echo json_encode($data);
