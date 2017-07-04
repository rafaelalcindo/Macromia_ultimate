<?php
    $name     =   $_POST['name']; //pega os dados que foi digitado no ID name.
    $email    =   $_POST['email']; //pega os dados que foi digitado no ID email.
    $subject  =   $_POST['subject']; //pega os dados que foi digitado no ID sebject.
    $message  =   $_POST['message']; //pega os dados que foi digitado no ID message.

    $headers  = "From: contato@macromia.com.br\r\n";
   // $headers .= "Reply-To: $email\r\n";

/*abaixo contém os dados que serão enviados para o email
cadastrado para receber o formulário*/

       $corpo = "Formulário enviado\n";
       $corpo .= "Nome: " . $name . "\n";
       $corpo .= "Email: " . $email . "\n";
       $corpo .= "Comentários: " . $message . "\n";

       $corpo02 = "teste sendo feito";

       $email_to = 'contato@macromia.com.br,rafael_alcindo@hotmail.com'; //não esqueça de substituir este email pelo seu.

       $status = mail($email_to, $subject, $corpo02, $headers); //enviando o email.

        if($status) {
                echo "<script> alert('Formulário enviado com sucesso!'); </script>"; //mensagem de form enviado com sucesso.
        }
        else {
                echo "<script alert('Falha ao enviar o Formulário.'); </script>"; //mensagem de erro no envio.
        }
?>