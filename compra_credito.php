<?php include('head_pages/head_pag_credito.php') ?>

<!DOCTYPE html>
<html>
<head>
	<title>Comprar Crédito</title>

	<meta charset="utf-8">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<link rel="stylesheet" type="text/css" href="_js/css/bootstrap.min.css">


	
	<script src="_js/jquery-1.12.4.min.js"></script>
	<script src="_js/js/bootstrap.min.js"></script>

	<style type="text/css">
	
	input[type="number"]::-webkit-outer-spin-button, input[type="number"]::-webkit-inner-spin-button {
    -webkit-appearance: none;
    margin: 0;
	}
	 
	input[type="number"] {
	    -moz-appearance: textfield;
	}
	</style>


	<script type="text/javascript">
		$(document).ready(function(){

			var foto_nome    = $('#foto_nome').val();
			var foto_email   = $('#foto_email').val();
			var foto_credito = $('#foto_credito').val();
			var foto_id 	 = $('#foto_id').val();

			$('#compra_trinta').click(function(){
				window.location.href = "pag_credito/pacote_credito.php?foto_nome="+foto_nome+"&foto_email="+foto_email+"&foto_credito="+foto_credito+"&foto_id="+foto_id+"&pacote_credito=30";
			});

			$('#compra_cinquenta').click(function(){
				window.location.href = "pag_credito/pacote_credito.php?foto_nome="+foto_nome+"&foto_email="+foto_email+"&foto_credito="+foto_credito+"&foto_id="+foto_id+"&pacote_credito=50";
			});

			$('#compra_oitenta').click(function(){
				window.location.href = "pag_credito/pacote_credito.php?foto_nome="+foto_nome+"&foto_email="+foto_email+"&foto_credito="+foto_credito+"&foto_id="+foto_id+"&pacote_credito=80";
			});

			$('#compra_avulso').click(function(){

				var valor_avulso = $('#valor_avulso').val();
				alert(valor_avulso);
				window.location.href = "pag_credito/pacote_credito.php?foto_nome="+foto_nome+"&foto_email="+foto_email+"&foto_credito="+foto_credito+"&foto_id="+foto_id+"&pacote_credito=24&quant_credito="+valor_avulso;
				
			});


		});
	</script>

</head>
<body>

<input type="hidden" id="foto_nome"    value="<?= $cli_nome ?>">
<input type="hidden" id="foto_id"      value="<?= $cli_id ?>" >
<input type="hidden" id="foto_email"   value="<?= $cli_email  ?>">
<input type="hidden" id="foto_credito" value="<?= $cli_credito ?>" >

<nav class="navbar navbar-default">
	  <div class="container-fluid">
	    <div class="navbar-header">
	      <a class="navbar-brand" href="#">
	        Macromia
	      </a>
	    </div>
	  </div>
	</nav>

	<div class="container">
	 	<div class="row">
	 		<div class="col-xs-12">
	 			
	 			<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
				  <!-- Indicators -->
				  <ol class="carousel-indicators">
				    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
				    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
				    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
				  </ol>

				  <!-- Wrapper for slides -->
				  <div class="carousel-inner" role="listbox">
				    <div class="item active">
				      <img src="imagem/pagseguro_wall.jpg" style="width: 100%; height: 100%" alt="pagseguro_wall">
				      <div class="carousel-caption">
				        <h2>Temos um sistema de pagamento confiavel</h2>
				        <p>Com o pagseguro você pode comprar seus créditos tranquilamente.</p>
				      </div>
				    </div>
				    <div class="item">
				      <img src="imagem/credito_moeda.jpg" style="width: 100%; height: 100%" alt="credito_moeda">
				      <div class="carousel-caption">
				        <h2>Aproveite e Aquira seus crétidos</h2>
				        <p>Não deixe passar as melhores solicitações, aquira seus créditos agora mesmo.</p>
				      </div>
				    </div>
				    
				    <div class="item">
				      <img src="imagem/fotografo_test.jpg" style="width: 100%; height: 100%" alt="foto_test">
				      <div class="carousel-caption">
				        <h2>Saia na frente da concorrencia</h2>
				        <p>Quanto mais créditos adquirir melhor as chances de adquiri os melhores contatos par os seus serviços.</p>
				      </div>
				    </div>

				  </div>

				  <!-- Controls -->
				  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
				    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
				    <span class="sr-only">Previous</span>
				  </a>
				  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
				    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
				    <span class="sr-only">Next</span>
				  </a>
				</div>


	 		</div>	 		
	 	</div><br/><br/>

	 	<div class="row">
		  <div class="col-sm-6 col-md-4">
		    <div class="thumbnail">
		      <img src="imagem/camera.jpg" style="width: 300px; height: 300px;" alt="camera01">
		      <div class="caption">
		        <h3>30 Créditos</h3>
		        <p>Compre 30 Créditos do macromia por apenas 29,90</p>
		        <p><a href="#" id="compra_trinta"  class="btn btn-success" role="button">Comprar</a> </p>
		      </div>
		    </div>
		  </div>

		  <div class="col-sm-6 col-md-4">
		    <div class="thumbnail">
		      <img src="imagem/camera02.jpg" style="width: 300px; height: 300px;" alt="camera02">
		      <div class="caption">
		        <h3>50 Créditos</h3>
		        <p>Compre 50 Créditos do macromia por apenas 49,90</p>
		        <p><a href="#" id="compra_cinquenta" class="btn btn-success" role="button">Comprar</a> </p>
		      </div>
		    </div>
		  </div>

		  <div class="col-sm-6 col-md-4">
		    <div class="thumbnail">
		      <img src="imagem/tech_business.jpg" style="width: 300px; height: 300px;" alt="camera03">
		      <div class="caption">
		        <h3>80 Créditos</h3>
		        <p>Compre 80 Créditos do macromia por apenas 79,90</p>
		        <p><a href="#" id="compra_oitenta" class="btn btn-success" role="button">Comprar</a> </p>
		      </div>
		    </div>
		  </div>

		</div>

		<hr/>

		<div class="row">
			<div class="col-xs-12">
				<h2>Compre créditos avulso</h2>
				<p>Digite a quantidade de crédito que deseja aquirir.</p>
				<p>Lembrando que cada cada crédito custa 1 Real.</p>
				<div class="form-inline">
				  <div class="form-group">
				    <label class="sr-only" for="exampleInputAmount">Amount (in dollars)</label>
				    <div class="input-group">
				      <div class="input-group-addon">$</div>
				      <input type="number" id="valor_avulso" style="-moz-appearance: none;" class="form-control" id="exampleInputAmount" placeholder="Amount">
				      <div class="input-group-addon">.00</div>
				    </div>
				  </div>
				  
				  <button id="compra_avulso" type="submit" class="btn btn-success">Comprar</button>

				</div>
			</div>

		</div>
		<br/><br/><br/>

	</div>


</body>
</html>