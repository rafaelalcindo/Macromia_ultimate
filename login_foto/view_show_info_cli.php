<?php
	session_start();
	if(isset($_SESSION['foto_email'])){ $foto_email = $_SESSION['foto_email']; }else{ $foto_email = " ";}
	if(isset($_SESSION['foto_senha'])){ $foto_senha = $_SESSION['foto_senha']; }else{ $foto_senha = " ";}
	if(isset($_SESSION['ident'])){      $indet      = $_SESSION['ident'];	   }else{ $iden = " "; }
	if(isset($_GET['id_event'])){       $id_event   = $_GET['id_event'];  	   }else{ $id_event = " ";}
	if(isset($_GET['id_foto'])){        $id_foto    = $_GET['id_foto'];  	   }else{ $id_foto  = " ";}
	
	if($foto_email != null && $foto_senha != null && ($id_event != " " || $id_foto != " ")){
		
	}
	
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Página de Visualização</title>
<meta http-equiv="content-type" content="text/html; charset='utf-8'"/>
    <link rel="stylesheet" href="../_js/css/bootstrap.css" >
    <link rel="stylesheet" href="../_js/css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="../_js/css/bootstrap-theme.css">
    <script src="../_js/jquery-1.12.4.min.js" type="text/javascript"></script>
    <script src="../_js/jquery_min.js"   	  type="text/javascript"></script>
    <script src="../_js/js/bootstrap.min.js"  type="text/javascript"></script>
    <script src="../_js/js/bootstrap.js"      type="text/javascript"></script>
    
    <script type="text/javascript">
		$(document).ready(function(e) {
            
        });
    </script>
    
</head>
<body>
    <div class="container">
    
          <!-- The justified navigation menu is meant for single line per list item.
               Multiple lines will require custom code not provided by Bootstrap. -->
          <div class="masthead">
            <h3 class="text-muted">Project name</h3>
            <nav class="navbar navbar-default">
              <ul class="nav nav-justified">
                <li class="active"><a href="#">Home</a></li>
                <li><a href="#">Projects</a></li>
                <li><a href="#">Services</a></li>
                <li><a href="#">Downloads</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Contact</a></li>
              </ul>
            </nav>
          </div>
    
          <!-- Jumbotron -->
          <div class="jumbotron">
            <h1>Marketing stuff!</h1>
            <p class="lead">Cras justo odio, dapibus ac facilisis in, egestas eget quam. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet.</p>
            <p><a class="btn btn-lg btn-success" href="#" role="button">Get started today</a></p>
          </div>
    
          <!-- Example row of columns -->
          <div class="row">
            <div class="col-lg-4">
              <h2>Safari bug warning!</h2>
              <p class="text-danger">As of v8.0, Safari exhibits a bug in which resizing your browser horizontally causes rendering errors in the justified nav that are cleared upon refreshing.</p>
              <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
              <p><a class="btn btn-primary" href="#" role="button">View details &raquo;</a></p>
            </div>
            <div class="col-lg-4">
              <h2>Heading</h2>
              <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
              <p><a class="btn btn-primary" href="#" role="button">View details &raquo;</a></p>
           </div>
            <div class="col-lg-4">
              <h2>Heading</h2>
              <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa.</p>
              <p><a class="btn btn-primary" href="#" role="button">View details &raquo;</a></p>
            </div>
          </div>
    
          <!-- Site footer -->
          <footer class="footer">
            <p>&copy; 2016 Company, Inc.</p>
          </footer>
    
        </div> <!-- /container -->


    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>

</body>
</html>