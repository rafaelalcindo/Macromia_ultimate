<?php

	$conexao = mysql_connect($db_host,$db_user, $db_pass);
	mysql_select_db("mazy_projeto02",$conexao);
	mysql_set_charset("utf8",$conexao);
	
	if(mysqli_connect_errno($conexao)){
	echo "A conexão falhou, Erro Reportado ".mysqli_connect_error();
	exit();
}else{
	echo "A conexão foi estabelecida com sucesso!";
}
		
/*	if(mysqli_connect_errno($conexao)){
		echo "A conexão falhou, Erro Reportado ".mysqli_connect_error();
		exit();
	}else{
		echo "A conexão foi estabelecida com sucesso!";
	}
	
	try{
		
		$obj = new PDO('mysql:host='.$db_host.';dbname='.$db_name,$db_user,$db_pass);
		$sqlEstado = 'SELECT * FROM estado ORDER BY nome ASC';
		$resEstado = $obj->prepare($sqlEstado);
		$resEstado->execute();
		$estados = $resEstado->fetchAll();
		
	}catch(PDOException $e){
		echo $e->getMessage()."<br/>";
	} */
	
	
	?>
    
    

