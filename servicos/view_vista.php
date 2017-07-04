<!doctype html>
<html>
<head>

<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<title>Untitled Document</title>
<script src="_js/jquery-1.12.4.min.js" type="text/javascript"></script>
<script src="_js/jquery_min.js"   	   type="text/javascript"></script>
<script src="_js/js/bootstrap.min.js"  type="text/javascript"></script>
<script src="_js/js/bootstrap.js"      type="text/javascript"></script>
<script src="_js/datapicker/jquery.ui.timepicker.js" type="text/javascript"></script>


<script src="_js/jquery-ui-1.11.4.custom/jquery-ui.min.js"></script>
<link rel="stylesheet" href="_js/jquery-ui-1.11.4.custom/jquery-ui.theme.min.css"/>
<link rel="stylesheet" href="_js/jquery-ui-1.11.4.custom/jquery-ui.structure.min.css"/>
<link rel="stylesheet" href="_js/datapicker/jquery.ui.timepicker.css"/>
    
<script type="text/javascript">
    $(document).ready(function(){
        alert('funcionou!');
        $('#data').datepicker({
               dateFormat: 'dd/mm/yy',
               dayNames: ['Domingo', 'Segunda', 'Terça','Quarta','Quinta','Sexta','Sábado'],
               dayNamesMin: ['D','S','T','Q','Q','S','S','D'],
               dayNamesShort: ['Dom','Seg','Ter','Qua', 'Qui','Sex','Sáb'],
               monthNames: ['Janeiro', 'Fevereiro','Março','Abril','Maio','Junho','Julho','Agosto','Setembro','Outubro', 'Novembro','Dezembro'],
               monthNamesShort: ['Jan','Fev','Mar','Abr','Mai','Jun','Jul','Ago','Set','Out','Nov','Dez'],
               nextText: "Próximo",
               prevText: "Anterior",
               minDate: '0d'
        });
    });
</script>

<script type="text/javascript">
	$(function(){
		$('#estado').change(function(){
			var id = $(this).val();
			$.ajax({
				type: "POST",
				url: "servicos/lista_cidade.php?id="+id,
				dataType:"text",
				success: function(res){
					$('#cidade').children('.cidades').remove();
					$('#cidade').append(res);
					$('#cidade').removeAttr('disabled').focus();
					alert('Funcionou: '+res);
				}
			});
		});
	});
</script>

<script type="text/javascript">
	$(document).ready(function(e) {
        $('#hora').timepicker({
			hourText: 'Hora',
			minuteText: 'Minuto',
			amPmText: ['AM','PM'],
			closeButtonText: 'Fechar',
			nowButtonText: 'Agora',
			deselectButtonText: 'Limpar'
		});
    });
</script>

<style type="text/css">
	
	.ui-state-default, .ui-widget-content .ui-state-default, .ui-widget-header .ui-state-default {
		
		border: 1px solid #ccc;
		color: #084E43;
		font-weight: bold;
	}

	.ui-widget-header{
		background: #009B82;
		border: 1px solid #00816C;
	}
	
	.ui-state-active, .ui-widget-content .ui-state-active, .ui-widget-header .ui-state-active {
		background: #009B82;
		border: 1px solid #3AEACF;
		color: #FFE587;
		font-weight: bold;
	}
	
	.ui-state-hover, .ui-widget-content .ui-state-hover, .ui-widget-header .ui-state-hover, .ui-state-focus, .ui-widget-content .ui-state-focus, .ui-widget-header .ui-state-focus {
		background: #BCFFF4;
		border: 1px solid #3284D0;
		color: #CB9F00;
		font-weight: bold;
	}
</style>

</head>
<body>
<h1>Teste de Solicitação feita</h1>
<h3> <?= $_SESSION['cli_email'] ?> </h3>

<h4>Escolha as opções para o que deseja</h4>

<form method="post" action="index.php?r=servicos&s=solicitar_foto">

