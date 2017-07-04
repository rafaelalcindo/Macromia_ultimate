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
require('limite_creditos.php');

if(isset($_GET['sele_servico'])){ $servico    = $_GET['sele_servico'];  }else{ $servico = " "; }
if(isset($_GET['estado'])){       $estado     = $_GET['estado'];	    }else{ $estado  = " "; }
if(isset($_GET['cidade'])){		  $cidade     = $_GET['cidade'];		}else{ $cidade  = " "; }
if(isset($_GET['id_foto'])){      $id_foto    = $_GET['id_foto'];       }else{ $id_foto = " "; }
if(isset($_GET['credi_foto'])){   $credi_foto = $_GET['credi_foto'];    }else{ $credi_foto = " "; }
if(isset($_GET['Orcamento'])){ 	  $orcamento  = $_GET['Orcamento'];     }else{ $orcamento  = 0; }
if(isset($_GET['Ordem'])){ 		  $ordem      = $_GET['Ordem'];         }else{ $ordem  	   = " "; }

$id_list = 0;
$limite  = 5;

if($ordem == 'antigo'){
	$ordenar = 'ASC';
}else{ $ordenar = 'DESC'; }


if($orcamento == 1){
	$orc_min = 100; $orc_max = 1000;
}else if($orcamento == 2){
	$orc_min = 1000; $orc_max = 2000;
}else if($orcamento == 3){
	$orc_min = 2000; $orc_max = 5000;
}else if($orcamento == 4){
	$orc_min = 5000; $orc_max = 10000;
}else if($orcamento == 5){
	$orc_min = 10000; $orc_max = 400000;
}else{
	$orc_min = 0; $orc_max = 0;
}
//echo "<br/> Valor do Orçamento: ".$orcamento."<br/>";
//echo "Servico:".$servico."Cidade: ".$cidade."Estado: ".$estado;

