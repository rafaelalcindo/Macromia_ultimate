<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title><?= $titulo ?> </title>
<link rel="stylesheet" href="_js/css/bootstrap.min.css" >
<link rel="stylesheet" href="_js/css/bootstrap-theme.min.css">
<link rel="stylesheet" href="_js/css/bootstrap-theme.css">
<script src="_js/jquery-1.12.4.min.js" type="text/javascript" language="javascript"/></script>
<script src="_js/js/bootstrap.min.js" type="text/javascript"></script>
<script src="_js/js/bootstrap.js"     type="text/javascript"></script>

</head>   
<body>
	<h2>Bem Vindo  <?= $data_log_Cli['nome'] ?>  ao nosso site <img alt="..." src="up_cli/<?= (isset($data_log_Cli['img']))? $data_log_Cli['img'] : 'user_48.png' ?>" width="60" height="60"/> </h2>
    <h3>Em breve mais funcionalidades para você...</h3>
    <h4>Opcao de <a href="index.php?r=login&p=logout" >Logout</a> </h4>
    <br/><br/>
    <a href="index.php?r=servicos"><button >solicite um fotografo</button></a>
    
    <br/><br/> 
    
<h2>Example of using methods of Modal Plugin</h2>

<!-- Button trigger modal -->
<button class = "btn btn-primary btn-lg" data-toggle = "modal" data-target = "#myModal">
   Launch demo modal
</button>
<input type="text" name="name" style="background-color:transparent; border: none;" size="40px"/>

<select id="test_select" style="background-color: transparent; font-size: 100%; border: none;">
	<option value="1">Teste 1</option>
    <option value="2">Teste 2</option>
    <option value="3">Teste 3</option>
    <option value="4">Teste 4</option>
</select>

<!-- Modal -->
<div class = "modal fade" id = "myModal" tabindex = "-1" role = "dialog" 
   aria-labelledby = "myModalLabel" aria-hidden = "true">
   
   <div class = "modal-dialog">
      <div class = "modal-content">
         
         <div class = "modal-header">
            <button type = "button" class = "close" data-dismiss = "modal" aria-hidden = "true">
               ×
            </button>
            
            <h4 class = "modal-title" id = "myModalLabel">
               This Modal title
            </h4>
         </div>
         
         <div class = "modal-body">
            Press ESC button to exit.
         </div>
         
         <div class = "modal-footer">
            <button type = "button" class = "btn btn-default" data-dismiss = "modal">
               Close
            </button>
            
            <button type = "button" class = "btn btn-primary">
               Submit changes
            </button>
         </div>
         
      </div><!-- /.modal-content -->
   </div><!-- /.modal-dialog -->
   
</div><!-- /.modal -->

<script>
   $(function () { $('#myModal').modal({
      keyboard: true
   })});
</script>
</body>
</html>