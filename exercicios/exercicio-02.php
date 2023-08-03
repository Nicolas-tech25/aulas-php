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
            color: aliceblue;
            font-family: 'VT323', monospace;
            font-size: 1.4rem;
            background-image: url(../exercicios/the-matrix-digital-rain.jpg);
            background-attachment: fixed;
            background-size: cover;
        }
        h1{
            font-family: 'Tektur', cursive;
            color: dodgerblue;
            text-shadow: 5px white;
        }
        h2{
            font-family: 'Tektur', cursive;
            color: dodgerblue;
        }
        .box{
            background-color: darkgoldenrod;
            width: 45%;
            height: 280px;
            border-radius: 20px;   
            text-align: center;
        }
        p{
            text-align: justify;
            position: relative;
            left: 24%;
        }
        .box2{
            background-color: darkgoldenrod;
            width: 45%;
            height: 280px;
            border-radius: 20px;  
            text-align: center; 
        }
        .area{
            display: flex;
            gap: 10px;
            justify-content: center;
        }
        span{
            color: blueviolet;
        }
        
    </style>
</head>
<body>
    <h1>Exercício 02 👾👾</h1>
    <hr>

    <?php
    $pessoa1 = [
        "Nome" => "Nicolas",
        "Email" => "Corinthians@gmail.com",
        "Senha" => "031212",
        "Idade" => 18,
        "Sexo" => "Masculino",
        "Cidade" => "São Paulo",
     ];

     $pessoa2 = [
        "Nome" => "Carolina",
        "Email" => "carol@gmail.com",
        "Senha" => "251204",
        "Idade" => 18,
        "Sexo" => "Feminino",
        "Cidade" => "São Paulo",
     ];
    ?>

    
    <section class="area">
        <article class="box">
            <h2>Usuário 01 👽</h2>
            <p>Nome do Usuário: <span><?=$pessoa1["Nome"]?></span></p>
            <p>Email: <span><?=$pessoa1["Email"]?></span></p>
            <p>Idade: <span><?=$pessoa1["Idade"]?></span></p>
            <p>Sexo: <span><?=$pessoa1["Sexo"]?></span></p>
        </article>
        <article class="box2">
            <h2>Usuário 02 👩‍💻</h2>
            <p>Nome do Usuário: <span><?=$pessoa2["Nome"]?></span></p>
            <p>Email: <span><?=$pessoa2["Email"]?></span></p>
            <p>Idade: <span><?=$pessoa2["Idade"]?></span></p>
            <p>Sexo: <span><?=$pessoa2["Sexo"]?></span></p>
        </article>
    </section>
</body>
</html>