<?php

function corpoEmailFoto($email,$ident){
	
return $msg = "
<html lang='pt-BR'>
	<head>
	<title>criar site</title>
		<meta http-equiv='Content-Type' content='text/html; charset=utf-8' />
        <style type='text/css'>
			html, body{
				height: 100%;
				min-height: 100%;
			}
			
			body{
				font: 15px arial;
				color: rgba(216,216,216,1.00);
			}
			.wrapper{
				height: 100%;
				min-height:100%;
				
				display: -ms-flex;
				display: -webkit-flex;
				display: flex;
				
				-ms-align-items: center;
				-webkit-align-items: center;
				align-items: center;
				
				-ms-justify-content: center;
				-webkit-justify-content: center;
				justify-content: center;
			}
			
			.wrapper div {
			  padding: 40px;
			  border: 1px solid rgba(0, 0, 0, .3);
			}
        </style>
    </head>
<body bgcolor='#ffffff'>
	<div class='wrapper'>
        <div>   
         <img name='email03'  src='http://mazy.com.br/questionario.png' width='500' height='500' id='email03' usemap='#m_email03' alt='' />
          <map name='m_email03' id='m_email03'>

            <area shape='rect' coords='327,426,441,454' href='http://www.macromia.com.br/helper/path_cad_cli.php?em_foto=".$email."&in=".$ident."' alt='Pesquisa' />
            <area shape='rect' coords='327,462,441,475' href='http://www.mazy.com.br/' alt='Visite Nosso Site' />
            <input type='hidden' value=".$email."/>
			<input type='hidden' value=".$ident."/>
          </map>
        </div>
    </div>
</body>
</html>";

}