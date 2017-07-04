<?php

require('connection.php');

$conexao = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
if (mysqli_connect_errno($conexao)) {

    echo "Falha ao conectar com banco";

}



(isset($_SESSION['cli_email'])) ? $val_email = $_SESSION['cli_email'] : $val_email = " ";
(isset($_SESSION['cli_nome'])) ? $val_nome = $_SESSION['cli_nome'] : $val_nome = " ";
(isset($_SESSION['cli_senha'])) ? $val_senha = $_SESSION['cli_senha'] : $val_senha = " ";


(isset($_SESSION['cli_email'])) ? $val_email = $_SESSION['cli_email'] : $val_email = " ";
(isset($_SESSION['cli_nome'])) ? $val_nome = $_SESSION['cli_nome'] : $val_nome = " ";
(isset($_SESSION['cli_senha'])) ? $val_senha = $_SESSION['cli_senha'] : $val_senha = " ";


(isset($_SESSION['foto_email'])) ? $val_foto_email = $_SESSION['foto_email'] : $val_foto_email = " ";

(isset($_SESSION['foto_senha'])) ? $val_foto_senha = $_SESSION['foto_senha'] : $val_foto_senha = " ";

(isset($_SESSION['ident'])) ? $val_foto_ident = $_SESSION['ident'] : $val_foto_ident = " ";

if ($val_email != " " && $val_senha != " ") {
    $sql       = sprintf("select cli_nome, cli_email, cli_senha, cli_img_perf_dir, cli_ativo, cli_dir from cliente where cli_email = '%s' and cli_senha = '%s'", $val_email, $val_senha);
    $resultado = mysqli_query($conexao, $sql);
    while ($row = mysqli_fetch_array($resultado)) {
        $cli_nome = $row['cli_nome'];
        $cli_img  = $row['cli_img_perf_dir'];
        $cli_dir  = $row['cli_dir'];
    }
} else if ($val_foto_email != " " && $val_foto_senha != " " && $val_foto_ident = "FF") {
    $sql2       = sprintf("select fs.foto_fisi_nome as 'nome', fs.foto_fisi_email as 'email', f.foto_img_perf as 'imagem', f.foto_dir as 'dir'        from fotografo f, fotografo_fisico fs where f.foto_cod = fs.foto_cod and fs.foto_fisi_email = '%s' and fs.foto_fisi_senha = '%s'", $val_foto_email, $val_foto_senha);
    $resultado2 = mysqli_query($conexao, $sql2);
    while ($row = mysqli_fetch_array($resultado2)) {
        $cli_nome = $row['nome'];
        $cli_img  = $row['imagem'];
        $cli_dir  = $row['dir'];
    }
}else{
    $cli_nome = " ";
    $cli_img  = " ";
    $cli_dir  = " ";
}

/*if(isset($_GET['cliemail']) && isset($_GET['cliatialter'])){
	$email = $_GET['cliemail'];
	$autoriza_senha = $_GET['cliatialter'];

}else if(isset($_GET['fotoemail']) && isset($_GET['fotoalter']) && isset($_GET['ident']) ){
	$email = $_GET['fotoemail'];
	$autoriza_senha = $_GET['fotoalter'];
	$ident = $_GET['ident'];
}else{
	header("Location: index.php");
} */


	(isset($_GET['email_alter']))? $email      = $_GET['email_alter'] : $email = "";
  (isset($_GET['cli_ident']))?   $cli_ident  = $_GET['cli_ident']   : $cli_ident = "";
  (isset($_GET['key_change']))?  $key_change = $_GET['key_change']  : $key_change = "";
  
  $chave_cli =  105345893781;
  $chave_foto_fisi =  235482187187;
  $chave_foto_juri =  345893876312;

  //echo "email: ".$email." Cli ident:".$cli_ident." key Change: ".$key_change; 

  if($email != "" && $cli_ident != ""){

    if($key_change == $chave_cli && $cli_ident == 'cli'){
        $chave_mudar = $chave_cli;
    }else if($key_change == $chave_foto_fisi && $cli_ident == 'FF'){
        $chave_mudar = $chave_foto_fisi;
    }else if($key_change == $chave_foto_juri && $cli_ident == 'FJ'){
        $chave_mudar = $chave_foto_juri;
    }else{
      header("Location: index.php");
    }

  }else{ /* fim do primeiro if */
    header("Location: index.php");
  }
