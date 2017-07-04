<?php
	
	function logar_foto_fisi($conexao, $email, $senha){
		$sql = sprintf("select f.foto_cod as 'cod', fs.foto_fisi_nome as 'nome', fs.foto_fisi_email as 'email', 
			fs.foto_fisi_tel as 'tel', fs.foto_fisi_cel as 'cel', fs.foto_fisi_cpf as 'cpf', 
			f.foto_img_perf as 'imagem', f.foto_identi as 'ident', f.foto_ativo as 'status',
			fs.foto_fisi_senha as 'senha'
			from fotografo f, fotografo_fisico fs where f.foto_cod = fs.foto_cod and fs.foto_fisi_email = '%s' and fs.foto_fisi_senha = '%s' ",$email,$senha);

		$resultado = mysqli_query($conexao, $sql);
		echo "<br/>".print_r($resultado)." Resultado da query";
		$count = mysqli_num_rows($resultado);
		if($count == 1){
			echo '<br/>entrou no count<br/>';
			return $resultado;
		}else{
			return false;
		}
	}	
	
	function logar_foto_juri($conexao, $email, $senha){
		$sql = sprintf("
			select 
			f.foto_cod as 'cod', fj.foto_juri_nome_fan as 'nome', fj.foto_juri_email as 'email',
			fj.foto_juri_tel as 'tel', fj.foto_juri_cel as 'cel', fj.foto_juri_cnpj as 'cnpj',
			f.foto_img_perf as 'imagem', f.foto_identi as 'ident', f.foto_ativo as 'status',
			fj.foto_juri_senha as 'senha'			
			from fotografo f, fotografo_juridico fj where f.foto_cod = fj.foto_cod and fj.foto_juri_email = '%s' and fj.foto_juri_senha = '%s' ",$email,$senha);
		$resultado = mysqli_query($conexao, $sql);
		echo "<br/>".print_r($resultado)." Resultado da query";
		$count = mysqli_num_rows($resultado);
		if($count == 1){
			echo "<br/>Entrou no count<br/>";
			return $resultado;
		}else{
			return false;
		}
	}
	
	function cadFotoFisi($conexao, $ident, $foto, $nome,$email,$senha,$tel,$cel,$cpf, $ende,$num,$est,$cid){
		$foto_ativo = 'F';
		$foto_credito = 100;
		$sql = sprintf("insert into fotografo (foto_identi, foto_img_perf, foto_ativo, foto_credito) values('%s','%s', '%s','%s')",$ident,$foto,$foto_ativo,$foto_credito);
		$resultado = mysqli_query($conexao, $sql) or die(mysql_error($conexao)."<br/>".$sql);
		echo "<br/>".print_r($resultado)." Resultado da query";				

		$sql2 = sprintf("insert into fotografo_fisico (foto_fisi_cpf, foto_fisi_nome, foto_fisi_email, foto_fisi_tel, foto_fisi_cel, foto_fisi_senha, foto_cod) values ('%s','%s','%s','%s','%s','%s',LAST_INSERT_ID())",$cpf,$nome, $email,$tel, $cel, $senha);
		$resultado2 = mysqli_query($conexao, $sql2) or die(mysql_error($conexao)."<br/>".$sql2);
		
		$sql3 = sprintf("INSERT INTO localizacao_foto (loca_end_foto, loca_num_foto, loca_estado_foto, loca_cidade_foto, foto_cod) VALUES ('%s', '%s', '%s', '%s', LAST_INSERT_ID())",$ende,$num,$est,$cid);
		$resultado3 = mysqli_query($conexao,$sql3) or die(mysql_error($conexao)."<br/>".$sql3);
				
		if($resultado2){
			return $resultado2;
		}else{
			echo "Email já cadastrado no sistema";
			return false;
		}
		
	}
	
	function cadFotoJuridico($conexao, $ident, $foto, $nome_emp, $email, $senha, $tel, $cel, $cnpj, $ende, $num, $est, $cid){
		$foto_ativo = 'F';
		$foto_credito = 100;
		$sql = sprintf("insert into fotografo (foto_identi, foto_img_perf, foto_ativo, foto_credito) values('%s','%s', '%s','%s')",$ident,$foto,$foto_ativo,$foto_credito);
		$resultado = mysqli_query($conexao, $sql) or die(mysqli_error($conexao)."<br/>".$sql);
		echo "<br/>".print_r($resultado)." Resultado da query";
		
		$sql2 = sprintf("INSERT INTO  fotografo_juridico (foto_juri_nome_fan, foto_juri_cnpj, foto_juri_tel, foto_juri_email, foto_juri_cel, foto_juri_senha, foto_cod) VALUES ('%s','%s','%s','%s','%s','%s', LAST_INSERT_ID())",$nome_emp,$cnpj,$tel,$email,$cel,$senha);
		$resultado2 = mysqli_query($conexao,$sql2) or die(mysqli_error($conexao)."<br/>".$sql2);
		
		$sql3 = sprintf("INSERT INTO localizacao_foto (loca_end_foto, loca_num_foto, loca_estado_foto, loca_cidade_foto, foto_cod) VALUES ('%s', '%s', '%s', '%s', LAST_INSERT_ID())",$ende,$num,$est,$cid);
		$resultado3 = mysqli_query($conexao,$sql3) or die(mysqli_error($conexao)."<br/>".$sql3);
		
		if($resultado2){
			return $resultado2;
		}else{
			"Email já cadastrado no sistema!";
			return false;
		}
	}
	
	function perfFoto($conexao, $id, $ident){
		
		if($ident == "FF"){
			$sql = sprintf("select f.foto_cod as 'cod', fs.foto_fisi_nome as 'nome', fs.foto_fisi_email as 'email', fs.foto_fisi_tel as 'tel', fs.foto_fisi_cel as 'cel', fs.foto_fisi_cpf as 'cpf', lf.loca_end_foto as 'end',
                lf.loca_num_foto as 'num', lf.loca_estado_foto as 'estado', lf.loca_cidade_foto as 'cidade',  f.foto_img_perf as 'img' from fotografo f, fotografo_fisico fs, localizacao_foto lf where f.foto_cod = fs.foto_cod and 
				f.foto_cod = lf.foto_cod and f.foto_cod = '%s'",$id);
			$resultado = mysqli_query($conexao, $sql) or die(mysql_error($conexao)."<br/>".$sql);
			echo "<br/> Perf_Foto: ".print_r($resultado)." <br/>";
			$count = mysqli_num_rows($resultado);
			if($count == 1){
				echo "<br/>Entrou no count...<br/>";
				return $resultado;
			}else{ echo "Falha em localizar o perfil "; return false; }
			
		}else if($ident == "FJ"){ // Fim da indent FF e começo da ident FJ
			$sql2 = sprintf("
							select f.foto_cod as 'cod', fj.foto_juri_nome_fan as 'nome', fj.foto_juri_email as 'email', 
				fj.foto_juri_tel as 'tel', fj.foto_juri_cel as 'cel', fj.foto_juri_cnpj as 'cnpj', lf.loca_end_foto as 'end',
				lf.loca_num_foto as 'num', lf.loca_estado_foto as 'estado', lf.loca_cidade_foto as 'cidade',  
				f.foto_img_perf as 'img' 
				from fotografo f, fotografo_juridico fj, localizacao_foto lf 
				where f.foto_cod = fj.foto_cod and 
				f.foto_cod = lf.foto_cod and f.foto_cod = '%s'",$id);
			$resultado2 = mysqli_query($conexao, $sql2) or die(mysqli_error($conexao)."<br/>".$sql2);
			echo "<br/> Perf_Foto: ".print_r($resultado2)." <br/>";
			$count2 = mysqli_num_rows($resultado2);
			if($count2 == 1){
				echo "<br/>Entrou no count...<br/>";
				return $resultado2;
			}else{ echo "Falha em localizar o perfil "; return false; }
		}// fim do IF	
	}	
	
	function ativar_fotografo($conexao, $email, $ident){
		$ativo = 'V';
		if($ident == 'FF'){
			$sql = sprintf("UPDATE fotografo f, fotografo_fisico fs SET foto_ativo = '%s' WHERE f.foto_cod = fs.foto_cod AND fs.foto_fisi_email = '%s'",$ativo,$email);
			$resultado = mysqli_query($conexao, $sql) or die(mysql_error($conexao)."<br/>".$sql);
			if($resultado){
				return $resultado;
			}else{ echo "Falha na ativação do cadastro"; }
		}
		if($ident == 'FJ'){
			$sql2 = sprintf("UPDATE fotografo f, fotografo_juridico fj SET foto_ativo = '%s' WHERE f.foto_cod = fj.foto_cod AND fj.foto_juri_email = '%s'",$ativo,$email);
			$resultado2 = mysqli_query($conexao, $sql2);
			if($resultado2){
				return $resultado2;
			}else{ echo "Falha na ativação do cadastro";}
		}
	}  
	
	function pegarIdFotografo($conexao, $email, $senha){
		
	} 	
	
	function credito_selecionado($conexao, $credi_val){
		$sql = sprintf("SELECT credi_cod as 'codigo', credi_val as 'valor', credi_nome as 'descri' FROM creditos WHERE credi_val = '%s' ",$credi_val);
		$resultado = mysqli_query($conexao, $sql) or die(mysqli_error($conexao)."<br/>".$sql);
		echo "<br/> Credito Selecionado: ".print_r($resultado)." <br/>";		
		if($resultado == 1){
			echo "<br/>Entrou no count credi sele <br/>";
			return $resultado;
		}else{ echo "Falha em localizar o credi sele "; return false; }
	}  
	
	function adiciona_credito($conexao, $email, $senha, $ident, $add_credi){
		echo " aqui estão os dados - Email ".$email." senha: ".$senha." identidade: ".$ident." créditos a adicionar: ".$add_credi." <br/>";
		if($ident == "FF"){
			$sql = sprintf("update fotografo f, fotografo_fisico fs set f.foto_credito = '%s' where f.foto_cod = fs.foto_cod and fs.foto_fisi_email = '%s' and fs.foto_fisi_senha = '%s' ",$add_credi,$email,$senha);
			$resultado = mysqli_query($conexao, $sql);
			if($resultado){
				echo "<br/> Entrou na alter credi: <br/>";
				return $resultado;
			}else{
				echo "Falha adicionar créditos <br/>"; exit; return false;
			}
		}else if($ident == "FJ"){
			$sql2 = sprintf("update fotografo f, fotografo_juridico fj set f.foto_credito = '%s' where f.foto_cod = fj.foto_cod and f.foto_juri_email = '%s' and fj.foto_juri_senha = '%s' ",$add_credi, $email, $senha);			
			$resultado2 = mysqli_query($conexao, $sql2);			
			if($resultado2){
				echo "<br/> Entrou no count credi <br/>";
				return $resultado2;
			}else{ echo "Falha em localizar o credito "; exit; return false; }
		}
		
	}	
	
	function seleciona_id_cidades($conexao, $id_cid){
		$sql = sprintf("SELECT local_cidade_ev as 'id_cidade' FROM localizacao_evento");
		$resultado = mysqli_query($conexao, $sql);
		
		if($resultado){
			while($row = mysqli_fetch_array($resultado)){
				if($row['id_cidade']  == $id_cid){
					return true;
				}
			}
			return false;
		}else{
			echo "Falha no select - listagem de cidades<br/>";
		}
				
		
	}
	
				