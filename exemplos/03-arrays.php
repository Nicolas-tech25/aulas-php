<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays</title>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Tektur&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=VT323&display=swap');
        body{
            background-color: black;
            color: aliceblue;
            font-family: 'VT323', monospace;
            font-size: 2rem;
        }
        h1,h2,h3{
            font-family: 'Tektur', cursive;
            color: dodgerblue;
        }
        .exercicio li:nth-child(odd){
            color: blue;            
        }
        .exercicio li:nth-child(even){
            color: red;            
        }
        .teste{
            color: darkorange;
        }
    </style>
</head>
<body>
    <header>
    <h1>Trabalhando com arrays (vetores e matrizes)</h1>
    </header>
    <hr>

    <h2>Arrays com indice numérico</h2>

    <?php
    // Sintaxe com colchetes
    $artistas = ["Kayblack ","Dfideliz","Kyan"];
    // Sintaxe com função de array

    $cursos = array("HTML","NODE","PHP");

    // Sintaxe de atribuição manual
    $buteco[0] = "Bolinho de bacalhau";
    $buteco[1] = "Pastel";
    $buteco[2] = "Esfiha";

    // Constantes de array(PHP 7+)
    define("UNIDADES",["Penha","Tatuapé"]);
    const FRUTAS = ["Limão","Abacaxi"];
    ?>

    <h3>Acessando dados</h3>

    <ol>
        <li>Artistas que eu mais gosto: <span class="teste"><?=$artistas[1]?></span></li>
        <li>Curso básico de: <span class="teste"><?=$cursos[0]?></span></li>
        <li>Quero comer: <span class="teste"><?=$buteco[1]?></span></li>
        <li>Estamos no Senac <span class="teste"><?=UNIDADES[0]?></span></li>
        <li>Fruta boa pra caipirinha/vitamina: <span class="teste"><?=FRUTAS[0]?></span></li>
    </ol>

    <h2>Array associativo</h2>

    <?php
    $curso = [
        // Chave associativa

        // indenificador => valor
        "titulo" => "gastronomia",
        "carga_horaria" => 150,
        "descritivo" => "Aprenda a ferver água",
    ]; 
    ?>

    <h3>Acessando os dados (array associativo)</h3>
    <p>Nome do curso:  <?=$curso["titulo"]?></p>
    <p>Carga Horária:  <?=$curso["carga_horaria"]?> horas.</p>
    <p>descritivo:     <?=$curso["descritivo"]?></p>

    <h2>Matriz (array dentro de array)</h2>

    <?php
    $plano_de_Estudos = [
        ["JS avançado", "Node.js","React"],
        ["PHP","POO","MYSQL","PYTON"],
        ["Teoria das cores","Photoshop","UX/UI"]
    ];
    ?>

    <h3>Exercício</h3>

    <ul class="exercicio">
        <li><?=$plano_de_Estudos[0][2]?></li>
        <li><?=$plano_de_Estudos[1][1]?></li>
        <li><?=$plano_de_Estudos[0][1]?></li>
        <li><?=$plano_de_Estudos[2][2]?></li>
    </ul>

    <h2>Funções de analise de estrutura de dados (debug/depuração) </h2>

    <h3>print_r()</h3>
    <pre>
    <?=print_r($artistas)?>
    </pre>
    
    <h3>var_dump()</h3>
    <pre>
    <?=var_dump($artistas)?>
    </pre>
</body>
</html>