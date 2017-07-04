<?php
	if(isset($data_log_juri['nome'])){ $nome = $data_log_juri['nome']; }              else if(isset($data_log_fisi['nome'])){ $nome  = $data_log_fisi['nome']; }            else{ $nome = " "; }
	if(isset($data_log_juri['imagem'])){ $img  = $data_log_juri['imagem']; }          else if(isset($data_log_fisi['imagem'])){ $img = $data_log_fisi['imagem']; }           else{ $img = 'user_48.png'; }
	if(isset($data_log_juri['cod'])){ $id_en = base64_encode($data_log_juri['cod']); }else if(isset($data_log_fisi['cod'])){ $id_en = base64_encode($data_log_fisi['cod']); }else{ $id_en = 0; }
	if(isset($data_log_juri['ident'])){ $ident = $data_log_juri['ident']; }           else if(isset($data_log_fisi['ident'])){ $ident = $data_log_fisi['ident']; }           else{ $ident = " "; }
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title><?= $titulo ?></title>
</head>
<body>
<?php //(isset($data_log_fisi['imagem']))? $img = $data_log_fisi['imagem'] : $img = 'user_48.png' ?>
<h2>Bem Vindo ao nosso sistema <?= $nome ?>  Aproveite ao máximo <img alt="foto" src="up_foto/<?= $img ?>" width="80" height="80"/> </h2>
<h4>Em breve teremos mais funcionalidades para você...</h4><br/>
<? //(isset($data_log_fisi['cod']))? $id_en = base64_encode($data_log_fisi['cod']) : $id_en = " "  ?>
<? //(isset($data_log_juri['cod']))? $id_en = base64_encode($data_log_juri['cod']) : $id_en = " " ?>
<p><a href="index.php?r=login_foto&f=logout">Efetuar Logout</a> </p><br/><br/>
<p><a href="index.php?r=login_foto&f=view_perf_foto&foto_id=<?= $id_en ?>&ident=<?= $ident ?>"> Visualiza seu Perfil</a></p><br/><br/>
<p><a href="index.php?r=login_foto&f=view_comp_credi"> Comprar Créditos</a></p>
</body>
</html>