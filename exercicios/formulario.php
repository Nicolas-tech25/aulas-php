<?php require "../exercicios/exercicio-07.php"?>
<!-- Inicio com Bootstrap -->
<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  </head>
  <body class="bg-black">

    <hr>
    
    <!-- Formulário com nome do produto, fabricante, preço, disponibilidade e descrição -->

    <article class="container-fluid  p-3 mb-2 bg-white text-black py-2">

    <form action="exercicio-07.php" method="post">

            <p>
                <label for="produto">Nome do produto: </label>
                <input required type="text" name="produto" id="produto" class="rounded w-25">
            </p>

            <p>
                <label for="fabricante">Fabricante: </label>
                <select name="fabricante" id="fabricante" class="rounded ">
                    <option value="#">Escolha:</option>
                    <?php
                        foreach($fabricantes as $fabricante){?>

                            <option value="<?=$fabricante?>"><?=$fabricante?></option> 

                    <?php } ?>
                    

                </select>
            </p>

            <p>
                <label for="preco">preco: </label>
                <input required  type="number" name="preco" id="idade" min="100" max="10000" class="rounded w-50">
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
                <textarea name="descricao" id="descricao" cols="30" rows="10" class="rounded "></textarea >
            </p>

            <button type="subimit" class="btn bg-black text-white d-flex m-auto">Enviar</button>
        </form>
    </article>


    <!-- Fim Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>