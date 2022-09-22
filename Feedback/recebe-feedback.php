<?php
 
    require_once("Mensagem.class.php");
    
    $mensagem = $_POST["mensagem"];
    $nome = $_POST["nome"];


    // Mostrando dados criando um objeto
    $objetoMensagem = new Mensagem ($mensagem, $nome);
    $objetoMensagem -> enviar();

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedback</title>
</head>
<body>
</body>
</html>