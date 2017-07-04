<!doctype html>
<html>
<head>
<title>tela de esconha</title>
<meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
<link rel="stylesheet" href="_js/css/bootstrap.min.css" >
<link rel="stylesheet" href="_js/css/bootstrap-theme.min.css">
<link rel="stylesheet" href="_js/css/bootstrap-theme.css">
<script src="_js/js/bootstrap.min.js" type="text/javascript"></script>
<script src="_js/js/bootstrap.js"     type="text/javascript"></script>
<style type="text/css">
	#menu_body{
		margin-top:10%;
	}

	#block_cli{
		background-color: #42A5F5;
		width:100%;
		height:40%;
		box-shadow: 0px 0px 10px #BFBFBF;
		cursor: pointer;
	}
	
	#block_cli:hover{
		box-shadow: 0px 0px 15px #00BCD4;
	}
	
	#block_foto{
		background-color: #26A69A;
		width: 100%;
		height: 40%;
		box-shadow:0px 0px 10px #BFBFBF;
		cursor: pointer;
	}
	
	#block_foto:hover{
		box-shadow: 0px 0px 15px #00BCD4;
	}
	
	#menu_op{
		font-family:Baskerville, "Palatino Linotype", Palatino, "Century Schoolbook L", "Times New Roman", serif;
		font-size: 32px;
		color: white;
	}
</style>

<script type="text/javascript">
	function link_cli(){		
		window.location.href = "index.php?r=admin&ad=view_painel_cli";		
	}
	function link_foto(){
		window.location.href = "#";	
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
          <a class="navbar-brand" href="#">Tela de Adm de cli e foto</a>
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
    <div class="container" id="menu_body">
        <div class="row">
            <div class="col-md-12">
                <div class="col-md-6">
                    <div id="block_cli" onClick="link_cli()">                    	
                        <div class="row" >
 							<div class="col-md-3">
                            </div>
                            <div class="col-md-6">
                            	<h1 id="menu_op">Estatistica Cliente <br/>
                                <span class="glyphicon glyphicon-user" aria-hidden="true" style="position: absolute; top: 100%; left: 30%; font-size: 100px"></span>
                                </h1>
                            </div>
                            <div class="col-md-3">
                            </div>                           
                        </div>
                    </div>	
                </div>
                <div class="col-md-6">
                    <div id="block_foto" onClick="link_foto()">
                    	<div class="row">
                        	<div class="col-md-2"></div>
                            <div class="col-md-7">
                            	<h1 id="menu_op">Estatistica Fotógrafo <br/>
                                	<span class="glyphicon glyphicon-camera" aria-hidden="true" style="position: absolute; top: 100%; left: 40%; font-size: 100px"></span>
                                </h1>
                            </div>
                            <div class="col-md-3"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    

</body>
</html>