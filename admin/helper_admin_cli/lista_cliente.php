<?php

header("Expires: Mon, 21 Out 1991 00:00:00 GMT");
header("Cacho-control: no-cache");
header("Progma: no-cache");

$db_host = "127.0.0.1";
$db_user = "root";
$db_pass = "";
$db_name = "mazy_projeto03";

$conexao = mysqli_connect($db_host,$db_user, $db_pass, $db_name);

if(mysqli_connect_errno($conexao)){
	echo "A conexão falhou, Erro Reportado ".mysqli_connect_error();
	exit();
}else{
	echo "A conexão foi estabelecida com sucesso!";
}

require('../mdl_admin.php');

$limite = 5;
$cli_admin = isset($_GET['cli_adm'])? $_GET['cli_adm'] : " ";

if($cli_admin != " "){
	$listar_cliente2	= listar_cliente02($conexao,$cli_admin);
	while($row = mysqli_fetch_array($listar_cliente2)){
		$codigo			= $row['codigo'];
		$nome			= $row['nome'];
		$email			= $row['email'];
		$quant_pedi		= $row['quant_pedido'];
		
		echo "
		<tr>
			<td>".$codigo."</td>
			<td>".$nome."</td>
			<td>".$email."</td>
			<td>".$quant_pedi."</td>
		</tr>
		";
	}
}else{
	$lista_cliente_count = lista_cliente_count($conexao);
	$pg = (isset($_GET['pg']))? (int)$_GET['pg'] : 1;
	$start = ($pg - 1) * $limite;
	
	$listar_cliente		 = listar_cliente($conexao,$start);
	echo "<table class='table table-striped'>";
	echo "
		<thead>
			<tr>
			  <th>Codigo do cliente</th>
			  <th>Nome</th>
			  <th>Email</th>
			  <th>Quantidade de Pedido</th>
			</tr>
        </thead>";
	echo "<tbody id='table_info_cli'>";	
			while($row = mysqli_fetch_array($listar_cliente)){
				$codigo 	= $row['codigo'];
				$nome		= $row['nome'];
				$email		= $row['email'];
				$quant_pedi = $row['quant_pedido'];
				
				echo "
				<tr>
					<td>".$codigo."</td>
					<td>".$nome."</td>
					<td>".$email."</td>
					<td>".$quant_pedi."</td>
				</tr>";	
				
			}// end of while
	echo "</tbody>";
	echo "</table>";
	if($lista_cliente_count > 1 && $pg <= $lista_cliente_count){
		for($i = 1; $i <= $lista_cliente_count; $i++){			
			echo "<a onclick='cliente_paginacao_01($i)' style='cursor:pointer;'>$i</a>";			
		}
	}
}// fim do else



