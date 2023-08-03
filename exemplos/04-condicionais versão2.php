<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>(Versão 2) Condicionais</title>
    <style>
        h1,
        h2 {
            color: indigo;
            font-family: Verdana, Geneva, Tahoma, sans-serif;
        }

        .comprar {
            color: red;
        }

        .urgente {
            color: red;
            font-weight: bold;
            background-color: yellow;
            width: 100px;
            border-radius: 5px;
        }

        .normal {
            color: green;
        }
    </style>
</head>

<body>

    <h1>Estruturas condicionais</h1>
    <hr>

    <h2>Simples</h2>

    <?php
    $numero = 5;
    if ($numero > 1) {
    ?>
        <p><?= $numero ?> é maior que 1</p>
    <?php
    }

    // Sintaxe sem chaves
    if ($numero > 1) echo "<p>$numero é maior que 1</p>";
    ?>

    <h2>Composta</h2>

    <?php
    $produto = "Ultrabook Asus";
    $qtd_estoque = 0; // O que temos
    $qtd_critica = 15; // mínimo necessário
    ?>

    <h3><?= $produto ?></h3>
    <h4>Quantidade em estoque: <?= $qtd_estoque ?></h4>

    <?php
    if ($qtd_estoque < $qtd_critica) {
    ?>
        <p class="comprar">É necessário comprar!</p>

        <?php
        // Condicional Aninhada
        if ($qtd_estoque == 0) {
        ?>
            <p class="urgente">URGENTE!!</p>
        <?php
        }
    } else {
        ?>
        <p class='normal'>Estoque normal!</p>

    <?php
    }
    ?>

    <h2>Encadeada</h2>

    <?php
    /* Opções para o exemplo:
1 -> Lanche
2 -> Pizza
3 -> Paçoca
Qualquer outa -> Opções inválida */

    $opcao_escolhida = 2; // comece com qualquer valor

    if ($opcao_escolhida == 1) {
        $mensagem = "Beleza, vamo fazer um lanchão";
    } elseif ($opcao_escolhida == 2) {
        $mensagem =  "A pizza já ta no forno";
    } elseif ($opcao_escolhida == 3) {
        $mensagem = "Professor ficou feliz";
    } else {
        $mensagem = "Vixi não entendi, vou chamar a Valeska";
    }
    ?>
    
    <h2>Switche case</h2>
    
    <?php

    // Versão usando switch/case
    switch ($opcao_escolhida) {
        case 1:
            $mensagem = "Beleza, vamo fazer um lanchão";
        case 2:
            $mensagem = "A pizza já ta no forno";
        case 3:
            $mensagem = "Professor ficou feliz";
        case 4:
            $mensagem = "Vixi não entendi, vou chamar a Valeska";
    }
    ?>
    <p><?=$mensagem?></p>

</body>

</html>