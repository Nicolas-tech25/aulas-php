<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Condicionais</title>
    <style>
        h1,h2{
            color:indigo;
            font-family: Verdana, Geneva, Tahoma, sans-serif;
        }
        .comprar{color: red;}
        .urgente{
            color: red;
            font-weight: bold;
            background-color: yellow;
            width: 100px;
            border-radius: 5px;
        }
        .normal{color: green;}
    </style>
</head>

<body>

    <h1>Estruturas condicionais</h1>
    <hr>

    <h2>Simples</h2>

    <?php
    $numero = 5;
    if ($numero > 1) {
        echo "<p>$numero é maior que 1</p>";
    }

    // Sintaxe sem chaves
    if ($numero > 1) echo "<p>$numero é maior que 1</p>";
    ?>

    <h2>Composta</h2>

    <?php
    $produto = "Ultrabook Asus";
    $qtd_estoque = 0; // O que temos
    $qtd_critica = 15; // mínimo necessário

    echo "<h3>$produto</h3>";
    echo "<h4>Quantidade em estoque: $qtd_estoque</h4>";

    if ($qtd_estoque < $qtd_critica) {
        echo "<p class='comprar'>É necessário comprar!</p>";

        // Condicional Aninhada
        if($qtd_estoque == 0){
            echo "<p class='urgente'>URGENTE!!</p>";
        }


    } else {
        echo "<p class='normal'>Estoque normal!</p>";
    }
    


    ?>

    <h2>Encadeada</h2>
<?php
/* Opções para o exemplo:
1 -> Lanche
2 -> Pizza
3 -> Paçoca
Qualquer outa -> Opções inválida */ 

$opcao_escolhida = 4; // comece com qualquer valor

if($opcao_escolhida == 1){
    echo "<p>Beleza, vamo fazer um lanchão</p>";
} elseif($opcao_escolhida == 2){
    echo "<p>A pizza já ta no forno</p>";
}elseif($opcao_escolhida == 3){
    echo "<p>Professor ficou feliz</p>";
}else{
    echo "<p>Vixi não entendi, vou chamar a Valeska</p>";
}

// Exemplo: == e ==
$a = 10;

$b = 10;

$resultado = $a == $b; // Lógico

var_dump($resultado);
var_dump($a);
var_dump($b);
?>

</body>

</html>