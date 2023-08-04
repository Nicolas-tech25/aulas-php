<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funções nativas</title>
</head>
<body>
    <h1>Exemplos de funções nativas</h1>
    <hr>

    <h2>Strings</h2>
    <h3>trim()</h3>

    <?php
    // Função que remove espaços antes e depois de string.
    $nome = "      Vinicius me deve 80 paçocas     ";
    $nomeSemEspaco = trim($nome);
    ?>

    <pre><?=var_dump($nome)?></pre>
    <pre><?=var_dump($nomeSemEspaco)?></pre>

    <h3>str_replace()</h3>
    <?php
    // Função que permite substituiç~çao se string/caracteres.
    $fraseFeia = "Ele é um bobão!!!";
    $fraseBunitinha = str_replace(
        ["xarope" ,"bobão"],
    "🤫😱😰",
    $fraseFeia
);
    ?>

    <p><?=$fraseFeia?></p>
    <p><?=$fraseBunitinha?></p>

    <h3>explode()</h3>
    <?php
    // Função que transforma uma string em um array
    $linguagem = "HTML - CSS - JS - PHP";
    $arraylinguagem = explode(" - ",$linguagem);
    ?>

    <pre><?=var_dump($linguagem)?></pre>
    <pre><?=var_dump($arraylinguagem)?></pre>
    <hr>

    <h2>Numéricos</h2>
    <h3>min, máx</h3>
    <?php
    $valores = [10,5,50,1000,275];
    $valorQualquer = 1259.75;
    ?>

    <p>Menor valor: <?=min($valores)?></p>
    <p>Maior valor: <?=max($valores)?></p>
    <p>Arredondamento: <?=round($valorQualquer)?></p>

    <hr>

    <h2>Arrays</h2>
    <h3>implode()</h3>
    <?php
    // Função que transforma array em string
    $tropas = ["tropa do mais novo","tropa do amor","tropa da revoada"];
    $textotropas = implode(" - ",$tropas);
    ?>

    <pre><?=var_dump($tropas)?></pre>
    <pre><?=var_dump($textotropas)?></pre>

    <h3>extract()</h3>
    <?php
    // Função que extai chaves associativas  para variáveis
    $aluno = [
        "id" => 1,
        "nome" => "Chaves do 8",
        "idade" => 25
    ];

    extract($aluno)
    ?>

    <ul>ID: <?=$id?></ul>
    <ul>Nome: <?=$nome?></ul>
    <ul>Idade: <?=$idade?></ul>

    <h3>array_sum()</h3>
    <?php
    // Funsão para Soma
    $total = array_sum($valores)
    ?>
    <p>Soma dos valores: <?=$total?></p>

    <h3>array_unique()</h3>
    <?php
    // Função de retorno de dados unicos
    $produtos = ["Tv","Notebook","Tv","Geladeira", "monitor", "Notbook","Teclado","Mouse"];

    $produtosUnicos = array_unique($produtos);
    ?>

    <pre><?=var_dump($produtos)?></pre>
    <pre><?=var_dump($produtosUnicos)?></pre>


    <hr>
    <h2>Filtros</h2>
    <h2>Segurança</h2>
</body>
</html>