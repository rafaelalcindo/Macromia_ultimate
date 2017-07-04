<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title><?= $titulo ?></title>
</head>
<body>
<h1>Formulário de Login</h1><br/>

	

<form method="post" action="index.php?r=login&p=logar">
  
  <div>
    <h4>Login com email:</h4>
    <label for="email">Email: <span class="required">*</span> </label>
    <input type="email" id="email" name="txt_email" value="" width="300px" placeholder="seu@email.com" required="required" maxlength="40" />
  </div>
  <div>
    <h4>Senha:</h4>
    <label for="password">Senha: <span class="required">*</span> </label>
    <input type="password" id="password" name="txt_pass" value="" placeholder="senha" required="required" maxlength="40"/><br/>
    
   <p> <input type="checkbox" value="1" name="lembrar"/> Mantenha-me Logado </p>
  </div> 
  <div>
    <a href="index.php?r=login&p=view_cad_cli">Cadastre-se</a>
  </div>
  <br/>
  <div>
    <input type="submit" value="Entrar" id="submit" style="cursor: pointer;" />
    <input type="hidden" name="frmCadUsuario" />
  </div>
</form>
</body>
</html>