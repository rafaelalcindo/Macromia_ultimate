<!DOCTYPE html>
<html>
<head>
	<title>Tela de cadastro de cliente</title>
	<script src="_js/jquery-1.12.4.min.js" type="text/javascript" language="javascript"/></script>
    <script src="_js/maskedinput.js" type="text/javascript"></script>
    <script type="text/javascript">
		window.onload = function(){
			alert("carregando...");
		}
			
		jQuery(function($){
			$("#telefone").mask("(99)9999-9999");
			$("#celular").mask("(99)99999-9999");
		});
    </script>
    
</head>
<body>
	<?php require('lista_estado.php');  ?>
	<form enctype="multipart/form-data" method="post" action="index.php?r=login&p=cad_cli">
	<h3 id="teste">Tela de Cadastro de Cliente</h3> 
    <a href="">Teste de Jquery</a>
    <div>
        <label for="name">Nome:</label>
        <input type="text" id="nome" name="txt_nome" value="" placeholder="Digite o seu nome" required="required" autofocus />

    </div>
    
    <div>
        <label for="name">Email:</label>		
        <input type="email" id="email" name="txt_email" value="" placeholder="Digite seu Email" required="required"  />

    </div>
    
    <div>
        <label for="name">Senha:</label>		
        <input type="password" id="senha" name="txt_senha" value=""  required="required"  />

    </div>
    
    <div>
        <label for="name">Verificar Senha:</label>		
        <input type="password" id="senha_veri" name="txt_senha_verif" value="" required="required"  />
    </div>
    	
    <div> 
        <label for="name">Telefone: </label>
        <input type="text" id="telefone" name="txt_telefone" value="" required="required"/>
    </div>
    
    <div> 
        <label for="name">Celular: </label>
        <input type="text" id="celular" name="txt_celular" value="" required="required"/>
    </div>
    
    <div>
        <label for="name">Upload de arquivo: </label>
        <dir><input name="img_cli" type="file"/></dir>
        <input type="hidden" name="MAX_FILE_SIZE" value="99999999" />		
    </div>
    

    <div>

        <input type="submit" value="Cadastrar" id="submit" style="cursor: pointer;" />
        <input type="reset" id="reset" value="Limpar campos"/>
		<input type="hidden" name="frmCadUsuario" />
    </div>

</form>
</body>
</html>