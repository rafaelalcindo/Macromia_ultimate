<?php


function EnviarEmailCliAlterSenha($email,$cli_ident){
   require_once('PHPmailer/PHPMailerAutoload.php');

   if($cli_ident == 'cli'){
   		$chave =  105345893781;
   }else if($cli_ident == 'FF'){
   		$chave =  235482187187;
   }else if($cli_ident == 'FJ'){
   		$chave =  345893876312;
   }

   	header('MIME-Version: 1.0');
   	header('Content-type: text/html; charset=utf-8');
    $mail             = new PHPMailer();
    //$mail->SetLanguage("br");
    $mail->CharSet='UTF-8';
	//$mail->IsSMTP(); // telling the class to use SMTP
	//$mail->Host       = "smtp.macromia.com.br"; // SMTP server
	$mail->SMTPDebug  = 2;                     // enables SMTP debug information (for testing)
	                                           // 1 = errors and messages
	                                           // 2 = messages only
	$mail->SMTPAuth   = true;                  // enable SMTP authentication
	$mail->SMTPSecure = "tls";                 // sets the prefix to the servier
	$mail->Host       = "smtp.macromia.com.br";      // sets GMAIL as the SMTP server
	$mail->Port       = 587;                   // set the SMTP port for the GMAIL server
	$mail->Username   = "sabrina@macromia.com.br";  // GMAIL username
	$mail->Password   = "Sabrina123*";            // GMAIL password

	$mail->SetFrom('sabrina@macromia.com.br', 'Macromia');
	/*$mail->addCustomHeader('MIME-Version','1.0');
	$mail->addCustomHeader('Content-type','text/html');
	$mail->addCustomHeader('charset','utf-8'); */

	//$mail->charset = "UTF-8";

	$mail->AddReplyTo("rafael10expert@gmail.com","Macromia");

	$mail->Subject    = "alterar senha macromia";

	$mail->AltBody    = "To view the message, please use an HTML compatible email viewer!"; // optional, comment out and test
	
	/*$mail->Body = "<html><body><p>Parabéns esse é um teste de link para ver se tudo vai dar certo</p>".
				  "<b>teste</b> <a href='http://www.google.com'> link</a> ".
				  "<a href='http://localhost:8080/macromia11_mobile/index.php'> alterar </a></body></html>";*/

	$mail->Body = "<p >Olá, você solicitou a troca se senha, para trocar a sua senha basta clicar no link abaixo.</p>".
				  "<a href='http://www.macromia.com.br/trocar-senha.php?email_alter=".$email."&cli_ident=".$cli_ident."&key_change=".$chave."'>trocar senha</a>";

	$mail->IsHTML(true);
	/*$mail->Body = "<html><body>
		<p>Para criar a sua nova senha clique no link abaixo  <a href='localhost:8080/macromia11_mobile/trocar-senha.php?email_alter=".$email."&cli_ident=".$cli_ident."&key_change=".$chave."' id='alter_senha'>alterar</a> </p>
	</body></html>";*/
	//$mail->MsgHTML("<p>Para criar a sua nova senha clique no link abaixo.<a href='localhost:8080/macromia11_mobile/trocar-senha.php?email_alter=".$email."&cli_ident=".$cli_ident."&key_change=".$chave."' id='alter_senha'>alterar senha</a></p>");

	$address = $email;
	$mail->AddAddress($address);

	//$mail->AddAttachment("images/phpmailer.gif");      // attachment
	//$mail->AddAttachment("images/phpmailer_mini.gif"); // attachment

	if(!$mail->Send()) {
	  echo "Mailer Error: " . $mail->ErrorInfo;
	} else {
	  header("Location: ../index.php");	
	}

}


