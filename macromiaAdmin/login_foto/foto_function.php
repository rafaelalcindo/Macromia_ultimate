<?php


function EnviarEmailFotogrado($email,$ident){
	require('corpo_email_foto.php');
	
	$fotografo = array('bruno@mazy.com.br','igor.rios@mazy.com.br','rafael@mazy.com.br','computer10intelligent@hotmail.com');
	$to_send   = " ";
	$titulo    = "estamos testando usuarios fotografos ".$email." <-- ";
	$from =  'MIME-Version: 1.0' . "\r\n";
	$from .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
	$from .= "From: rafael10expert@gmail.com";
	
	foreach($fotografo as  $foto){
		$to_send .= $foto.", ";
	}
	$msg = corpoEmailFoto($email,$ident);
	if(mail($to_send,$titulo,$msg,$from) ){
		echo "Email enviado com sucesso!";
		return true;
	}else{
		echo "Erro ao enviar o email";
		return false;
	}
}