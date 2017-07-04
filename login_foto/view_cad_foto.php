
<!doctype html>
<html lang="pt-br">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>Tela de Cadastro de Fotografo</title>
<script src="_js/jquery-1.12.4.min.js" type="text/javascript" language="javascript"/></script>
<script src="_js/maskedinput.js" type="text/javascript"></script>

<script type="text/javascript">
	window.onload = function(){
		//alert("O sistema foi inicializado");
	}
	jQuery(function($){
		$("#cpf").mask("999.999.999-99");
		$("#tel").mask("(99)9999-9999");
		$("#cel").mask("(99)99999-99999");
		$("#cnpj").mask("99.999.999/9999-99");
	});
	
	$(document).ready(function(e) {
        $('#rd_foto_fisi').change(function(){
			//alert("Passou para o Físico");
			$('#div_cpf').show('normal');
			$('#div_cnpj').removeAttr('required');
			$('#div_cnpj').hide('normal');			
		});
		$('#rd_foto_juri').change(function(){
			//alert("Passou para o Juridico");
			$('#div_cnpj').show('normal');
			$('#div_cpf').removeAttr('required');
			$('#div_cpf').hide('normal');			
		});
    });
</script>

<script type="text/javascript">
    $(function(){
        $('#estado').change(function(){
        var id = $(this).val();
        $.ajax({
            type: "POST",
            url: "login_foto/lista_cidade.php?id="+id,
            dataType: "text",
            success: function(res){
				$('#cidade').children('.cidades').remove();
                $('#cidade').append(res);
				$('#cidade').removeAttr('disabled').focus();
				alert('funcionou '+res);
            }
        });
    });
    });
</script>


</head>
<body>
<h3>Tela de Cadastro de Fotografo</h3><br/>
<? require('lista_estado.php');	 ?>

<form method="post" action="index.php?r=login_foto&f=cad_foto" enctype="multipart/form-data">

    <div>

        <h4>Selecione o tipo de pessoa</h4>

       <p> <input type="radio" name="rd_foto" id="rd_foto_fisi" checked="true" tabindex="2" value="1"> pessoa fisica</p>
       <p> <input type="radio" name="rd_foto" id="rd_foto_juri" tabindex="3" value="2"> pessoa Juridica </p>

    </div>

    <div>
        <h4>Nome</h4> 

        <label for="name">Name: </label>

        <input type="text" id="name" name="txt_foto_nome" value="" placeholder="Digite seu nome" required="required" autofocus />
    </div>
    
    <div>
        <h4>Email</h4> 
        <label for="name">Email: </label>
        <input type="email" id="email" name="txt_foto_email" value="" placeholder="Digite seu email" required="required"  />
    </div>
    <div>
        <div id="div_cpf">
            <h4>CPF</h4> 
    
            <label for="name">CPF: </label>
    
            <input type="text" id="cpf" name="txt_foto_cpf" value=""/>
        </div>
        <div id="div_cnpj" hidden>  
            <h4>CNPJ</h4> 
    
            <label for="name">CNPJ: </label>
    
            <input type="text" id="cnpj" name="txt_foto_cnpj" value=""/>
		</div>
    </div>
    
    <div>
        <h4>Endereço</h4> 

        <label for="name">Endereço: </label>

        <input type="text" id="end" name="txt_foto_end" value="" placeholder="Digite seu Endereço" required="required" />
    </div>
    
    <div>
        <h4>Número</h4> 

        <label for="name">Número: </label>

        <input type="text" id="num" name="txt_foto_num" value="" placeholder="Digite o numero da residência" required="required" />
    </div>
    
    <div>
        <h4>Estado: </h4> 

        <label for="estado">Estado: </label>
        <select id="estado"  name="txt_foto_estado" required>
	         <option value="" selected="selected">Selecione..</option>
             <?php $sql = mysqli_query($conexao,"select * from estado");
				echo " --- ".print_r($sql);
				while($row = mysqli_fetch_array($sql)){ 
					$id = $row['id'];
					$nome = $row['nome'];
					$uf   = $row['uf'];
				?>
            	<option value="<?php echo $id ?>"><?php echo $uf ?> - <?php echo $nome ?> </option>
                <?php
					}
				?>
        	            			
        </select>
    </div>    
    
    <div>
        <h4>Cidade</h4> 

        <label for="cidade">Cidade: </label><br>
        <select name="txt_foto_cidade" id="cidade" disabled>
        	<option>Selecione uma cidade</option>
            
        </select>
        
    </div>
    
    <div>

        <h4>Telefone</h4> 

        <label for="name">Telefone: </label>

        <input type="text" id="tel" name="txt_foto_tel" value=""/>

    </div>
    
    <div>

        <h4>Celular</h4> 

        <label for="name">Celular: </label>

        <input type="text" id="cel" name="txt_foto_cel" value=""    />

    </div>

    <div>

        <h4>Senha</h4> 

        <label for="password">Senha:   </label>
        <input type="password" id="password" name="txt_foto_pass" value="" placeholder="" required="required" />

    </div>

    
    <div>
        <label for="name">Upload de arquivo: </label>
        <dir><input name="img_foto" type="file"/></dir>
        <input type="hidden" name="MAX_FILE_SIZE" value="99999999" />		
    </div>
    

    <div>
    	
        <input type="submit" value="Gravar" id="submit" style="cursor:pointer;" />
        <input type="reset" id="reset" value="Limpar campos"/>
		<input type="hidden" name="frmCadFotografo" />
    </div>

</form>



<script type="text/javascript">
	$(document).ready(function(e) {
       /* $('#estado').on('change', function(){ 
			$.ajax({
					type: 'POST',
					url: 'login_foto/lista_cidade.php',
					dataType: 'html',
					data: {'estado': $('#estado').val()},
					beforeSend: function(xhr){
							$('#cidade').attr('disabled','disabled');
							$('#cidade').html('<option value="">Carregando...</option>');
						},
					success: function(data){
							if($('#estado').val() !== ''){
								
								$('#cidade').html('<option value="">Selecione</option>');
								
								$('#cidade').append(data);
								$('#cidade').removeAttr('disabled').focus();
							}else{
								$('#cidade').html('<option>Selecione um Estado</option>');
								$('#cidade').attr('disabled','disabled');
							}
						}
			});			
		}); */
    });
</script>
</body>
</html>