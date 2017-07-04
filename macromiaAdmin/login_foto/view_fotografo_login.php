<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Pagina de Login do Fotógrafo</title>
</head>
<body>
	<form method="post" action="index.php?r=login_foto&f=logar">
	<h3>Pagina de Login do Fotografo</h3><br/><br/>
    <div>

        <h4>Digite seu Email</h4> 

        <label for="email">Endereço de Email: <span class="required">*</span>

        </label>

        <input type="email" id="email" name="txt_email_foto" value="" placeholder="your@email.com" required="required" />

    </div>

    <div>

        <h4>Digite a sua Senha</h4> 

        <label for="password">Senha: <span class="required">*</span>

        </label>

        <input type="password" id="password" name="txt_senha_foto" value="" placeholder="" required="required" />

    </div>    

    <div>

        <h4>Indetifique-se</h4>

        <label for="radio-choice-1">Pessoa Física</label>

        <input type="radio" name="rd_foto" id="radio-choice-1" checked  value="1">

        <label for="radio-choice-2">Pessoa Juridica</label>

        <input type="radio" name="rd_foto" id="radio-choice-2"       value="2">

    </div><br/><br/>

    <div>
    <p> <input type="checkbox" value="1" name="cbx_lembrar_foto" style="cursor: pointer;"/> Mantenha-me Logado </p>
        <input type="submit" value="Entrar" id="submit" />
        <input type="hidden" name="frmLogFotografo" />
    </div>
    <br/><br/><br/>
    <a href="index.php?r=login_foto&f=view_cad_foto">Cadastre-se</a>

</form>


</body>
</html>