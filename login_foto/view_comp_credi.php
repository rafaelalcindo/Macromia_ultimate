<?php 
	$email = (isset($_SESSION['foto_email']))? $_SESSION['foto_email'] : " ";
	$senha = (isset($_SESSION['foto_senha']))? $_SESSION['foto_senha'] : " ";
	$ident = (isset($_SESSION['ident']))? $_SESSION['ident'] : " ";
	
	if($email != " " && $senha != " " && $ident != " "){
		if($ident == 'FF'){
			$sql = sprintf("select f.foto_cod as 'id_foto', f.foto_credito as 'credi_foto' from fotografo f, fotografo_fisico fs where f.foto_cod = fs.foto_cod and fs.foto_fisi_email = '%s' and fs.foto_fisi_senha = '%s'",$email,$senha); 
			$resultado = mysqli_query($conexao, $sql);
			while($row = mysqli_fetch_array($resultado)){
				$id_foto    = $row['id_foto'];
				$credi_foto = $row['credi_foto'];
			}
		}else if($ident == 'FJ'){
			$sql2 = sprintf("select f.foto_cod as 'id_foto', f.foto_credito as 'credi_foto' from fotografo f, fotografo_juridico fj where f.foto_cod = fj.foto_cod and fj.foto_juri_email = '%s' and fj.foto_juri_senha = '%s'",$email, $senha);
			$resultado2 = mysqli_query($conexao, $sql2);
			while($row = mysqli_fetch_array($resultado2)){
				$id_foto 	= $row['id_foto'];
				$credi_foto = $row['credi_foto']; 
			}
		}// fim do verificador de ident
	}
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Comprar Créditos</title>
<meta charset="utf-8">
</head>
<body>
	<h1>Selecione as quantides de crédito que você quer adquirir!</h1><br/><br/>
    <form action="index.php?r=login_foto&f=comp_credi" method="post">
    	<input type="text" name="id_foto" hidden value="<?= $id_foto ?>"/>
        <input type="text" name="credi_foto" hidden value="<?= $credi_foto ?>" />
        <input type="text" name="ident"  hidden value="<?= $ident ?>"/>
        <input type="text" name="email" hidden value="<?= $email ?>" />
        <input type="text" name="senha" hidden value="<?= $senha ?>" />
    	<h3>Selecione uns dos planos abaixo</h3><br/><br/>
        <label for="02">02 créditos</label>
        <input type="number" name="txt_credi" id="credi_foto"/>
        
        <input type="submit" value="comprar créditos" />
    </form>
</body>
</html>