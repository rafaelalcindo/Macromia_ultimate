<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Macromia 2016</title>
<link rel="stylesheet" href="_js/css/bootstrap.min.css" >
<link rel="stylesheet" href="_js/css/bootstrap-theme.min.css">
<link rel="stylesheet" href="_js/css/bootstrap-theme.css">
<script src="_js/js/bootstrap.min.js" type="text/javascript"></script>
<script src="_js/js/bootstrap.js"     type="text/javascript"></script>

</head>
<body>
	<h3>Hello Mundoooooo.....</h3>
    
    <div class="container">
      <div class="header clearfix">
      	<div class="pull-right">
        	<img src="up_foto/<?= (isset($perf_foto_data['img']))? $perf_foto_data['img'] : 'user_48.png' ?>" alt="imagem" class="img-circle" width="80" height="80">
        </div>
        <nav>
          <ul class="nav nav-pills pull-right">
            <li role="presentation" class="active"><a href="index.php?r=login_foto&f=logout">Sair</a></li>
            <li role="presentation"><a href="#">----</a></li>
            <li role="presentation"><a href="#">----</a></li>
          </ul>
        </nav>
        <h3 class="text-muted"><?= $perf_foto_data['email'] ?></h3>
      </div>

      <div class="jumbotron">
        <h1><?= $perf_foto_data['nome'] ?></h1>
        <p class="lead">Cras justo odio, dapibus ac facilisis in, egestas eget quam. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
        <p><a class="btn btn-lg btn-success" href="#" role="button">Entre em contato</a></p>
      </div>

      <div class="row marketing">
        <div class="col-lg-6">
          <h3>Telefone</h3>
          <p><?= $perf_foto_data['tel'] ?></p>

          <h3>Celular</h3>
          <p><?= $perf_foto_data['cel'] ?></p>

          <h3>Endereço</h3>
          <p><?= $perf_foto_data['end'] ?></p>
          
          <h3>Número</h3>
          <p><?= $perf_foto_data['num'] ?></p>
        </div>

        <div class="col-lg-6">
          <h3>Estado</h3>
          <p><?= $perf_foto_data['estado'] ?></p>
          
          <h3>Cidade</h3>
          <p><?= $perf_foto_data['cidade'] ?></p>

          <h3>CPF/CNPJ</h3>
          <?php if(isset($perf_foto_data['cnpj'])){ $doc_foto = $perf_foto_data['cnpj']; }else{ $doc_foto = $perf_foto_data['cpf']; }    ?>
          <p><?= $doc_foto ?></p>

          
        </div>
      </div>
      <div class="row">

        <div class="col-lg-5"></div>
        <div class="col-lg-2"><a href="index.php?r=login_foto&f=list_cli" class="btn btn-info">Procure por Clientes.</a></div>
      </div><br/><br/>

      <footer class="footer">
        <p>&copy; 2015 Company, Inc.</p>
      </footer>

    </div> <!-- /container -->

    
</body>
</html>