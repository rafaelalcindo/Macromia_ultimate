<?php
	$email = (isset($_SESSION['foto_email']))? $_SESSION['foto_email'] : " ";
	$senha = (isset($_SESSION['foto_senha']))? $_SESSION['foto_senha'] : " ";
	$ident = (isset($_SESSION['ident']))?      $_SESSION['ident']      : " ";
	
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
<title>Pagina de lista de Pedidos</title>
<meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
<link rel="stylesheet" href="_js/css/bootstrap.min.css" >
<link rel="stylesheet" href="_js/css/bootstrap-theme.min.css">
<link rel="stylesheet" href="_js/css/bootstrap-theme.css">
<script src="_js/jquery-1.12.4.min.js" type="text/javascript"></script>
<script src="_js/jquery_min.js"   	   type="text/javascript"></script>
<script src="_js/js/bootstrap.min.js"  type="text/javascript"></script>
<script src="_js/js/bootstrap.js"      type="text/javascript"></script>

<style type="text/css">
	#bloco{
		margin-top: 10%;
		border-left: 6px solid #b3e5fc;
		box-shadow: 4px 4px 8px gray;
		border-radius: 8px;
	}
</style>

<script type="text/javascript">
	$(function(){
		  	$('#estado').change(function(){
				var id = $(this).val();
				$.ajax({
					type: "POST",
					url:"login_foto/lista_cidade.php?id="+id,
					dataType:"text",
					success: function(res){
						$('#cidade').children('.cidades').remove();
						$('#cidade').append(res);
						$('#cidade').removeAttr('disabled').focus();
						alert('funcionou:  '+res);
					}
				 });
			});
	   });
	   
	$(function(){
		$('#btn_procurar').click(function(){
			var servico    = $('#sele_servico').val();
			var estado     = $('#estado').val();
			var cidade     = $('#cidade').val();
			var id_foto    = $('#hidden_id').val();
			var credi_foto = $('#hidden_credi').val();
			$.ajax({
				type: "POST",
				url:"login_foto/filtro_pedido/lista_pedido.php?sele_servico="+servico+"&estado="+estado+"&cidade="+cidade+"&id_foto="+id_foto+"&credi_foto="+credi_foto,
				dataType: "text",
				success: function(res){					
					$('#table_list').children().remove();
					$('#table_list').append(res);
					//alert("Aqui está o Resultado: "+res);
				}
			});
		});
	});
	
	function paginacao_pedidos(pg){
		var servico 	= $('#sele_servico').val();
		var estado  	= $('#estado').val();
		var cidade  	= $('#cidade').val();
		var id_foto 	= $('#hidden_id').val();
		var credi_foto  = $('#hidden_credi').val();
		
		$.ajax({
			type: "POST",
			url: "login_foto/filtro_pedido/lista_pedido.php?sele_servico="+servico+"&estado="+estado+"&cidade="+cidade+"&id_foto="+id_foto+"&credi_foto="+credi_foto+"&pg="+pg,
			dataType: "text",
			success: function(res){
				$('#table_list').children().remove();
				$('#table_list').append(res);
				//alert('Aqui está o Resultado: '+res);
			}
		});		
	}
	
	function comprar_listagem(codigo, creditos, vagas, pg){
		var cod     		= codigo;
		var id_foto 		= $('#hidden_id').val();
		var credi_fotografo = $('#hidden_credi').val();
		var creditos		= creditos;
		var vagas_evento    = vagas;
		
		$.ajax({
			type: "POST",
			url: "login_foto/filtro_pedido/funcao_foto.php?id_evento="+cod+"&id_foto="+id_foto+"&credi_foto="+credi_fotografo+"&credi_event="+creditos+"&vagas="+vagas_evento,
			dataType: "text",
			success: function(res){
				paginacao_pedidos(pg);				
			}
		});
		
	}
	
	$(function(){
		$('#table_list').each(function() {
            var id = $(this).find('bloco').attr('class');
			$(this).find('btn-teste').unbind('click').click(function(){
				alert('Funcionou');
			});
        });
	});
	
	$(document).ready(function(e) {
        $('#table_list').each(function(e) {
            var nome = $(this).val();
			alert('Aqui está a mensagem: '+nome);
        });
    });
	   
	/*$(document).ready(function(e) {
        $('#form_filtro').submit(function(event){
			var serv = $('#sele_servico').val();
			var esta = $('#estado').val();
			var cida = $('#cidade').val();
			
			$.ajax({
				type: "POST",
				url:"login_foto/lista_pedido.php?sele_servico="+serv+"&estado="+esta+"&cidade="+cida,
				dataType:"text",
				success: function(res){
					alert("Resultado  :"+res);
				}
			});			
		});
    }); */
	   
</script>

