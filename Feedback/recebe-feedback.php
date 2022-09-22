<?php
 
    require_once("Mensagem.class.php");
    
    $mensagem = $_POST["mensagem"];
    $nome = $_POST["nome"];
    $email = $_POST["email"];


    // Mostrando dados criando um objeto
    $objetoMensagem = new Mensagem ($mensagem, $nome);
    $objetoMensagem -> enviar();

?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fale conosco</title>
    <link href="style2-feedback.css" rel="stylesheet" type="text/css" />
</head>
<body>
    <img src="../assets/girl.png" id="girl" />
</body>
</html>