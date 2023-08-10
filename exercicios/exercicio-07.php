<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POST Exercício 07</title>
</head>
<body>
    <h1 class="text-center">Mercadão</h1>
    <?php

    $fabricantes = ["Nike","Lacoste","Armani","Thommy"];

  if($_SERVER["REQUEST_METHOD"] === "POST"){
    if(empty($_POST["produto"]) || empty($_POST["preco"])){ ?>
        <p>Você deve preencher nome e preço</p>
        <p><a href="formulario.html">Voltar</a></p>
    
        <?php } else{
            $produto = filter_var($_POST['produto'], FILTER_SANITIZE_SPECIAL_CHARS);
            $fabricante = filter_var($_POST['fabricante'], FILTER_SANITIZE_SPECIAL_CHARS);
            $preco = filter_var($_POST['preco'], FILTER_SANITIZE_NUMBER_INT);
            $descricao = filter_var($_POST[ 'descricao'], FILTER_SANITIZE_SPECIAL_CHARS);  
            $disponibilidade = isset($_POST['disponibilidade']) ? $_POST['disponibilidade'] : "Escolha uma opção";
        ?>
        <ul>
            <li>Nome do produto: <?=$produto?></li>
            <li>Fabricante: <?=$fabricante?></li>
            <li>Preço: <?=number_format($preco, 2,'.', '')?></li>
            <li>Disponibilidade: <?=$disponibilidade?></li>
            <li>Descrição: <?=$descricao?></li>
        </ul>
    <?php
        } 
  }
    ?>

</body>
</html>