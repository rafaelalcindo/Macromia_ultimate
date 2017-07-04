<?php
	
	function logar_foto_fisi($conexao, $email, $senha){
		$sql = sprintf("select f.foto_cod as 'cod', fs.foto_fisi_nome as 'nome', fs.foto_fisi_email as 'email', 
			fs.foto_fisi_tel as 'tel', fs.foto_fisi_cel as 'cel', fs.foto_fisi_cpf as 'cpf', 
			f.foto_img_perf as 'imagem', f.foto_identi as 'ident', f.foto_ativo as 'status',
			fs.foto_fisi_senha as 'senha', f.foto_dir as 'dir'
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
			fj.foto_juri_senha as 'senha', f.foto_dir as 'dir'		
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
	
	function cadFotoFisi($conexao, $ident, $foto='', $nome,$email,$senha,$tel,$cel,$cpf, $ende,$num,$est,$cid, $especi,$foto_coment=" ",$foto_edicao=" ",$foto_emp='',$foto_cep=''){

		$veri_cli		 = verifiClienteEmailFoto($conexao, $email);
		$veri_foto_fisi  = verifiFotoFisiEmailFoto($conexao, $email);
		$veri_foto_juri	 = verifiFotoJuriEmailFoto($conexao, $email);

		//echo "<br/> No model Especialidade: ".print_r($especi)." <br/>";

		if($veri_cli){
			return false;
		}else if($veri_foto_fisi){
			return false;
		}else if($veri_foto_juri){
			return false;
		}else{
			$foto_ativo = 'V';
			$foto_credito = 1000000;
			
			$email_explode = explode('@',$email);
			$dir_insert	   = $email_explode[0];
			//echo "<br/> array explode: ".print_r($email_explode)." <br/>";		
			$email_explode02 = explode('.', $email_explode[1]);
			//echo "<br/> array explode: ".print_r($email_explode02)." <br/>";
			$dir_insert = $dir_insert.$email_explode02[0];

			date_default_timezone_set('America/Sao_Paulo');
			$data = date('Y-m-d');
			$hora = date('H:i:s');

			$foto_coment_inserir = mysqli_real_escape_string($conexao, $foto_coment);
			
			$sql = sprintf("insert into fotografo (foto_identi, foto_img_perf, foto_ativo, foto_credito, foto_dir, foto_comentario, foto_edicao, foto_data_cad, foto_hora_cad) values('%s','%s', '%s','%s','%s','%s','%s','%s','%s')",$ident,$foto,$foto_ativo,$foto_credito,$dir_insert, $foto_coment_inserir,$foto_edicao,$data,$hora);
			$resultado = mysqli_query($conexao, $sql) or die(mysql_error($conexao)."<br/>".$sql);

			echo "<br/>".print_r($resultado)." Resultado da query";
			$id_fotografo = mysqli_insert_id($conexao);		

			$sql2 = sprintf("insert into fotografo_fisico (foto_fisi_cpf, foto_fisi_nome, foto_fisi_email, foto_fisi_tel, foto_fisi_cel, foto_fisi_senha, foto_fisi_nome_emp, foto_cod) values ('%s','%s','%s','%s','%s','%s','%s',LAST_INSERT_ID())",$cpf,$nome, $email,$tel, $cel ,$senha ,  $foto_emp);
			$resultado2 = mysqli_query($conexao, $sql2) or die(mysql_error($conexao)."<br/>".$sql2);
			
			$sql3 = sprintf("INSERT INTO localizacao_foto (loca_end_foto, loca_num_foto, loca_estado_foto, loca_cidade_foto, loca_cep_foto,foto_cod) VALUES ('%s', '%s', '%s', '%s', '%s',LAST_INSERT_ID())",$ende,$num,$est,$cid,$foto_cep);
			$resultado3 = mysqli_query($conexao,$sql3) or die(mysql_error($conexao)."<br/>".$sql3);

			$resulEspeci = IserirEspecialidadeFotografo($conexao, $id_fotografo, $especi);
					
			if($resultado2){
				if($resulEspeci){return $resultado2;}else{ return false; }
				      
			}else{
				echo "Email já cadastrado no sistema";
				return false;
			}	

		}
		
			
	}

	function alterFotoFisi($conexao, $foto_coment, $foto_nome, $foto_tel, $foto_cel,  $foto_cpf, $foto_end, $foto_num, $foto_estado, $foto_cidade, $foto_email, $foto_especi, $foto_img,$foto_emp='', $foto_cep=''){
		//echo "Email :".$foto_email." <br/>";
		echo "<br/>Dentro do foto_especi: ".print_r($foto_especi)."<br/>";

		$sql_update = sprintf("
				update fotografo f, fotografo_fisico fs, localizacao_foto lf
				set f.foto_comentario = '%s', f.foto_img_perf = '%s',
				    fs.foto_fisi_nome = '%s', fs.foto_fisi_tel = '%s', fs.foto_fisi_cel = '%s', fs.foto_fisi_cpf = '%s',
				    lf.loca_end_foto = '%s',lf.loca_num_foto = '%s', lf.loca_estado_foto = %u, lf.loca_cidade_foto = %u,
				    fs.foto_fisi_nome_emp = '%s', lf.loca_cep_foto = '%s'
				where f.foto_cod = fs.foto_cod
				and f.foto_cod	 = lf.foto_cod
				and fs.foto_fisi_email = '%s' ", $foto_coment, $foto_img,$foto_nome, $foto_tel, $foto_cel, $foto_cpf, $foto_end, $foto_num, $foto_estado, $foto_cidade, $foto_emp, $foto_cep, $foto_email);
		$resultado_update = mysqli_query($conexao, $sql_update) or die(mysqli_error($conexao)."<br/>".$sql_update);
		$resulUpEspeci 	  = atualizarEspecialidadeFotografo($conexao,$foto_email,$foto_especi);

		if($resultado_update){
			return true;
		}else{
			return false;
		}

	}
	
	function cadFotoJuridico($conexao, $ident, $foto, $nome_emp, $email, $senha, $tel, $cel, $cnpj, $ende, $num, $est, $cid, $especi, $foto_coment, $foto_edicao=""){

		$veri_cli		 = verifiClienteEmailFoto($conexao,$email);
		$veri_foto_fisi  = verifiFotoFisiEmailFoto($conexao,$email);
		$veri_foto_juri	 = verifiFotoJuriEmailFoto($conexao,$email);

		if($veri_cli){
			return false;
		}else if($veri_foto_fisi){
			return false;
		}else if($veri_foto_juri){
			return false;
		}else{
			$foto_ativo = 'V';
			$foto_credito = 1000000;
			
			$email_explode = explode('@',$email);
			$dir_insert = $email_explode[0];
			
			$sql = sprintf("insert into fotografo (foto_identi, foto_img_perf, foto_ativo, foto_credito, foto_dir, foto_edicao) values('%s','%s', '%s','%s', '%s','%s')",$ident,$foto,$foto_ativo,$foto_credito,$dir_insert,$foto_edicao);
			$resultado = mysqli_query($conexao, $sql) or die(mysqli_error($conexao)."<br/>".$sql);
			echo "<br/>".print_r($resultado)." Resultado da query";
			$id_fotografo = mysqli_insert_id($conexao);		
			
			$sql2 = sprintf("INSERT INTO  fotografo_juridico (foto_juri_nome_fan, foto_juri_cnpj, foto_juri_tel, foto_juri_email, foto_juri_cel, foto_juri_senha, foto_cod) VALUES ('%s','%s','%s','%s','%s','%s', LAST_INSERT_ID())",$nome_emp,$cnpj,$tel,$email,$cel,$senha);
			$resultado2 = mysqli_query($conexao,$sql2) or die(mysqli_error($conexao)."<br/>".$sql2);
			
			$sql3 = sprintf("INSERT INTO localizacao_foto (loca_end_foto, loca_num_foto, loca_estado_foto, loca_cidade_foto, foto_cod) VALUES ('%s', '%s', '%s', '%s', LAST_INSERT_ID())",$ende,$num,$est,$cid);
			$resultado3 = mysqli_query($conexao,$sql3) or die(mysqli_error($conexao)."<br/>".$sql3);
			
			$resulEspeci = IserirEspecialidadeFotografo($conexao, $id_fotografo, $especi);

			if($resultado2){
				if($resulEspeci){return $resultado2;}else{ return false; }
				
			}else{				
				return false;
			}
		}
		
	}

	function IserirEspecialidadeFotografo($conexao,$id_foto,$especialidade){
		echo "<br/> Especialidades: ".print_r($especialidade)."<br/>";
		$especi_inseri[] = array();
		$especi_inseri = $especialidade;


		if(is_array($especi_inseri)){
			   foreach ($especi_inseri as $key => $data) {
				 // echo "<br/> chave: ".$key." valor da chave:".$data."<br/>";
				  iserirEspecialidade($conexao,$data, $id_foto);
			   }
			   return true;
			}else{ 
			  $sqlEspeci = sprintf("insert into especialidades (especi_tipo, foto_cod) values ('%s','%s')",$data,$id_foto);
			  $resultadoEspeci = mysqli_query($conexao, $sqlEspeci) or die(mysqli_error($conexao)."<br/>".$sqlEspeci);
			  if($resultadoEspeci){
				  return true;
			  }else{ return false; echo "<br/> Algum erro aconteceu na especialidade fotografo.<br/>";  exit(); } 
		}
		/*foreach ($especi_inseri as $key => $data) {


			echo "<br/> chave: ".$key." valor da chave:".$data."<br/>";
		}*/
		
	}



	function atualizarEspecialidadeFotografo($conexao,$foto_email,$especialidades){
		$foto_id = getFotoFisiIdByEmail($conexao,$foto_email);
		echo "<br/> Especialidades: ".print_r($especialidades)."<br/>";
		//exit();
		$especi_inseri[] = array();
		$especi_inseri = $especialidades;
		echo "<br/>especi_inseri: ".print_r($especi_inseri)."<br/>";

		if(is_array($especialidades)){

			echo "<br/>Entrou no array...";
			
			$especi_atual = array('cod','tipo','visu');
			$todas_especi = getAllEspecialidades($conexao, $foto_id);
			$todas_especi02 = getAllEspecialidades($conexao, $foto_id);
			echo "Todas as especi: ".print_r($todas_especi)."<br/>";
			$inserir_update = array();
		
			//$todas_especi02 = $todas_especi;

			//echo "Todas as especi: ".print_r($todas_especi02)."<br/>";
			
			atualizaDestivaEspeci($conexao,$foto_id);

		if($todas_especi != false){
			//while($row = mysqli_fetch_array($todas_especi)){
				eraseAllEspeci($conexao, $foto_id);
				foreach ($especi_inseri as $key => $data) {
					
					echo "<br/>Data:   ".$data."<br/>";
					/*if($row['tipo'] == $data && ($row['tipo'] != null && $data != null)){
						echo "<br/>Entrou no if<br/>";
					    atualizarAtivaEspci($conexao, $foto_id, $row['tipo']);
					}else{
						echo "<br/>Entrou no else<br/>";
						iserirEspecialidade($conexao,$data,$foto_id);


						while($row02 = mysqli_fetch_array($todas_especi02)){
							echo "<br/>data02 : ".$data."<br/>";
							echo "<br/>row02:   ".$row02['tipo']."<br/>";	
							if($data != $row02['tipo']){
								echo "entrou while inserir: ".print_r($data)."<br/>";
								iserirEspecialidade($conexao,$data,$foto_id);
							}
						} 
					}*/
					iserirEspecialidade($conexao,$data, $foto_id);

				}
				return true;
			//} //end of while
		}else{

			if(is_array($especi_inseri)){
			   foreach ($especi_inseri as $key => $data) {
				 // echo "<br/> chave: ".$key." valor da chave:".$data."<br/>";
				  iserirEspecialidade($conexao,$data, $foto_id);
			   }
			   return true;
			}else{ 
			  $sqlEspeci = sprintf("insert into especialidades (especi_tipo, foto_cod) values ('%s','%s')",$data,$id_foto);
			  $resultadoEspeci = mysqli_query($conexao, $sqlEspeci) or die(mysqli_error($conexao)."<br/>".$sqlEspeci);
			  if($resultadoEspeci){
				  return true;
			  }else{ return false; echo "<br/> Algum erro aconteceu na especialidade fotografo.<br/>";  exit(); } 
		    }

		}
			


			exit();
			return true;			
		}else{return false;}
	}




	function iserirEspecialidade($conexao,$data,$id_foto){
		  $sqlEspeci = sprintf("insert into especialidades (especi_tipo, foto_cod) values ('%s','%s')",$data,$id_foto);
		   $resultadoEspeci = mysqli_query($conexao, $sqlEspeci) or die(mysqli_error($conexao)."<br/>".$sqlEspeci);
		   if($resultadoEspeci){
		   		return true;
		   }else{ return false; echo "<br/> Algum erro aconteceu na especialidade fotografo.<br/>"; exit(); }
	}
	
	function perfFoto($conexao, $id, $ident){
		
		if($ident == "FF"){
			$sql = sprintf("select f.foto_cod as 'cod', fs.foto_fisi_nome as 'nome', fs.foto_fisi_email as 'email', fs.foto_fisi_tel as 'tel', fs.foto_fisi_cel as 'cel', fs.foto_fisi_cpf as 'cpf', lf.loca_end_foto as 'end',
                lf.loca_num_foto as 'num', lf.loca_estado_foto as 'estado', lf.loca_cidade_foto as 'cidade',  f.foto_img_perf as 'img', f.foto_dir as 'dir' from fotografo f, fotografo_fisico fs, localizacao_foto lf where f.foto_cod = fs.foto_cod and 
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
				f.foto_img_perf as 'img', f.foto_dir as 'dir'
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




	// Little Help--------------------------------------------------------------------------------------------------------



	function getFotoFisiIdByEmail($conexao, $email){
		$sql_get_id = sprintf("select foto_cod as 'cod' from fotografo_fisico where foto_fisi_email = '%s'",$email);
		$resultado_id = mysqli_query($conexao, $sql_get_id);

		if($resultado_id){
			while($row = mysqli_fetch_array($resultado_id)){
				$cod_foto = $row['cod'];
			}
			return $cod_foto;
		}else{
			return 0;
		}


	}

	function getAllEspecialidades($conexao, $foto_cod){
		$sql_get_especi = sprintf("select especi_cod as 'cod', especi_tipo as 'tipo', especi_visu as 'visu' from  especialidades where foto_cod = '%s' ",$foto_cod);
		$resul_especi	= mysqli_query($conexao, $sql_get_especi);
		$rows = mysqli_num_rows($resul_especi);
		if($rows > 0){
			return $resul_especi;
		}else{
			return false;
		}
	}
	

	function atualizarAtivaEspci($conexao, $foto_cod, $tipo){
		$sql_updateEspeci = sprintf("update especialidades set visu = true where tipo == '%s' and foto_cod = %u",$tipo,$foto_cod);
		$resul_upEspeci   = mysqli_query($conexao, $sql_updateEspeci);
		if($resul_upEspeci){
			return $resul_upEspeci;
		}else{ return false; }
	}

	function atualizaDestivaEspeci($conexao, $foto_cod){
		$sql_updateEspeci = sprintf("update especialidades set visu = false where  and foto_cod = %u", $foto_cod);
		$resul_upEspeci	  = mysqli_query($conexao, $sql_updateEspeci);
		echo "<br/>resutado da alteracao:".print_r($resul_upEspeci)."<br/>";
		if($resul_upEspeci){
			return $resul_upEspeci;
		}else{
			return false;
		}
	}

	function eraseAllEspeci($conexao,$foto_cod){
		$sql_eraseEspeci = sprintf("delete from especialidades where foto_cod = %u ",$foto_cod);
		$resulDelete 	 = mysqli_query($conexao, $sql_eraseEspeci);
		if($resulDelete){
			return true;
		}else{ return false; }
	}
	
	
	
	




















	// --------------------------------------------------- Varificação de cadastro --------------------------------------------------------


function verifiClienteEmailFoto($conexao, $email){
	$sql = sprintf("select cli_nome, cli_email, cli_senha, cli_img_perf_dir, cli_ativo from cliente where cli_email = '%s'  ",$email);
	$resultado = mysqli_query($conexao,$sql);
	$count = mysqli_num_rows($resultado);
	if($count == 1){
		return true;
	}else{ return false;}
}

function verifiFotoFisiEmailFoto($conexao, $email){
	$sql = sprintf("select f.foto_cod as 'cod', fs.foto_fisi_nome as 'nome', fs.foto_fisi_email as 'email', fs.foto_fisi_tel as 'tel', fs.foto_fisi_cel as 'cel', fs.foto_fisi_cpf as 'cpf', f.foto_img_perf as 'imagem'
        from fotografo f, fotografo_fisico fs where f.foto_cod = fs.foto_cod and fs.foto_fisi_email = '%s' ",$email);
	$resultado = mysqli_query($conexao, $sql);
	$count = mysqli_num_rows($resultado);
	if($count == 1){
		return true;
	}else{ return false; }
}

function verifiFotoJuriEmailFoto($conexao, $email){
	$sql = sprintf("select 
			f.foto_cod as 'cod', fj.foto_juri_nome_fan as 'nome', fj.foto_juri_email as 'email',
			fj.foto_juri_tel as 'tel', fj.foto_juri_cel as 'cel', fj.foto_juri_cnpj as 'cnpj',
			f.foto_img_perf as 'imagem', f.foto_identi as 'ident', f.foto_ativo as 'status'		
		from fotografo f, fotografo_juridico fj where f.foto_cod = fj.foto_cod and fj.foto_juri_email = '%s' ",$email);
	$resultado = mysqli_query($conexao,$sql);
	$count = mysqli_num_rows($resultado);
	if($count == 1){
		return true;
	}else{ return false; }
}	
	
	
	
	
	
	
	