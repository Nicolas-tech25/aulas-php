<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Processa POST</title>
</head>
<body>
    <h1>Exemplo usando POST</h1>
    <hr>
    <p>Receber e processar dados via <b>POST</b>.</p>

    <?php
    // Se os campos nome e e-mail estão vazios
    if (empty($_POST["nome"]) || empty($_POST["email"]) ) { ?>

        <p>Você deve preencher nome e e-mail!!!</p>
        <p><a href='10-formulario.html'>Voltar</a></p>
    
    <?php } else{
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $idade = $_POST["idade"];
    $mensagem = $_POST["mensagem"];
    $interesses = $_POST["interesses"];
    ?>

    <h2>Dados: </h2>
    <ul>
        <li>Nome: <?=$nome?></li>
        <li>Email: <?=$email?></li>
        <li>Idade: <?=$idade?></li>
        <li>Interesses: <?=implode(", ",$interesses)?></li>

        <!-- se a variável mensagem NÃO ESTIVER VAZIA, mostre o <li> com a mensagem -->
        <?php if( !empty($mensagem)){?>
        <li>Mensagem: <?=$mensagem?></li>

    <?php } ?>
    </ul>
<?php
}
?>
    
</body>
</html>