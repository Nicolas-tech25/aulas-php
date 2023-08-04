<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 05</title>
    <style>
        body{
            background-color: black;
            color: aliceblue;
            font-family: Verdana, Geneva, Tahoma, sans-serif;
        }
        .nota{color: darkorange;}
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
    }

    $calculo_da_média = calculo(7,5)
    ?>

    <?php
            function resultado($media){
                if ($media >= 7) {
                    return "<b class = 'aprovado'>Aprovado</b>";
                }else{
                    return "<b class = 'reprovado'>Reprovado</b>";
                }
            }
       ?>

       <p>Média final: <b class="nota"><?=$calculo_da_média?></b></p>
       <p>Situação: <?=resultado($calculo_da_média)?></p>
</body>
</html>