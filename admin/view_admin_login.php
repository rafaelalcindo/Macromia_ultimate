<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Tela de Login de Admin</title>
<meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
<link rel="stylesheet" href="_js/css/bootstrap.min.css" >
<link rel="stylesheet" href="_js/css/bootstrap-theme.min.css">
<link rel="stylesheet" href="_js/css/bootstrap-theme.css">
<script src="_js/js/bootstrap.min.js" type="text/javascript"></script>
<script src="_js/js/bootstrap.js"     type="text/javascript"></script>



</head>
<body>
<div class="container">
    <div class="row">
        <div class="span12">
            <form class="form-horizontal" action='index.php?r=admin&ad=logar_admin' method="POST">
              <fieldset>
                <div id="legend">
                  <legend class="">Login</legend>
                </div>
                <div class="control-group">
                  <!-- Username -->
                  <label class="control-label"  for="username">Username</label>
                  <div class="controls">
                    <input type="text" id="usuario" name="usuario" placeholder="Digite seu login" class="form-control input-xlarge" required>
                  </div>
                </div>
                <div class="control-group">
                  <!-- Password-->
                  <label class="control-label" for="password">Password</label>
                  <div class="controls">
                    <input type="password" id="senha" name="senha" placeholder="Digite a sua senha" class="form-control input-xlarge" required>
                  </div>
                </div>
                <div class="control-group">
                  <!-- Button -->
                  <div class="controls">
                    <button class="btn btn-success">Login</button>
                  </div>
                  <div class="control-group">
                  	<label> <input type="checkbox" name="cbx_lembrar_admin" id="cbx_lembrar_admin" value="1"/> Lembrar login</label>
                  </div>
                </div>
                
              </fieldset>
            </form>
        </div>
    </div>
</div>

</body>
</html>