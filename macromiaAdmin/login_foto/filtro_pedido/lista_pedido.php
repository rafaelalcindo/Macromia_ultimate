<?php
// http://localhost:8080/mazy_project%20/login_foto/filtro_pedido/lista_pedido.php?sele_servico=Animais&estado=15&cidade=2573
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
	//echo "A conexão foi estabelecida com sucesso! -- Page";
}


require('filtro_cli.php');

if(isset($_GET['sele_servico'])){ $servico    = $_GET['sele_servico'];  }else{ $servico = " "; }
if(isset($_GET['estado'])){       $estado     = $_GET['estado'];	    }else{ $estado  = " "; }
if(isset($_GET['cidade'])){		  $cidade     = $_GET['cidade'];		}else{ $cidade  = " "; }
if(isset($_GET['id_foto'])){      $id_foto    = $_GET['id_foto'];       }else{ $id_foto = " "; }
if(isset($_GET['credi_foto'])){   $credi_foto = $_GET['credi_foto'];    }else{ $credi_foto = " "; }

$id_list = 0;
$limite  = 5;

if($servico != " " && $estado != " " && $cidade != null && $id_foto != null){
	//echo "<br/>Entrou no if 1 <br/>";
	//echo "<br/> Servico: "+$servico+" estado: "+$estado+" cidade: "+$cidade;
	header('Content-type: text/html; charset=ISO-8859-1');
	$lista_cli_01_count = lista_cli_opt01_count($conexao,$servico,$estado,$cidade,$limite);
	$pg = (isset($_GET['pg']))? (int)$_GET['pg'] : 1;	
	$lista_cli = lista_cli_opt01($conexao,$servico,$estado,$cidade,$start);
	
	echo "<br/> Lista_cli_01_count: ".$lista_cli_01_count." | inicio: ".$start." <br/>";
	
	if($lista_cli == false){
		echo "<h3>No momento estamos sem eventos</h3>";
	}else{	
		//echo "-- Aqui está o select ".print_r($lista_cli)." <-- select ";
		while($row = mysqli_fetch_array($lista_cli)){
			$nome = $row['nome'];  $email   = $row['email'];   $telefone = $row['Telefone'];  $celular = $row['Celular'];  $codigo	 = $row['codigo'];
			$data = $row['data'];  $hora    = $row['hora'];    $servico  = $row['Servico'];   $vagas   = $row['vagas'];    $numero   = $row['numero'];   $endereco = $row['endereco'];
			$cep  = $row['cep'];   $val_min = $row['val_min']; $val_max  = $row['val_max'];   $estado  = $row['estado'];   $cidade   = $row['cidade'];
			if($vagas > 0){
				    $id_list += 1;
					$corpo = preencheLista( $nome,$email,$telefone,$celular, $codigo, $data,$hora,$servico, $vagas,$numero,$cep,$endereco,$val_min,$val_max,$estado,$cidade,$id_foto,$credi_foto,$id_list, $pg);
				header('Content-type: text/html; charset=ISO-8859-1');
				echo $corpo;
			}
		}
		
		if($lista_cli_01_count > 1 && $pg <= $lista_cli_01_count){
			for($i = 1; $i <= $lista_cli_01_count; $i++){
				echo "<a onclick='paginacao_pedidos($i)' style='cursor: pointer;' >$i</a>";
			}
		}		
	}
	
}else if($servico != " " && $estado != " "){ // inicio do if 02

	header('Content-type: text/html; charset=ISO-8859-1');
	$lista_cli_02_count = lista_cli_opt02_count($conexao,$servico,$estado);
	$pg = (isset($_GET['pg']))? (int)$_GET['pg'] : 1;
	$start = ($pg - 1) * $limite;
	
	$lista_cli02 = lista_cli_opt02($conexao,$servico,$estado, $start);	
	if($lista_cli02 == false){
		echo "<h3>No momento estamos sem eventos</h3>";
	}else{
		while($row = mysqli_fetch_array($lista_cli02)){
			$nome = $row['nome'];  $email   = $row['email'];   $telefone = $row['Telefone'];  $celular = $row['Celular'];  $codigo	 = $row['codigo'];
			$data = $row['data'];  $hora    = $row['hora'];    $servico  = $row['Servico'];   $vagas   = $row['vagas'];    $numero   = $row['numero'];   $endereco = $row['endereco'];
			$cep  = $row['cep'];   $val_min = $row['val_min']; $val_max  = $row['val_max'];   $estado  = $row['estado'];   $cidade   = $row['cidade'];
			
			header('Content-type: text/html; charset=ISO-8859-1');
			if($vagas > 0){
				$id_list += 1;
				$corpo2 = preencheLista($nome,$email,$telefone,$celular, $codigo, $data,$hora,$servico, $vagas,$numero,$cep,$endereco,$val_min,$val_max,$estado,$cidade,$id_foto,$credi_foto, $id_list, $pg);			
				echo $corpo2;
			}
		}
		
		if($lista_cli_02_count > 1 && $pg <= $lista_cli_02_count){
			for($i = 1; $i <= $lista_cli_05_count; $i++){
				echo "<a onclick='paginacao_pedidos($i)' style='cursor: pointer;'>$i</a> ";
			}
		}
		
	}
}else if($estado != " " && $cidade != " "){ // inicio do if 3...
	//echo "<br/>Entrou no if 3 <br/>";
	$lista_cli_04_count = lista_cli_opt04_count($conexao,$estado, $cidade);
	$pg = (isset($_GET['pg']))? (int)$_GET['pg'] : 1;
	$start = ($pg - 1) * $limite;
	
	$lista_cli04 = lista_cli_opt04($conexao,$estado,$cidade,$start);
	
	//echo "<br/> lista_cli_03_count: ".$lista_cli_04_count." | inicio: ".$start."<br/>";
	if($lista_cli04 == false){
		echo "<h3>No momento estamos sem eventos</h3>";
	}else{
		while($row = mysqli_fetch_array($lista_cli04)){
			$nome = $row['nome'];  $email   = $row['email'];   $telefone = $row['Telefone'];  $celular = $row['Celular'];  $codigo	 = $row['codigo'];
			$data = $row['data'];  $hora    = $row['hora'];    $servico  = $row['Servico'];   $vagas   = $row['vagas'];    $numero   = $row['numero'];   $endereco = $row['endereco'];
			$cep  = $row['cep'];   $val_min = $row['val_min']; $val_max  = $row['val_max'];   $estado  = $row['estado'];   $cidade   = $row['cidade'];
			
			header('Content-type: text/html; charset=ISO-8859-1');
			if($vagas > 0){
				$id_list += 1;
				$corpo4 = preencheLista($nome,$email,$telefone,$celular, $codigo, $data,$hora,$servico, $vagas,$numero,$cep,$endereco,$val_min,$val_max,$estado,$cidade,$id_foto,$credi_foto, $id_list, $pg);
				echo $corpo4;
			}
		}
		
		if($lista_cli_04_count > 1 && $pg <= $lista_cli_04_count){
			for($i = 1; $i <= $lista_cli_04_count; $i++){
				echo "<a onclick='paginacao_pedidos($i)' style='cursor: pointer;' >$i</a> ";
			}
		}		
	}
}else if($servico != " "){ // inicio do if 4....
	//echo "<br/>Entrou no if 4 <br/>";
	$lista_cli_05_count = lista_cli_opt5_count($conexao,$servico);
	$pg = (isset($_GET['pg']))? (int)$_GET['pg'] : 1;
	$start = ($pg - 1) * $limite;
	
	$lista_cli05 = lista_cli_opt05($conexao,$servico, $start);
	
	//echo "<br/> lista_cli_03_count: ".$lista_cli_05_count." | inicio: ".$start." <br/>";
	
	if($lista_cli05 == false){
		echo "<h3>No momento estamos sem eventos</h3>";
	}else{
		while($row = mysqli_fetch_array($lista_cli05)){
			$nome = $row['nome'];  $email   = $row['email'];   $telefone = $row['Telefone'];  $celular = $row['Celular'];  $codigo	 = $row['codigo'];
			$data = $row['data'];  $hora    = $row['hora'];    $servico  = $row['Servico'];   $vagas   = $row['vagas'];    $numero   = $row['numero'];   $endereco = $row['endereco'];
			$cep  = $row['cep'];   $val_min = $row['val_min']; $val_max  = $row['val_max'];   $estado  = $row['estado'];   $cidade   = $row['cidade'];
			header('Content-type: text/html; charset=ISO-8859-1');
			if($vagas > 0){
				$id_list += 1;
				$corpo5 = preencheLista($nome,$email,$telefone,$celular, $codigo, $data,$hora,$servico, $vagas,$numero,$cep,$endereco,$val_min,$val_max,$estado,$cidade,$id_foto,$credi_foto, $id_list, $pg);
				echo $corpo5;
			}
		}
		
		if($lista_cli_05_count > 1 && $pg <= $lista_cli_05_count){
			for($i = 1; $i <= $lista_cli_05_count; $i++){
				echo "<a onclick='paginacao_pedidos($i)' style='cursor: pointer;'>$i</a>";
			}
		}		
	}
}else if($estado != " " || $estado != null){ // inicio do if 5....
	//echo "<br/>Entrou no if 5, val estado".$estado." <br/>";
	$lista_cli_03_count = lista_cli_opt3_count($conexao,$estado); // conta quantas linhas tem na tabela
	$pg = (isset($_GET['pg']))? (int)$_GET['pg'] : 1;
	$start = ($pg - 1) * $limite;
	
	$lista_cli03 = lista_cli_opt03($conexao, $estado, $start);		
	//echo "<br/>  lista_cli_03_count: ".$lista_cli_03_count." | inicio: ".$start." <br/>";
	
	if($lista_cli03 == false){
		echo "<h3>No momento estamos sem eventos</h3>";
	}else{
		while($row = mysqli_fetch_array($lista_cli03)){
			$nome = $row['nome'];  $email   = $row['email'];   $telefone = $row['Telefone'];  $celular = $row['Celular'];  $codigo	 = $row['codigo'];
			$data = $row['data'];  $hora    = $row['hora'];    $servico  = $row['Servico'];   $vagas   = $row['vagas'];    $numero   = $row['numero'];   $endereco = $row['endereco'];
			$cep  = $row['cep'];   $val_min = $row['val_min']; $val_max  = $row['val_max'];   $estado  = $row['estado'];   $cidade   = $row['cidade'];
			
			if($vagas > 0){
				$id_list += 1;
				$corpo3 = preencheLista($nome,$email,$telefone,$celular, $codigo, $data,$hora,$servico, $vagas,$numero,$cep,$endereco,$val_min,$val_max,$estado,$cidade,$id_foto,$credi_foto, $id_list, $pg);
				echo $corpo3;
			}
		}
		
		if($lista_cli_03_count > 1 && $pg <= $lista_cli_03_count){
			for($i = 1; $i <= $lista_cli_03_count; $i++ ){
				echo "<a onclick='paginacao_pedidos($i)' style='cursor: pointer;'>$i </a>";
			}
		}
		
	}// fom do if lista_cli03
}









