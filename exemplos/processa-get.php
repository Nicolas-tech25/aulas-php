<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Processa GET</title>
</head>
<body>
    <h1>Exemplo usando GET</h1>
    <hr>
    <p>Receber e processar dados via <b>GET</b>.</p>

    <?php
    // Capturando os dados transmitidos
    $nome = $_GET["nome"];
    $email = $_GET["email"];
    $mensagem = $_GET["mensagem"];
    ?>

    <h2>Dados: </h2>
    <ul>
        <li>Nome: <?=$nome?></li>
        <li>Email: <?=$email?></li>
        <li>Mensagem: <?=$mensagem?></li>
    </ul>
</body>
</html>