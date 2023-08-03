<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício</title>
    <style>
        body{
            background-color: black;
            color:blueviolet;
            font-family: Verdana, Geneva, Tahoma, sans-serif;
        }
        .teste{
            text-shadow: 0 0.1rem 0.7em #fff;  
            font-size: 2rem;
        }
    </style>
</head>
<body>
   <h1>Exercício 🤴🏿📘✏️</h1>
   <hr>
   
   <?php
    $salario = 1500;
    $salario_novo = 0;

    if ($salario < 1500) {
        $salario_novo = ($salario * 1.5);
        
    } elseif ($salario <= 3000) {
        $salario_novo = ($salario * 1.1);
    }elseif($salario > 3000) {
        $salario_novo = ($salario * 1.05);
    }else{
        echo "Não entendi...";
    }
    
   ?>

   <p class="teste">Salário atual: R$<?=$salario = number_format($salario, 2,'.', '')?> 🤧</p>
   <p class="teste">Salário novo: R$<?=$salario_novo = number_format($salario_novo, 2,'.', '')?> 🤑🤑</p>
</body>
</html>