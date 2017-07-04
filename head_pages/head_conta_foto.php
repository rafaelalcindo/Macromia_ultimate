<?php session_start(); require('connection.php'); 
        $conexao = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
        if(mysqli_connect_errno($conexao)){ echo "Falha ao conectar com banco";}
      
       

           (isset($_SESSION['foto_email']))? $val_foto_email = $_SESSION['foto_email'] : $val_foto_email = " ";
           (isset($_SESSION['foto_senha']))? $val_foto_senha = $_SESSION['foto_senha'] : $val_foto_senha = " ";
           (isset($_SESSION['ident']))?      $val_foto_ident = $_SESSION['ident'] : $val_foto_ident = " ";

           (isset($_SESSION['cli_email'])) ? $val_email = $_SESSION['cli_email'] : $val_email = " ";
          (isset($_SESSION['cli_nome'])) ? $val_nome = $_SESSION['cli_nome'] : $val_nome = " ";
          (isset($_SESSION['cli_senha'])) ? $val_senha = $_SESSION['cli_senha'] : $val_senha = " ";
     
       if($val_foto_email != " " && $val_foto_senha != " " && $val_foto_ident = "FF"){ // Val e lista fotografo físico
            $sql2 = sprintf("select  fs.foto_fisi_nome as 'nome' ,fs.foto_fisi_email as 'email', f.foto_img_perf as 'imagem', f.foto_dir as 'dir',
                f.foto_credito as 'credito', fs.foto_fisi_cpf as 'cpf', fs.foto_fisi_tel as 'tel', fs.foto_fisi_cel as 'cel', fs.foto_fisi_nome_emp as 'emp',
                lf.loca_end_foto as 'end', lf.loca_num_foto as 'numero', lf.loca_cep_foto as 'cep',
                es.uf as 'estado', cid.nome as 'cidade', f.foto_comentario as 'comentario'
                from fotografo f, fotografo_fisico fs, localizacao_foto lf, estado es, cidade cid where 
                f.foto_cod = fs.foto_cod and
                f.foto_cod = lf.foto_cod and
                lf.loca_estado_foto = es.id and
                lf.loca_cidade_foto = cid.id
        and fs.foto_fisi_email = '%s' and fs.foto_fisi_senha = '%s'",$val_foto_email, $val_foto_senha);
            $resultado2 = mysqli_query($conexao, $sql2);
            while($row = mysqli_fetch_array($resultado2)){
                $cli_nome       = $row['nome'];
                $cli_emp        = $row['emp'];
                $cli_img        = utf8_encode($row['imagem']);
                $cli_dir        = utf8_encode($row['dir']);
                $cli_email      = utf8_encode($row['email']);
                $cli_imagem     = utf8_encode($row['credito']);
                $cli_cpf        = utf8_encode($row['cpf']);
                $cli_tel        = utf8_encode($row['tel']);
                $cli_cel        = utf8_encode($row['cel']);
                $cli_end        = $row['end'];
                $cli_cep        = $row['cep'];
                $cli_num        = utf8_encode($row['numero']);
                $cli_estado     = utf8_encode($row['estado']);
                $cli_cidade     = utf8_encode($row['cidade']);
                $cli_comentario = $row['comentario'];
            }

            $sql_especi = sprintf("select esp.especi_tipo as 'especialidade' from fotografo f, especialidades esp,fotografo_fisico fs where f.foto_cod = esp.foto_cod and fs.foto_cod = f.foto_cod and fs.foto_fisi_email = '%s' and fs.foto_fisi_senha = '%s'",$val_foto_email, $val_foto_senha);
            $resultado_especi = mysqli_query($conexao, $sql_especi);

            $count_especi_linha = mysqli_num_rows($resultado_especi);
            $especi_array[] = array();
            if($count_especi_linha > 0){                  
                while ($row = mysqli_fetch_array($resultado_especi)) {
                $especi_array[] = utf8_encode($row['especialidade']);
                }
            }else{ $especi_array[] = "Nenhum evento cadastrado!" ;}



            $sql_ultimo_contato = sprintf("select 
                          ev.servico as 'servicos' , cli.cli_nome as 'nome', cli.cli_email as 'email', cli.cli_cel as 'cel', cli.cli_telefone as 'tel'
                          from cliente cli, fotografo f, evento ev, atende ate, fotografo_fisico fs
                          where cli.cli_cod = ev.cli_cod 
                          and ev.cod_evento = ate.cod_evento
                          and ate.foto_cod  = f.foto_cod
                          and fs.foto_cod = f.foto_cod
                          and fs.foto_fisi_email = '%s' 
                          order by ev.cod_evento desc limit 1",$val_foto_email);
            $resultado_ultimo_contato = mysqli_query($conexao, $sql_ultimo_contato);

            $count_ultimo_contato = mysqli_num_rows($resultado_ultimo_contato);
            if($count_ultimo_contato > 0){
              
              while($row = mysqli_fetch_array($resultado_ultimo_contato)){
                  $ulti_servico = utf8_encode($row['servicos']);
                  $ulti_nome    = utf8_encode($row['nome']);
                  $ulti_email   = utf8_encode($row['email']);
                  $ulti_cel     = utf8_encode($row['cel']);
                  $ulti_tel     = utf8_encode($row['tel']);
              }
            }


            
            

        }else if($val_foto_email != " " && $val_foto_senha != " " && $val_foto_ident = "FJ"){
            $sql3 = sprintf("select fj.foto_juri_nome_fan as 'nome', fj.foto_juri_email as 'email', f.foto_img_perf as 'imagem', f.foto_dir as 'dir',
                f.foto_credito as 'credito', fj.foto_juri_cnpj as 'cnpj', fj.foto_juri_tel as 'tel', fj.foto_juri_cel as 'cel',
                lf.loca_end_foto as 'end', lf.loca_num_foto as 'numero', 
                es.uf as 'estado', cid.nome as 'cidade', f.foto_comentario as 'comentario'
                from fotografo f, fotografo_juridico fj, localizacao_foto lf, estado es, cidade cid where 
                f.foto_cod = fj.foto_cod and
                f.foto_cod = lf.foto_cod and
                lf.loca_estado_foto = es.id and
                lf.loca_cidade_foto = cid.id
                and fj.foto_juri_email = '%s' and fj.foto_juri_senha = '%s'",$val_foto_email, $val_foto_senha);
            $resultado3 = mysqli_query($conexao, $sql3);
            while($row = mysqli_fetch_array($resultado3)){
                $cli_nome       = utf8_encode($row['nome']);
                $cli_img        = utf8_encode($row['imagem']);
                $cli_dir        = utf8_encode($row['dir']);
                $cli_email      = utf8_encode($row['email']);
                $cli_imagem     = utf8_encode($row['credito']);
                $cli_cnpj       = utf8_encode($row['cnpj']);
                $cli_tel        = utf8_encode($row['tel']);
                $cli_cel        = utf8_encode($row['cel']);
                $cli_end        = utf8_encode($row['end']);
                $cli_num        = utf8_encode($row['numero']);
                $cli_estado     = utf8_encode($row['estado']);
                $cli_cidade     = utf8_encode($row['cidade']);
                $cli_comentario = $row['comentario'];
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




            $sql_ultimo_contato = sprintf("select 
                          ev.servico as 'servicos' , cli.cli_nome as 'nome', cli.cli_email as 'email', cli.cli_cel as 'cel', cli.cli_telefone as 'tel'
                          from cliente cli, fotografo f, evento ev, atende ate, fotografo_juridico fj
                          where cli.cli_cod = ev.cli_cod 
                          and ev.cod_evento = ate.cod_evento
                          and ate.foto_cod  = f.foto_cod
                          and fj.foto_cod = f.foto_cod
                          and fj.foto_juri_email = '%s' 
                          order by ev.cod_evento desc limit 1",$val_foto_email);
            $resultado_ultimo_contato = mysqli_query($conexao, $sql_ultimo_contato);

            $count_ultimo_contato = mysqli_num_rows($resultado_ultimo_contato);
            if($count_ultimo_contato > 0){
              
              while($row = mysqli_fetch_array($resultado_ultimo_contato)){
                  $ulti_servico = utf8_encode($row['servicos']);
                  $ulti_nome    = utf8_encode($row['nome']);
                  $ulti_email   = utf8_encode($row['email']);
                  $ulti_cel     = utf8_encode($row['cel']);
                  $ulti_tel     = utf8_encode($row['tel']);
              }
            }


        }else{
            header("Location: index.php");
        }     
     ?>