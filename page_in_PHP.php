<?php

	echo "now we are testing a real page in PHP<br/>";
	echo "Enjoy";
	
	$fotografo = array('bruno@mazy.com.br','igor.rios@mazy.com.br','rafael@mazy.com.br','computer10intelligent@hotmail.com');
	$to_send = " ";
	$titulo  = "temos clientes com email ".$email_cli." procurando seu serviço.";
	
	$from =  'MIME-Version: 1.0' . "\r\n";
	$from .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
	$from .= "From: contato@macromia.com.br ";
	
	$msg = "Teste para mandar email";
	
	foreach($fotografo as $foto){
		$to_send .= $foto.", ";
	}
	
	
	if(mail($to_send,$titulo,$msg,$from)){
		echo "Mensagem enviada com sucesso!";
	}else{ echo "não foi possivel enviar a mensagem."; }
	
?>