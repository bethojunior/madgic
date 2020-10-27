
<?php

$destino = "contato@madgic.com.br";
$nome = $_POST['nome'];
$email = $_POST['email'];
$texto = $_POST['texto'];
$headers = "Enviado por : " . $nome . "\n";
$mensagem = "Enviado por : " . $nome . "\n"."Email: ".$email."\n"."Motivo :".$texto;

if(mail($destino, $headers , $mensagem)){
    echo true;
}else{
    echo false;
}
?>