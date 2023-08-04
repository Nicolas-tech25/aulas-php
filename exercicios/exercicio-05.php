<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 05</title>
    <style>
        .aprovado{color: green;}
        .reprovado{color: red;}
    </style>
</head>
<body>
    <?php
       $nota01 = 0;
       $nota02 = 0;

       function calculo(int $nota01,$nota02){
        $media = ($nota01 + $nota02)/2;
        return $media;
    }?>

       <p>Média final: <?=calculo(7,4)?></p>
       
       <?php

       if (calculo($nota01,$nota02) > 7) {?>

         <p>echo e você foi <b class="aprovado">APROVADO</b> </p>
       <?php
       }else {?>

        <p>e você foi <b class="reprovado">REPROVADO</b></p>

    <?php
    }
    ?>

</body>
</html>