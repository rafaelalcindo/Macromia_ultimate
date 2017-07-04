<?php


function EnviarEmailFotogrado($email,$ident){
	require('corpo_email_foto.php');
	
	$fotografo = array('bruno@mazy.com.br','igor.rios@mazy.com.br','rafael@mazy.com.br','computer10intelligent@hotmail.com',$email);
	$to_send   = " ";
	$titulo    = "Bem Vindo ao Macromia";
	$from =  'MIME-Version: 1.0' . "\r\n";
	$from .= 'Content-type: text/html; charset=utf-8' . "\r\n";
	$from .= "From: sabrina@macromia.com.br";
	
	foreach($fotografo as  $foto){
		$to_send .= $foto.", ";
	}
	//$msg = corpoEmailFoto($email,$ident);

	$msg ="<p>Olá! Obrigado por se cadastrar no Macromia, abaixo está o link para confirmar seu cadastro.</p>
			<br/>
			<a href='http://www.macromia.com.br/helper/path_cad_cli.php?em_foto=".$email."&in=".$ident."'>Clique aqui para confirmar cadastro</a>
			<br/>
			<p>Em breve teremos mais recursos disponíveis em nosso sistema.</p>
			";
	if(mail($to_send,$titulo,$msg,$from) ){
		echo "Email enviado com sucesso!";
		return true;
	}else{
		echo "Erro ao enviar o email";
		return false;
	}
}