<?php
/* Fazendo a inclusão de um arquivo de recursos */
include "recursos.php";
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modularização e inclusão de recursos</title>
    
</head>
<body>
    <h1>Modularização e inclusão de recursos</h1>
    <hr>

     <h2><?=ESCOLA?></h2>
     <p>Estamos fazendo curso de: <?=$curso?></p>

     <ol>
        <li><?$tecnologias?></li>
     </ol>
    <ul>
        <?php foreach ($tecnologias as $tecnologia){
        ?>
        <li><?$tecnologia?></li>
        <?php
        }
        ?>
    </ul> 
    
    <P>O aluno fulano tem 20 anos e é <?=verificaIdade(20)?> de idade.</P>

    <article>
        <h2>Título qualquer...</h2>
        <?php include "textos.php"?>
    </article>

    <section>
        <?php include "lista.html"?>
    </section>


</body>
</html>