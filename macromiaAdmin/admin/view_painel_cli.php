<?php
	
	$quant_cli_resposta = quanti_cliente($conexao);
	while($row = mysqli_fetch_array($quant_cli_resposta)){
		$quanti_cli = $row['quant_cli'];
	}
	
	$quant_Pedido_cli   = quanti_Pedido($conexao);
	while($row = mysqli_fetch_array($quant_Pedido_cli)){
		$quanti_pedi = $row['cod_event'];
	}
	
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Tela de Administração de clientes</title>
<meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
<link rel="stylesheet" href="_js/css/bootstrap.min.css" >
<link rel="stylesheet" href="_js/css/bootstrap-theme.min.css">
<link rel="stylesheet" href="_js/css/bootstrap-theme.css">
<link rel="stylesheet" href="_js/css/dashboard.css">
<script src="_js/jquery-1.12.4.min.js" type="text/javascript"></script>
<script src="_js/jquery_min.js"   	   type="text/javascript"></script>
<script src="_js/js/bootstrap.min.js" type="text/javascript"></script>
<script src="_js/js/bootstrap.js"     type="text/javascript"></script>

<style type="text/css">
	#quant_cliente{
		font-size: 150px;
		font-family:"Gill Sans", "Gill Sans MT", "Myriad Pro", "DejaVu Sans Condensed", Helvetica, Arial, sans-serif;
	}
	#pesquisa_field{
		width: 70%;
	}
	#txt_pesquisa_nome{
		width: 50%;
	}

</style>

<script type="text/javascript">
	$(document).ready(function(e) {
        $.ajax({
			type: "POST",
			url: "admin/helper_admin_cli/lista_cliente.php",
			dataType: "text",
			success: function(res){
				alert(res);
				$('#div_table').children().remove();
				$('#div_table').append(res);
			}
		});
		
		$('#btn_pesquisa').click(function(){
			var search_nome = $('#txt_pesquisa_nome').val();
			$.ajax({
					type: "POST",
					url: "admin/helper_admin_cli/lista_cliente.php?cli_adm="+search_nome,
					dataType: "text",
					success: function(res){
					alert(res);
					$('#div_table').children().remove();
					$('#div_table').append(res);
				}
			});
		});
		$('#rd_cnpj').change(function(){
			$('#txt_cpf').attr('disabled','true');;
			$('#txt_cnpj').removeAttr('disabled');
		});
		$('#rd_cpf').change(function(){
			$('#txt_cnpj').attr('disabled','true');
			$('#txt_cpf').removeAttr('disabled');
		});
		
				
    });
	
	function cliente_paginacao_01(pg){
		$.ajax({
			type: "POST",
			url: "admin/helper_admin_cli/lista_cliente.php?pg="+pg,
			dataType: "text",
			success: function(res){
				$('#div_table').children().remove();
				$('#div_table').append(res);
			}
		});
	}
	
</script>

</head>
<body>
<nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Project name</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
        	<ul class="nav navbar-nav">
            	<li><a href="index.php?r=admin&ad=adm_visu_cli">Estatistica Macromia</a></li>
                <li><a href="#">Financeiro</a></li>
                <li><a href="#">Administração da Aplicação</a></li>
                <li><a href="#">Blog Macromia</a></li>
            </ul>
        
          <form class="navbar-form navbar-right" action="index.php?r=admin&ad=logout" method="post">            
            <button type="submit" class="btn btn-success">Sair</button>
          </form>
        </div><!--/.navbar-collapse -->
      </div>
    </nav>
    
	<div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
            <li class="active"><a href="#">Overview <span class="sr-only">(current)</span></a></li>
            <li><a href="#">Reports</a></li>
            <li><a href="#">Analytics</a></li>
            <li><a href="#">Export</a></li>
          </ul>
          <ul class="nav nav-sidebar">
            <li><a href="">Nav item</a></li>
            <li><a href="">Nav item again</a></li>
            <li><a href="">One more nav</a></li>
            <li><a href="">Another nav item</a></li>
            <li><a href="">More navigation</a></li>
          </ul>
          <ul class="nav nav-sidebar">
            <li><a href="">Nav item again</a></li>
            <li><a href="">One more nav</a></li>
            <li><a href="">Another nav item</a></li>
          </ul>
        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h1 class="page-header">Dashboard</h1>

          <div class="row placeholders">
            <div class="col-xs-6 col-sm-3 placeholder">
              <h2 id="quant_cliente"><?= $quanti_cli ?></h2>
              <h4>Quantidade de Clientes</h4>
              <span class="text-muted">Something else</span>
            </div>
            <div class="col-xs-6 col-sm-3 placeholder">
              <h2 id="quant_cliente"><?= $quanti_pedi ?> </h2>
              <h4>Quantidade de Pedidos Feitos</h4>
              <span class="text-muted">Something else</span>
            </div>
            <div class="col-xs-6 col-sm-3 placeholder">
              <img src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" width="200" height="200" class="img-responsive" alt="Generic placeholder thumbnail">
              <h4>Label</h4>
              <span class="text-muted">Something else</span>
            </div>
            <div class="col-xs-6 col-sm-3 placeholder">
              <img src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" width="200" height="200" class="img-responsive" alt="Generic placeholder thumbnail">
              <h4>Label</h4>
              <span class="text-muted">Something else</span>
            </div>
          </div>

          <h2 class="sub-header">Tabela de clientes cadastrados</h2>
          <div class="table-responsive">
          	<div id="pesquisa_field">
                <p><input type="text" id="txt_pesquisa_nome" class="form-control input-sm"/>
                <button class="btn btn-default" id="btn_pesquisa">Pesquisar</button></p>
                <input type="radio" name="radio_opt1" id="rd_cpf" checked/><input type="text" maxlength="40" id="txt_cpf" />
                <input type="radio" name="radio_opt1" id="rd_cnpj"/><input type="text" maxlength="40" id="txt_cnpj" disabled/>
            </div>
            <div id="div_table">
            </div>
            </table>
          </div>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="../../assets/js/vendor/holder.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
</body>
</html>