<h3>Selecione o tipo de serviço</h3>

    <div>
        <h4>Eventos</h4>

        <label for="radio">Casamento: </label>

        <input type="radio" name="eventos[]" value="Casamento">

        <label for="radio">Festa de aniversário</label>

        <input type="radio" name="eventos[]" value="Festa de aniversário">
        
        <label for="radio">Eventos Sociais</label>

        <input type="radio" name="eventos[]" value="Eventos Sociais">
        
        <label for="radio">Festas Infantis </label>

        <input type="radio" name="eventos[]" value="Festas Infantis">        

    </div>
    
    <div>
        <h4>Books</h4>

        <label for="radio">Crianças: </label>

        <input type="radio" name="eventos[]" value="crianças">

        <label for="radio">NewBorn</label>

        <input type="radio" name="eventos[]" value="NewBorn">
        
        <label for="radio">Casais</label>

        <input type="radio" name="eventos[]" value="Casais">
        
        <label for="radio">Bandas </label>

        <input type="radio" name="eventos[]" value="Bandas">        

    </div>
    
    <div>
        <h4>Publicidade</h4>

        <label for="radio">Institucional: </label>

        <input type="radio" name="eventos[]" value="Institucional">

        <label for="radio">Produtos:</label>

        <input type="radio" name="eventos[]" value="Produtos">
        
        <label for="radio">Moda:</label>

        <input type="radio" name="eventos[]" value="Moda">
        
        <label for="radio">Modelos: </label>

        <input type="radio" name="eventos[]" value="Modelos"> 
        
        <label for="radio">Comercial: </label>

        <input type="radio" name="eventos[]" value="Comercial">     
        
        <label for="radio">Industrial: </label>

        <input type="radio" name="eventos[]" value="Industrial">               

    </div>
    
    <div>
        <h4>Natureza</h4>

        <label for="radio">Paisagem: </label>

        <input type="radio" name="eventos[]" value="paisagem">

        <label for="radio">Vida Submarina</label>

        <input type="radio" name="eventos[]" value="Vida Submarina">
        
        <label for="radio">Animais</label>

        <input type="radio" name="eventos[]" value="Animais">
        
        <label for="radio">Aéreas </label>

        <input type="radio" name="eventos[]" value="Aéreas">        

    </div>
    
    
    
    <div>
        <h4>Artístico</h4>

        <label for="radio">Abstrata: </label>

        <input type="radio" name="eventos[]" value="Abstrata">

        <label for="radio">Nú Artístico: </label>

        <input type="radio" name="eventos[]" value="Nu Artístico">     

    </div>
    
    <div>
        <h4>Científico</h4>

        <label for="radio">Médica: </label>
        <input type="radio" name="eventos[]" value="Medica">
        <label for="radio">Odontológica</label>
        <input type="radio" name="eventos[]" value="Odontologica">     

    </div>
    
    <div>
        <h4>Outros</h4>

        <label for="radio">Arquitetura: </label>

        <input type="radio" name="eventos[]" value="Arquiteto">

        <label for="radio">Esportes</label>

        <input type="radio" name="eventos[]" value="Esportes">
        
        <label for="radio">Jornalístico</label>

        <input type="radio" name="eventos[]" value="Jornalística">
        
        <label for="radio">Documentarista </label>

        <input type="radio" name="eventos[]" value="Documentarista">        
    </div><br/><br/>
    
    <div>
        <h4>Orçamento</h4>

        <label for="radio">	R$ 100,00 a R$ 1.000,00: </label>

        <input type="radio" name="orcamento" value="1" checked="true">

        <label for="radio">R$ 1.000,00 a R$ 2.000,00</label>

        <input type="radio" name="orcamento" value="2">
        
        <label for="radio">R$ 2.000,00 a R$ 5.000,00</label>

        <input type="radio" name="orcamento" value="3">
        
        <label for="radio">R$ 5.000,00 a R$ 10.000,00 </label>

        <input type="radio" name="orcamento" value="4">
        
        <label for="radio">Acima de R$ 10.000,00 </label>

        <input type="radio" name="orcamento" value="5">           
    </div><br/>
    
    
    <div>
       <h4>2- Passo</h4>
       <label for="text">Data</label>
       <input type="text" name="txt_data"  id="data" />
       <label for="text">Horário</label>
       <input type="text" name="txt_horario" id="hora" value=""/>
       <label for="text">CEP</label>
       <input type="text" name="txt_cep" value=""/>
       <label for="text">Estado</label>
       <select id="estado" name="txt_estado">
       		<option value="">Selecione um estado.</option>
            <?php $sql = mysqli_query($conexao, "select * from estado");
			//header('Content-Type: text/html; charset=ISO-8859-1');
			header ('Content-type: text/html; charset=utf-8');
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
      <!-- <input type="text" name="txt_estado" value=""/> -->
       <label for="text">Cidade</label>
       <select id="cidade" name="txt_cidade" disabled>
       		<option value="">Selecione uma Cidade</option>
       </select>
      <!-- <input type="text" name="txt_cidade" value=""/> -->
       <label for="text">Endereço</label>
       <input type="text" name="txt_endereco" value=""/>
       <label for="text">Número</label>
       <input type="text" name="txt_numero" value=""/>
            
    </div><br/><br/>
    
    <div>
		<input type="hidden" value="<?= $_SESSION['cli_email'] ?>" name="cliente_email"/>
        <input type="submit" value="solicitar" id="submit" />

    </div>

</form>



</body>
</html>