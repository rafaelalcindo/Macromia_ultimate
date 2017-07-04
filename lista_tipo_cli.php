<?php

require('connection.php');
$conexao = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
if(mysqli_connect_errno($conexao)){
	echo "Falha na conexão com banco de dados";
	exit();
}