if($servico != " " && $estado != " " && $cidade != " " && $id_foto != null){
	//echo "<br/>Entrou no if 1 <br/>";
	//echo "<br/> Servico: "+$servico+" estado: "+$estado+" cidade: "+$cidade;
	header('Content-type: text/html; charset=ISO-8859-1');
	$lista_cli_01_count = lista_cli_opt01_count($conexao,$servico,$estado,$cidade,$limite,$orc_min,$orc_max);
	$pg = (isset($_GET['pg']))? (int)$_GET['pg'] : 1;
	$start = ($pg - 1) * $limite;
	
	$lista_cli = lista_cli_opt01($conexao,$servico,$estado,$cidade,$start,$limite,$orc_min,$orc_max,$ordenar);
	
	//echo "<br/> Lista_cli_01_count: ".$lista_cli_01_count." | inicio: ".$start." <br/>";
	
	if($lista_cli == false){
	//	echo "<h3>No momento estamos sem eventos</h3>";
	}else{	
		//echo "-- Aqui está o select ".print_r($lista_cli)." <-- select ";
		while($row = mysqli_fetch_array($lista_cli)){
			$nome = $row['nome'];  $email   = $row['email'];   $telefone = $row['Telefone'];  $celular = $row['Celular'];  $codigo = $row['codigo'];  $complementar = $row['complementar']; $data = $row['data'];  $servico  = $row['Servico'];   $vagas   = $row['vagas']; $val_min = $row['val_min']; $val_max  = $row['val_max'];   $estado  = $row['estado'];   $cidade  = $row['cidade'];
			//if($vagas > 0){
				    $id_list += 1;
					$corpo = preencheLista( $nome,$email, $telefone,$celular, $codigo, $data, $servico, $vagas, $val_min,$val_max,$estado,$cidade,$id_foto,$credi_foto,$id_list, $pg, $complementar);
				@header('Content-type: text/html; charset=ISO-8859-1');
				echo $corpo;
			//}
		}
		
		if($lista_cli_01_count > 1 && $pg <= $lista_cli_01_count){
			echo "<div class='clearfix colelem shared_content' id='u364008' data-content-guid='u364008_content'>";
	   		if($pg > 1){
	   			echo "
	   				<div class='rounded-corners clearfix grpelem' id='u50015-4' style='cursor: pointer;' onclick='paginacao_pedidos($pg - 1, true)' data-muse-uid='U50015' data-muse-type='txt_frame'><!-- content -->
			         <p id='u50015-2'><span id='u50015'>ANTERIOR</span></p>
			        </div>
	   			";
	   		}else{
	   			echo"<div class='rounded-corners clearfix grpelem' id='u50015-4' data-muse-uid='U50015' data-muse-type='txt_frame'><!-- content -->
			          <p id='u50015-2'><span id='u50015'>ANTERIOR</span></p>
			         </div>";
	   		}


	   		if($pg < $lista_cli_01_count){

	   			echo "
	   				<div class='rounded-corners clearfix grpelem' id='u50009-4' style='cursor: pointer;' onclick='paginacao_pedidos($pg + 1, true)' data-muse-uid='U50009' data-muse-type='txt_frame'><!-- content -->
			         <p id='u50009-2'><span id='u50009'>PRÓXIMO</span></p>
			        </div>
	   			";
	   			
	   		}else{
	   			echo "<div class='rounded-corners clearfix grpelem' id='u50009-4' data-muse-uid='U50009' data-muse-type='txt_frame'><!-- content -->
			          <p id='u50009-2'><span id='u50009'>PRÓXIMO</span></p>
			         </div>";
	   		}
	   	   echo "</div>";
		}		
	}
	
}else if($servico != " " && $estado != " "){ // inicio do if 02
	//echo "<br/>Entrou no if 2 <br/>";
	header('Content-type: text/html; charset=ISO-8859-1');
	$lista_cli_02_count = lista_cli_opt02_count($conexao,$servico,$estado, $limite,$orc_min,$orc_max);
	$pg = (isset($_GET['pg']))? (int)$_GET['pg'] : 1;
	$start = ($pg - 1) * $limite;
	
	$lista_cli02 = lista_cli_opt02($conexao,$servico,$estado, $start, $limite,$orc_min, $orc_max, $ordenar);	
	if($lista_cli02 == false){
	//	echo "<h3>No momento estamos sem eventos</h3>";
	}else{
		while($row = mysqli_fetch_array($lista_cli02)){
			$nome = $row['nome'];  $email   = $row['email'];   $telefone = $row['Telefone'];  $celular = $row['Celular'];  $codigo = $row['codigo'];  $complementar = $row['complementar']; $data = $row['data'];  $servico  = $row['Servico'];   $vagas   = $row['vagas']; $val_min = $row['val_min']; $val_max  = $row['val_max'];   $estado  = $row['estado'];   $cidade  = $row['cidade'];
			
			@header('Content-type: text/html; charset=ISO-8859-1');
			//if($vagas > 0){
				$id_list += 1;
				$corpo2 = preencheLista($nome,$email,$telefone,$celular, $codigo, $data, $servico, $vagas, $val_min,$val_max,$estado,$cidade,$id_foto,$credi_foto, $id_list, $pg,$complementar);			
				echo $corpo2;
			//}
		}
		
		if($lista_cli_02_count > 1 && $pg <= $lista_cli_02_count){
			echo "<div class='clearfix colelem shared_content' id='u364008' data-content-guid='u364008_content'>";
	   		if($pg > 1){
	   			echo "
	   				<div class='rounded-corners clearfix grpelem' id='u50015-4' style='cursor: pointer;' onclick='paginacao_pedidos($pg - 1, true)' data-muse-uid='U50015' data-muse-type='txt_frame'><!-- content -->
			         <p id='u50015-2'><span id='u50015'>ANTERIOR</span></p>
			        </div>
	   			";
	   		}else{
	   			echo"<div class='rounded-corners clearfix grpelem' id='u50015-4' data-muse-uid='U50015' data-muse-type='txt_frame'><!-- content -->
			          <p id='u50015-2'><span id='u50015'>ANTERIOR</span></p>
			         </div>";
	   		}


	   		if($pg < $lista_cli_02_count){

	   			echo "
	   				<div class='rounded-corners clearfix grpelem' id='u50009-4' style='cursor: pointer;' onclick='paginacao_pedidos($pg + 1, true)' data-muse-uid='U50009' data-muse-type='txt_frame'><!-- content -->
			         <p id='u50009-2'><span id='u50009'>PRÓXIMO</span></p>
			        </div>
	   			";
	   			
	   		}else{
	   			echo "<div class='rounded-corners clearfix grpelem' id='u50009-4' data-muse-uid='U50009' data-muse-type='txt_frame'><!-- content -->
			          <p id='u50009-2'><span id='u50009'>PRÓXIMO</span></p>
			         </div>";
	   		}
	   	   echo "</div>";
		}
		
	}
}else if($estado != " " && $cidade != " "){ // inicio do if 3...
	//echo "<br/>Entrou no if 3 <br/>";
	$lista_cli_04_count = lista_cli_opt04_count($conexao,$estado, $cidade, $limite,$orc_min, $orc_max);
	$pg = (isset($_GET['pg']))? (int)$_GET['pg'] : 1;
	$start = ($pg - 1) * $limite;
	
	$lista_cli04 = lista_cli_opt04($conexao,$estado,$cidade,$start, $limite,$orc_min, $orc_max, $ordenar);
	
	//echo "<br/> lista_cli_03_count: ".$lista_cli_04_count." | inicio: ".$start."<br/>";
	if($lista_cli04 == false){
	//	echo "<h3>No momento estamos sem eventos</h3>";
	}else{
		while($row = mysqli_fetch_array($lista_cli04)){
			$nome = $row['nome'];  $email   = $row['email'];   $telefone = $row['Telefone'];  $celular = $row['Celular'];  $codigo = $row['codigo'];  $complementar = $row['complementar']; $data = $row['data'];  $servico  = $row['Servico'];   $vagas   = $row['vagas']; $val_min = $row['val_min']; $val_max  = $row['val_max'];   $estado  = $row['estado'];   $cidade  = $row['cidade'];
			
			@header('Content-type: text/html; charset=ISO-8859-1');
			//if($vagas > 0){
				$id_list += 1;
				$corpo4 = preencheLista($nome,$email,$telefone,$celular, $codigo, $data, $servico, $vagas,$val_min,$val_max,$estado,$cidade,$id_foto,$credi_foto, $id_list, $pg, $complementar);
				echo $corpo4;
			//}
		}
		
		if($lista_cli_04_count > 1 && $pg <= $lista_cli_04_count){
			echo "<div class='clearfix colelem shared_content' id='u364008' data-content-guid='u364008_content'>";
	   		if($pg > 1){
	   			echo "
	   				<div class='rounded-corners clearfix grpelem' id='u50015-4' style='cursor: pointer;' onclick='paginacao_pedidos($pg - 1, true)' data-muse-uid='U50015' data-muse-type='txt_frame'><!-- content -->
			         <p id='u50015-2'><span id='u50015'>ANTERIOR</span></p>
			        </div>
	   			";
	   		}else{
	   			echo"<div class='rounded-corners clearfix grpelem' id='u50015-4' data-muse-uid='U50015' data-muse-type='txt_frame'><!-- content -->
			          <p id='u50015-2'><span id='u50015'>ANTERIOR</span></p>
			         </div>";
	   		}


	   		if($pg < $lista_cli_04_count){

	   			echo "
	   				<div class='rounded-corners clearfix grpelem' id='u50009-4' style='cursor: pointer;' onclick='paginacao_pedidos($pg + 1, true)' data-muse-uid='U50009' data-muse-type='txt_frame'><!-- content -->
			         <p id='u50009-2'><span id='u50009'>PRÓXIMO</span></p>
			        </div>
	   			";
	   			
	   		}else{
	   			echo "<div class='rounded-corners clearfix grpelem' id='u50009-4' data-muse-uid='U50009' data-muse-type='txt_frame'><!-- content -->
			          <p id='u50009-2'><span id='u50009'>PRÓXIMO</span></p>
			         </div>";
	   		}
	   	   echo "</div>";
		}		
	}
}else if($servico != " "){ // inicio do if 4....
	//echo "<br/>Entrou no if 4 <br/>";
	$lista_cli_05_count = lista_cli_opt5_count($conexao,$servico, $limite,$orc_min, $orc_max);
	$pg = (isset($_GET['pg']))? (int)$_GET['pg'] : 1;
	$start = ($pg - 1) * $limite;
	
	$lista_cli05 = lista_cli_opt05($conexao,$servico, $start, $limite,$orc_min, $orc_max, $ordenar);
	
	//echo "<br/> lista_cli_03_count: ".$lista_cli_05_count." | inicio: ".$start." <br/>";
	
	if($lista_cli05 == false){
	//	echo "<h3>No momento estamos sem eventos</h3>";
	}else{
		while($row = mysqli_fetch_array($lista_cli05)){
			$nome = $row['nome'];  $email   = $row['email'];   $telefone = $row['Telefone'];  $celular = $row['Celular'];  $codigo = $row['codigo'];  $complementar = $row['complementar']; $data = $row['data'];  $servico  = $row['Servico'];   $vagas   = $row['vagas']; $val_min = $row['val_min']; $val_max  = $row['val_max'];   $estado  = $row['estado'];   $cidade  = $row['cidade'];

			@header('Content-type: text/html; charset=ISO-8859-1');
			//if($vagas > 0){
				$id_list += 1;
				$corpo5 = preencheLista($nome,$email,$telefone,$celular, $codigo, $data,$servico, $vagas,$val_min,$val_max,$estado,$cidade,$id_foto,$credi_foto, $id_list, $pg, $complementar);
				echo $corpo5;
			//}
		}
		
		if($lista_cli_05_count > 1 && $pg <= $lista_cli_05_count){
			echo "<div class='clearfix colelem shared_content' id='u364008' data-content-guid='u364008_content'>";
	   		if($pg > 1){
	   			echo "
	   				<div class='rounded-corners clearfix grpelem' id='u50015-4' style='cursor: pointer;' onclick='paginacao_pedidos($pg - 1, true)' data-muse-uid='U50015' data-muse-type='txt_frame'><!-- content -->
			         <p id='u50015-2'><span id='u50015'>ANTERIOR</span></p>
			        </div>
	   			";
	   		}else{
	   			echo"<div class='rounded-corners clearfix grpelem' id='u50015-4' data-muse-uid='U50015' data-muse-type='txt_frame'><!-- content -->
			          <p id='u50015-2'><span id='u50015'>ANTERIOR</span></p>
			         </div>";
	   		}


	   		if($pg < $lista_cli_05_count){

	   			echo "
	   				<div class='rounded-corners clearfix grpelem' id='u50009-4' style='cursor: pointer;' onclick='paginacao_pedidos($pg + 1, true)' data-muse-uid='U50009' data-muse-type='txt_frame'><!-- content -->
			         <p id='u50009-2'><span id='u50009'>PRÓXIMO</span></p>
			        </div>
	   			";
	   			
	   		}else{
	   			echo "<div class='rounded-corners clearfix grpelem' id='u50009-4' data-muse-uid='U50009' data-muse-type='txt_frame'><!-- content -->
			          <p id='u50009-2'><span id='u50009'>PRÓXIMO</span></p>
			         </div>";
	   		}
	   	   echo "</div>";
		}		
	}
}else if($estado != " " || $estado != " "){ // inicio do if 5....
	//echo "<br/>Entrou no if 5, val estado".$estado." <br/>";
	$lista_cli_03_count = lista_cli_opt3_count($conexao,$estado, $limite,$orc_min, $orc_max); // conta quantas linhas tem na tabela
	$pg = (isset($_GET['pg']))? (int)$_GET['pg'] : 1;
	$start = ($pg - 1) * $limite;
	
	$lista_cli03 = lista_cli_opt03($conexao, $estado, $start, $limite,$orc_min, $orc_max, $ordenar);
	
	
	//echo "<br/>  lista_cli_03_count: ".$lista_cli_03_count." | inicio: ".$start." <br/>";
	
	if($lista_cli03 == false){
	//	echo "<h3>No momento estamos sem eventos</h3>";
      } else{

	while($row = mysqli_fetch_array($lista_cli03)){
		$nome = $row['nome'];  $email   = $row['email'];   $telefone = $row['Telefone'];  $celular = $row['Celular'];  $codigo = $row['codigo'];  $complementar = $row['complementar']; $data = $row['data'];  $servico  = $row['Servico'];   $vagas   = $row['vagas']; $val_min = $row['val_min']; $val_max  = $row['val_max'];   $estado  = $row['estado'];   $cidade  = $row['cidade'];
		
		//if($vagas > 0){
			$id_list += 1;
			$corpo3 = preencheLista($nome,$email,$telefone,$celular, $codigo, $data, $servico, $vagas, $val_min,$val_max,$estado,$cidade,$id_foto,$credi_foto, $id_list, $pg, $complementar);
			echo $corpo3;
		//}
	}
		
		if($lista_cli_03_count > 1 && $pg <= $lista_cli_03_count){
			echo "<div class='clearfix colelem shared_content' id='u364008' data-content-guid='u364008_content'>";
	   		if($pg > 1){
	   			echo "
	   				<div class='rounded-corners clearfix grpelem' id='u50015-4' style='cursor: pointer;' onclick='paginacao_pedidos($pg - 1, true)' data-muse-uid='U50015' data-muse-type='txt_frame'><!-- content -->
			         <p id='u50015-2'><span id='u50015'>ANTERIOR</span></p>
			        </div>
	   			";
	   		}else{
	   			echo"<div class='rounded-corners clearfix grpelem' id='u50015-4' data-muse-uid='U50015' data-muse-type='txt_frame'><!-- content -->
			          <p id='u50015-2'><span id='u50015'>ANTERIOR</span></p>
			         </div>";
	   		}


	   		if($pg < $lista_cli_03_count){

	   			echo "
	   				<div class='rounded-corners clearfix grpelem' id='u50009-4' style='cursor: pointer;' onclick='paginacao_pedidos($pg + 1, true)' data-muse-uid='U50009' data-muse-type='txt_frame'><!-- content -->
			         <p id='u50009-2'><span id='u50009'>PRÓXIMO</span></p>
			        </div>
	   			";
	   			
	   		}else{
	   			echo "<div class='rounded-corners clearfix grpelem' id='u50009-4' data-muse-uid='U50009' data-muse-type='txt_frame'><!-- content -->
			          <p id='u50009-2'><span id='u50009'>PRÓXIMO</span></p>
			         </div>";
	   		}
	   	   echo "</div>";
		}
		
	}// fom do if lista_cli03 e do else
}else{
	//echo "<br/>Entrou no else 6, val estado".$estado." <br/>";
	$lista_cli_06_count = lista_cli_opt6_count($conexao, $limite,$orc_min, $orc_max);
	$pg = (isset($_GET['pg']))? (int) $_GET['pg'] : 1;
	$start = ($pg - 1) * $limite;

	$lista_cli06 = lista_cli_opt06($conexao, $start, $limite,$orc_min, $orc_max,$ordenar);

	//puxar_duas_datas($conexao,$id_foto);
	//exit();
	
	if($lista_cli06 == false){

	}else{

		

		while($row = mysqli_fetch_array($lista_cli06)){
		$nome = $row['nome'];  $email   = $row['email'];   $telefone = $row['Telefone'];  $celular = $row['Celular'];  $codigo = $row['codigo'];  $complementar = $row['complementar']; $data = $row['data'];  $servico  = $row['Servico'];   $vagas   = $row['vagas']; $val_min = $row['val_min']; $val_max  = $row['val_max'];   $estado  = $row['estado'];   $cidade  = $row['cidade'];
		
			//if($vagas > 0){
				$id_list += 1;
				$corpo3 = preencheLista($nome,$email,$telefone,$celular, $codigo, $data, $servico, $vagas, $val_min,$val_max,$estado,$cidade,$id_foto,$credi_foto, $id_list, $pg, $complementar);
				echo $corpo3;
			//}
	   }

	   if($lista_cli_06_count > 1 && $pg <= $lista_cli_06_count){
	   	  echo "<div class='clearfix colelem shared_content' id='u364008' data-content-guid='u364008_content'>";
	   		if($pg > 1){
	   			echo "
	   				<div class='rounded-corners clearfix grpelem' id='u50015-4' style='cursor: pointer;' onclick='paginacao_pedidos($pg - 1, true)' data-muse-uid='U50015' data-muse-type='txt_frame'><!-- content -->
			         <p id='u50015-2'><span id='u50015'>ANTERIOR</span></p>
			        </div>
	   			";
	   		}else{
	   			echo"<div class='rounded-corners clearfix grpelem' id='u50015-4' data-muse-uid='U50015' data-muse-type='txt_frame'><!-- content -->
			          <p id='u50015-2'><span id='u50015'>ANTERIOR</span></p>
			         </div>";
	   		}


	   		if($pg < $lista_cli_06_count){

	   			echo "
	   				<div class='rounded-corners clearfix grpelem' id='u50009-4' style='cursor: pointer;' onclick='paginacao_pedidos($pg + 1, true)' data-muse-uid='U50009' data-muse-type='txt_frame'><!-- content -->
			         <p id='u50009-2'><span id='u50009'>PRÓXIMO</span></p>
			        </div>
	   			";
	   			
	   		}else{
	   			echo "<div class='rounded-corners clearfix grpelem' id='u50009-4' data-muse-uid='U50009' data-muse-type='txt_frame'><!-- content -->
			          <p id='u50009-2'><span id='u50009'>PRÓXIMO</span></p>
			         </div>";
	   		}
	   	   echo "</div>";
	   }

	  /* if($lista_cli_06_count > 1 && $pg <= $lista_cli_06_count){

	   		if($pg > 1){

	   		}

	   		for($i = 1; $i <= $lista_cli_06_count; $i++){
	   			echo "<a onclick='paginacao_pedidos($i)' id='paginacao' style='cursor: pointer;'>$i </a>";
	   		}
	   }*/




	}// fim do else

}









