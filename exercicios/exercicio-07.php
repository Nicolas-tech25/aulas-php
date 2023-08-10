<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POST Exercício 07</title>
</head>
<body>
    <h1>POST</h1>
    <hr>
    <p>Processo de dados via POST.</p>

    <h2>Dados recebidos</h2>

    <?php
    if(empty($_POST["nome"]) || empty($_POST["preco"])){ ?>
    <p>Você deve preencher nome e preço</p>
    <p><a href="formulario.html">Voltar</a></p>

    <?php } else{
        $nome = filter_input(INPUT_POST, "nome", FILTER_SANITIZE_SPECIAL_CHARS);
        $preco = filter_input(INPUT_POST, "preco", FILTER_SANITIZE_NUMBER_INT);

        $descricao = filter_input(INPUT_POST , "descricao", FILTER_SANITIZE_SPECIAL_CHARS);
        
        $resposta = filter_var_array(
            $_POST["resposta"] ?? [],
            FILTER_SANITIZE_SPECIAL_CHARS
        );
    } ?>

    <ul>
        <li>Nome do produto: <?=$nome?></li>
        <li>Fabricante: <?=$marca?></li>
        <li>Preço: <?=implode("R$", $preco)?></li>
        <li>Disponibilidade: <?=implode("," , $disponibilidade)?></li>
        <li>Descrição: <?=$descricao?></li>
    </ul>
</body>
</html>