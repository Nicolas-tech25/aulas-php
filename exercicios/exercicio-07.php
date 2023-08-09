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
    $marca = ["Nike","Lacoste","Armani","Thommy"];

    ?>

    <ul>
        <li>Nome do produto: <?=$nome?></li>
        <li>Fabricante: <?=$marca?></li>
        <li>Preço: <?=implode("R$", $preco)?></li>
        <li>Disponibilidade: <?=implode("," , $disponibilidade)?></li>
        <li>Descrição: <?=$descricao?></li>
    </ul>
</body>
</html>