</head>
<body>
	<nav class="navbar navbar-inverse">
              <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                  </button>
                  <a class="navbar-brand" href="#" style="font-size: 20pt;">Macromia</a>
                </div>
            
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                  <ul class="nav navbar-nav">		
                    <li><a href="index.php?r=login_foto&f=logout">Sair</a></li>
                    <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
                      <ul class="dropdown-menu">
                        <li><a href="#">Action</a></li>
                        <li><a href="#">Another action</a></li>
                        <li><a href="#">Something else here</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="#">Separated link</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="#">One more separated link</a></li>
                      </ul>
                    </li>
                  </ul>
                  <ul class="nav navbar-nav navbar-right">
                    <li><p> <?= $email; ?> </p></li>
                    <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
                      <ul class="dropdown-menu">
                        <li><a href="#">Action</a></li>
                        <li><a href="#">Another action</a></li>
                        <li><a href="#">Something else here</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="#">Separated link</a></li>
                      </ul>
                    </li>
                  </ul>
                </div><!-- /.navbar-collapse -->
              </div><!-- /.container-fluid -->
	</nav>	<!--  NavBar of the code...  -->
    
    <!--  ----------------------- Fim da NavBar -------------------------------------  -->
    <input type="text" id="hidden_credi" value="<?= (isset($credi_foto))? $credi_foto : " " ?>" />
    <input type="text" id="hidden_id" value="<?= (isset($id_foto))? $id_foto : " " ?>"/>
    <input type="text" id="foto_email" value="<?= (isset($_SESSION['foto_email']))? $_SESSION['foto_email'] : " " ?>"/>
    <input type="text" id="foto_senha" value="<?= (isset($_SESSION['foto_senha']))? $_SESSION['foto_senha'] : " " ?>"/>
    <input type="text" id="foto_ident" value="<?= (isset($_SESSION['ident']))? $_SESSION['ident'] : " "    ?>" />
    <input type="text" id="foto_credi" value="<?= (isset($credi_foto))?  $credi_foto : $credi_foto = " " ?>"
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-9">
            	<!-- action="index.php?r=login_foto&f=list_cli_sele" -->

                	<div class="form-group">
                    	<label for="servicos_select">Serviços</label>
                        <select class="form-control" id="sele_servico">
                        	<option value=" ">Selecione o serviços</option>
                            <option value="Casamento">Casamento</option>
                            <option value="Abstrata">Abstrata</option>
                            <option value="Festa de aniversario">Festa de Aniversário</option>
                            <option value="Eventos Sociais">Eventos Sociais</option>
                            <option value="Festas Infantis">Festas Infantis</option>
                            <option value="Infantil">Infantil</option>
                            <option value="Gestante">Gestante</option>
                            <option value="Casal">Casal</option>
                            <option value="Banda">Banda</option>
                            <option value="Institucional">Institucional</option>
                            <option value="Produtos">Produtos</option>
                            <option value="Moda">Moda</option>
                            <option value="Modelos">Modelos</option>
                            <option value="Animais">Animais</option>
                            <option value="Industrial">Industrial</option>
                        </select>
                    </div>
                	<div class="form-group">
                    	<label for="estado_select">Estado</label>
                        <select class="form-control" id="estado">
                        	<option value=" ">Selecione um Estado</option>
                            <?php $sql = mysqli_query($conexao,"select * from estado");
							header ('Content-type: text/html; charset=utf-8');
							echo "----".print_r($sql);
							while($row = mysqli_fetch_array($sql)){
								$id   = utf8_encode($row['id']);
								$nome = utf8_encode($row['nome']); 
								$uf   = utf8_encode($row['uf']);							
							?>
                            <option value="<?php echo $id ?>"><?php echo $uf ?> - <?php echo $nome ?> </option>
                            <?php
							   }
							?>
                        </select>
                    </div>
                    <div class="form-group">
                    	<label for="cidade_select">Cidade</label>
                        <select id="cidade" class="form-control" disabled>
                        <option value=" ">Selecione uma Cidade</option>
                            
                        </select>
                    </div>
                    <button type="button" id="btn_procurar" class="btn btn-primary">Procurar</button>

            </div>
            <div class="col-md-3"></div>
        </div>
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-8" >
            	<table id="table_list">
                	<tr>
                    	<td>
                            <blockquote id="bloco">
                                <p><label>Nome:</label> Jack Patelzinho de Queijo   <label>Email:</label> jack_pastel@hotmail.com  </p>
                                <p><label>Celular: </label> (11)99943-42332   <label>Serviços:</label> Modas   <label>Estado</label> São Paulo <label>Cidade</label> São Paulo  <input type="hidden" value=" " id="id_evento"/></p>
                                <p><label>Telefone:</label> (11)4443-42332   <label>Endereço:</label> Rua das cabras   <label>Cep:</label>42534-234 <label>Data</label> 15/01/2017    &nbsp;&nbsp;&nbsp; <a href="" class="btn btn-primary">Comprar contato</a> &nbsp;&nbsp;&nbsp; <label>Vagas: </label><span id="vagas"> 5</span></p>                                         
                            </blockquote>
                        <td>
                    </tr>
                </table>
            </div>
            <div class="col-md-3"></div>
        </div>
    </div>
</body>
</html>