<?php


session_start();
require('connection.php');
$conexao = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
if (mysqli_connect_errno($conexao)) {
    echo "Falha ao conectar com banco";
}


(isset($_SESSION['cli_email'])) ? $val_email = $_SESSION['cli_email'] : $val_email = " ";
(isset($_SESSION['cli_nome'])) ? $val_nome = $_SESSION['cli_nome'] : $val_nome = " ";
(isset($_SESSION['cli_senha'])) ? $val_senha = $_SESSION['cli_senha'] : $val_senha = " ";

(isset($_GET['errAut']))? $Aut_error = "Email ou sua Senha incorreto!" : $Aut_error = " ";
(isset($_GET['erCadEmail']))? $Aut_errorCad = "Email já cadastrado no sistema!" : $Aut_errorCad = " ";
(isset($_GET['errAtivacao']))? $Aut_ativacao = "Conta não confirmada, verifique seu email!" : $Aut_ativacao = " ";


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
    header("Location: index.php");
} else if (($val_foto_email != " " && $val_foto_senha != " ") || ($val_email != " " && $val_senha != " ")) {
    header("Location: index.php");
}


?>