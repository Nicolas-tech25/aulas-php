<?php require "../exercicios/exercicio-07.php"?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
    <link rel="stylesheet" href="../exercicios/CSS/estilo-07.css">
</head>
<body>

    <h1>Mercadão</h1>
    <hr>
    
    <!-- Formulário com nome do produto, fabricante, preço, disponibilidade e descrição -->

    <article class="container">

    <form action="exercicio-07.php" method="post">

            <p>
                <label for="produto">Nome do produto: </label>
                <input required type="text" name="produto" id="produto">
            </p>

            <p>
                <label for="fabricante">Fabricante: </label>
                <select name="fabricante" id="fabricante">
                    <option value="#">Escolha:</option>
                    <?php
                        foreach($fabricantes as $fabricante){?>

                            <option value="<?=$fabricante?>"><?=$fabricante?></option> 

                    <?php } ?>
                    

                </select>
            </p>

            <p>
                <label for="preco">preco: </label>
                <input required  type="number" name="preco" id="idade" min="100" max="10000">
            </p>

            <div>
                <p>Disponibilidade: <br></p>
                <input type="radio" name="disponibilidade" id="sim" value="sim">
                <label for="sim">Sim</label>
                <input type="radio" name="disponibilidade" id="nao" value="nao">
                <label for="nao">Não</label>
            </div>

            <!-- Texto da descrição: esta camisa prescisa ser embalada como de presente ao meu irmão!!! -->

            <p>
                <label for="descricao">descricao: </label> <br>
                <textarea name="descricao" id="descricao" cols="30" rows="10"></textarea>
            </p>

            <button type="submit" name="enviar" id = "enviar">Enviar</button>
        </form>
    </article>
</body>
</html>