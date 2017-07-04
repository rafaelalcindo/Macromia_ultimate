<?php

function SetDataHj($conexao, $data,$email){
	echo "Data na área 1: ".$data." <br/>";
	
	$sql_update = sprintf("update fotografo f, fotografo_fisico fs
							set f.foto_data01 = '%s'
							where f.foto_cod = fs.foto_cod
							and fs.foto_fisi_email = '%s'",$data,$email);

	$resultado_update_data = mysqli_query($conexao,$sql_update) or die(mysql_error($conexao)."<br/>".$sql_update);

	if($resultado_update_data){
		return true;
	}else{
		false;
	}

}

function compara_data($conexao, $data01, $data02){
	if( strtotime($data01) < strtotime($data02) ){

	}
}


function puxar_data01_banco($conexao, $id_foto){
	$sql_puxar_data = sprintf("select f.foto_data01 as 'data' from fotografo f, fotografo_fisico fs	where f.foto_cod = fs.foto_cod 
						and fs.foto_cod = '%s' ",$id_foto);
	$resultado_puxar_data = mysqli_query($conexao, $sql_puxar_data) or die(mysql_error($conexao)."<br/>".$sql_puxar_data);
	$count = mysqli_num_rows($resultado_puxar_data);
	
	if($count == 1){
		while($rows = mysqli_fetch_array($resultado_puxar_data)){
			$foto_data01 = $rows['data'];
		}
		$foto_data_origi = $foto_data01;
		return $foto_data_origi;

	}else{
		return false;
	}
}

function puxar_data02_banco($conexao, $id_foto){
	$sql_puxar_data02 = sprintf("select f.foto_data02 as 'data' from fotografo f, fotografo_fisico fs	where f.foto_cod = fs.foto_cod 
						and fs.foto_cod = '%s' ",$id_foto);
	$resutlado_puxar_data02 = mysqli_query($conexao, $sql_puxar_data02) or die(mysql_error($conexao)."<br/>".$sql_puxar_data02);
	$count02 = mysqli_num_rows($resutlado_puxar_data02);
	
	if($count02 == 1){
		while($rows = mysqli_fetch_array($resutlado_puxar_data02)){
			$foto_data02	= $rows['data'];
		}
		$foto_data_segundo = $foto_data02;
		return $foto_data_segundo;
	}else{
		return false;
	}

}


function puxar_duas_datas($conexao,$id_foto){
	$data01 = puxar_data01_banco($conexao, $id_foto);
	$data02 = puxar_data02_banco($conexao, $id_foto);
	//echo "Data01: ".$data01."<br/>";
	//echo "Data02: ".$data02."<br/>";

	if(strtotime($data01) != null){
		if(strtotime($data02) == null){
			$data2 = date('Y-m-d', strtotime($data01.' + 1 days'));
			//echo "Data 2 para inserir: ".$data2." ";
			$sql_update02 = sprintf("update fotografo f, fotografo_fisico fs
							set f.foto_data02 = '%s'
							where f.foto_cod = fs.foto_cod
							and fs.foto_cod = '%s'",$data2,$id_foto);
			$resultado_update_data02 = mysqli_query($conexao,$sql_update02) or die(mysql_error($conexao)."<br/>".$sql_update02);
			$set_limite = atualiza_limite_click($conexao,$id_foto);
			echo "true";
		}else if(strtotime($data01) < strtotime($data02)){
			$limite_click = puxar_foto_limite_click($conexao,$id_foto);
			//echo "entrou nessa fase! |  ".$limite_click." ";
			//echo "<br/>limite_click valor: ".$limite_click."<br/>";
			if($limite_click != false || $limite_click != null){
				//echo "<br/>limite_click valor: ".$limite_click."<br/>";
				if($limite_click > 0 ){
					//$resu_limite = desconta_limite_click($conexao, $id_foto, $limite_click);
					echo "true";
				}else{
					echo "false";
				}
			}else{
				echo "false";
			}
		}else if(strtotime($data01) <= strtotime($data02) || strtotime($data01) > strtotime($data02)){
			$reset_click = atualiza_limite_click($conexao, $id_foto);
			$reset_data2 = alterData02($conexao, $id_foto, $data01);
			if($reset_click == true && $reset_data2 == true){
				echo "true";
			}else{
				echo "false";
			}
		}
	}



}




function puxar_foto_limite_click($conexao, $id_foto){
	$sql_limite_click = sprintf("select f.foto_limite_click as 'limite_click' from fotografo f, fotografo_fisico fs	where f.foto_cod = fs.foto_cod 
						and fs.foto_cod = '%s'",$id_foto);
	$resultado_limite_click = mysqli_query($conexao,$sql_limite_click) or die(mysql_error($conexao)."<br/>".$sql_limite_click);
	$count = mysqli_num_rows($resultado_limite_click);
	
	if($count == 1){
		while($rows = mysqli_fetch_array($resultado_limite_click)){
			$resu_limi = $rows['limite_click'];
		}
		return $resu_limi;
	}else{
		return false;
	}
}

function desconta_limite_click($conexao, $id_foto,$limite_click){
	$resu_limite = $limite_click - 1;
	$sql_update_limite = sprintf("update fotografo f, fotografo_fisico fs set f.foto_limite_click = %u where f.foto_cod = fs.foto_cod and fs.foto_cod = '%s'",$resu_limite, $id_foto);
	$resultado_update_limite = mysqli_query($conexao, $sql_update_limite) or die(mysql_error($conexao)."<br/>".$sql_update_limite);

	if($resultado_update_limite){
		return true;
	}else{
		return false;
	}

}

function atualiza_limite_click($conexao, $id_foto){
	$limite_click = 3;
	$sql_update_limite_reset = sprintf("update fotografo f, fotografo_fisico fs set f.foto_limite_click = %u where f.foto_cod = fs.foto_cod and fs.foto_cod = '%s'", $limite_click, $id_foto);

	$resultado_update_reset = mysqli_query($conexao, $sql_update_limite_reset) or die(mysql_error($conexao)."<br/>".$sql_update_limite_reset);
	if($resultado_update_reset){
		return true;
	}else{ return false; }
}


function alterData02($conexao, $id_foto, $data01){
	$data2 = date('Y-m-d', strtotime($data01.' + 1 days'));
	$sql_alter02 = sprintf("update fotografo f, fotografo_fisico fs	set f.foto_data02 = '%s' where f.foto_cod = fs.foto_cod and fs.foto_cod = '%s'",$data2,$id_foto);
	$resultado_alter_data02 = mysqli_query($conexao,$sql_alter02) or die(mysql_error($conexao)."<br/>".$sql_alter02);
	if($resultado_alter_data02){
		return true;
	}else{ return false; }
}
