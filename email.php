
<?php

$config  = "MIME-Version: 1.1\r\n";
$config .= "Content-type: text/plain; charset=UTF-8\r\n";
$config .= "From: contato@tuttishop.com.br\r\n"; // remetente
$config .= "Return-Path: contato@tuttishop.com.br\r\n"; // return-path

$destino = "hgomescostajr@gmail.com";
$nome = $_POST['nome'];
$email = $_POST['email'];
$texto = $_POST['texto'];
$headers = "Enviado por : " . $nome . "\n";
$mensagem = "Enviado por : " . $nome . "\n"."Email: ".$email."\n"."Motivo :".$texto;

if(mail($destino, $headers , $mensagem)){
    echo 'enviado';
}else{
    echo 'erro ao enviar';
}
?>