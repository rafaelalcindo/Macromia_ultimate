<?php

session_start(); require('connection.php'); 
        $conexao = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
        if(mysqli_connect_errno($conexao)){ echo "Falha ao conectar com banco";}
      
       

           (isset($_SESSION['foto_email']))? $val_foto_email = $_SESSION['foto_email'] : $val_foto_email = " ";
           (isset($_SESSION['foto_senha']))? $val_foto_senha = $_SESSION['foto_senha'] : $val_foto_senha = " ";
           (isset($_SESSION['ident']))?      $val_foto_ident = $_SESSION['ident'] : $val_foto_ident = " ";

           (isset($_SESSION['cli_email'])) ? $val_email = $_SESSION['cli_email'] : $val_email = " ";
          (isset($_SESSION['cli_nome'])) ? $val_nome = $_SESSION['cli_nome'] : $val_nome = " ";
          (isset($_SESSION['cli_senha'])) ? $val_senha = $_SESSION['cli_senha'] : $val_senha = " ";
     
       if($val_foto_email != " " && $val_foto_senha != " " && $val_foto_ident = "FF"){ // Val e lista fotografo físico
            $sql2 = sprintf("select f.foto_cod as 'foto_id', fs.foto_fisi_nome as 'nome' ,fs.foto_fisi_email as 'email', f.foto_img_perf as 'imagem', f.foto_dir as 'dir',
                f.foto_credito as 'credito'
                from fotografo f, fotografo_fisico fs, localizacao_foto lf, estado es, cidade cid where 
                f.foto_cod = fs.foto_cod and
                f.foto_cod = lf.foto_cod and
                lf.loca_estado_foto = es.id and
                lf.loca_cidade_foto = cid.id
        and fs.foto_fisi_email = '%s' and fs.foto_fisi_senha = '%s'",$val_foto_email, $val_foto_senha);
            $resultado2 = mysqli_query($conexao, $sql2);
            while($row = mysqli_fetch_array($resultado2)){
            	$cli_id 		= $row['foto_id'];
                $cli_nome       = $row['nome'];
                $cli_img        = utf8_encode($row['imagem']);
                $cli_dir        = utf8_encode($row['dir']);
                $cli_email      = utf8_encode($row['email']);
                $cli_credito    = utf8_encode($row['credito']);
            }

          
            
            

        }else if($val_foto_email != " " && $val_foto_senha != " " && $val_foto_ident = "FJ"){
            $sql3 = sprintf("select f.foto_cod as 'foto_id', fj.foto_juri_nome_fan as 'nome', fj.foto_juri_email as 'email', f.foto_img_perf as 'imagem', f.foto_dir as 'dir',
                f.foto_credito as 'credito'
                from fotografo f, fotografo_juridico fj, localizacao_foto lf, estado es, cidade cid where 
                f.foto_cod = fj.foto_cod and
                f.foto_cod = lf.foto_cod and
                lf.loca_estado_foto = es.id and
                lf.loca_cidade_foto = cid.id
                and fj.foto_juri_email = '%s' and fj.foto_juri_senha = '%s'",$val_foto_email, $val_foto_senha);
            $resultado3 = mysqli_query($conexao, $sql3);
            while($row = mysqli_fetch_array($resultado3)){
            	$cli_id  		= $row['foto_id'];
                $cli_nome       = utf8_encode($row['nome']);
                $cli_img        = utf8_encode($row['imagem']);
                $cli_dir        = utf8_encode($row['dir']);
                $cli_email      = utf8_encode($row['email']);
                $cli_imagem     = utf8_encode($row['credito']);
            }

            $sql_especi = sprintf("select esp.especi_tipo as 'especialidade' from fotografo f, especialidades esp,fotografo_fisico fj where f.foto_cod = esp.foto_cod and fs.foto_cod = f.foto_cod and fj.foto_juri_email = '%s' and fj.foto_juri_senha = '%s'",$val_foto_email, $val_foto_senha);
            $resultado_especi = mysqli_query($conexao, $sql_especi);

            $count_especi_linha = mysqli_num_rows($resultado_especi);
            $especi_array[] = array();
            if($count_especi_linha > 0){                  
                while ($row = mysqli_fetch_array($resultado_especi)) {
                $especi_array[] = utf8_encode($row['especialidade']);
                }
            }else{ $especi_array[] = "Nenhum evento cadastrado!" ;}

        }else{
            header("Location: index.php");
        } 

