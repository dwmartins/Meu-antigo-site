<?php

if(isset($_POST['email']) && !empty($_POST['email'])){

$nome = addslashes($_POST['name']);
$email = addslashes($_POST['email']);
$mensagem = addslashes($_POST['message']);

$to = "douglas5422@outlook.com"
$subject = "Contato - Site"
$body = "nome:".$nome. "/n".
        "Email:".$email."/n".
        "Mensagem:".$mensagem;
    
$header = "From: contato@dmcode.com"."/r/n"."Reply-to:".$email."/r/n"."X=Mailer:PHP/".phpversion();

if(mail($to,$subject,$body,$header)){

    echo("Emial enviado com sucesso!");
}else{
    echo("O Email não pode ser enviado");
}


}






?>