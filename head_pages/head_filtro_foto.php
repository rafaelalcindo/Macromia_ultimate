<?php
  session_start();
  require('connection.php');
  $conexao = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
  if (mysqli_connect_errno($conexao)) {
      echo "Falha ao conectar com banco";
  }



(isset($_SESSION['foto_email'])) ? $val_foto_email = $_SESSION['foto_email'] : $val_foto_email = " ";
(isset($_SESSION['foto_senha'])) ? $val_foto_senha = $_SESSION['foto_senha'] : $val_foto_senha = " ";
(isset($_SESSION['ident'])) ? $val_foto_ident = $_SESSION['ident'] : $val_foto_ident = " ";

(isset($_SESSION['cli_email'])) ? $val_email = $_SESSION['cli_email'] : $val_email = " ";
(isset($_SESSION['cli_nome'])) ? $val_nome = $_SESSION['cli_nome'] : $val_nome = " ";
(isset($_SESSION['cli_senha'])) ? $val_senha = $_SESSION['cli_senha'] : $val_senha = " ";

if ($val_foto_email != " " && $val_foto_senha != " " && $val_foto_ident = "FF") {
    $sql2       = sprintf("select f.foto_cod as 'id', fs.foto_fisi_nome as 'nome', fs.foto_fisi_email as 'email', f.foto_img_perf as 'imagem', f.foto_dir as 'dir',                f.foto_credito as 'credito', fs.foto_fisi_cpf as 'cpf', fs.foto_fisi_tel as 'tel', fs.foto_fisi_cel as 'cel',                lf.loca_end_foto as 'end', lf.loca_num_foto as 'numero',                 es.uf as 'estado', cid.nome as 'cidade', f.foto_comentario as 'comentario'                from fotografo f, fotografo_fisico fs, localizacao_foto lf, estado es, cidade cid where                 f.foto_cod = fs.foto_cod and                f.foto_cod = lf.foto_cod and                lf.loca_estado_foto = es.id and                lf.loca_cidade_foto = cid.id        and fs.foto_fisi_email = '%s' and fs.foto_fisi_senha = '%s'", $val_foto_email, $val_foto_senha);
    $resultado2 = mysqli_query($conexao, $sql2);
    while ($row = mysqli_fetch_array($resultado2)) {
        $cli_id         = utf8_encode($row['id']);
        $cli_nome       = utf8_encode($row['nome']);
        $cli_img        = utf8_encode($row['imagem']);
        $cli_dir        = utf8_encode($row['dir']);
        $cli_email      = utf8_encode($row['email']);
        $cli_credito    = utf8_encode($row['credito']);
        $cli_cpf        = utf8_encode($row['cpf']);
        $cli_tel        = utf8_encode($row['tel']);
        $cli_cel        = utf8_encode($row['cel']);
        $cli_end        = utf8_encode($row['end']);
        $cli_num        = utf8_encode($row['numero']);
        $cli_estado     = utf8_encode($row['estado']);
        $cli_cidade     = utf8_encode($row['cidade']);
        $cli_comentario = utf8_encode($row['comentario']);
    }
} else {
    header("Location: index.php");
}


?>
