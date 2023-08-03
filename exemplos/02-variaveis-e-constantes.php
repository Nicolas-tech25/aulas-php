<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variáveis e Constantes</title>
</head>
<body>
    <h1>Manipulando dados na memória</h1>
    <hr>
<?php
    // Variáveis

    // string
    $curso = "Téc. em informática para internet";

    // inteiro (integer)
    $ano = 2023;

    // float (real)
    $preco = 2500.25;

    echo "<h2> Saída de dados usando echo na sintaxe COMPLETA </h2>";

    echo $curso; // sem estrutura / tag 
    echo "<p>$curso</p>"; // interpolação (somente com aspa duplas)
    echo "<p>".$curso."</p>"; // concatenação

    echo "<p>Ano letivo: $ano</p>";
    echo "<p><b>Preço</b>: $preco</p>";
?>

<h2>Saida de dados usando sintaxe simplificada</h2>
<p><?php echo $curso ?></p>

<!-- Forma mais facil e mais usada -->
<p><?=$curso?></p> 

<p>Estamos fazendo o curso <?=$curso?> no ano de <?=$ano?></p>

<?php 
    // Constantes

    // 1ª forma: usando  FUNÇõ define()
    define ("MEU_NOME","Nicolas O. amorim");

    // 2ª forma: usando CONST
    const UNIDADE = "Penha";

    // Saida de dados con
    echo MEU_NOME;
    echo "<p><b>".MEU_NOME."</b></p>";
?>
<!-- Saída simplificada -->
<p>Me chamo <b> <?=MEU_NOME?> </b> e estou no Senac <?=UNIDADE?></p>
</body>
</html>