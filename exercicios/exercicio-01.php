<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exercicio-01 ⚔️⚔️</title>
    <style>
    body{
        background-color:black;
        color:white;
        font-family:"verdana";
    } 
    h1{
        color:dodgerblue;
        background-color: white;
        border:5px solid white;
        width:320px;
    }
    .teste{
        color:dodgerblue;  
    }
    </style>
</head>
<body>
    <h1>Exercício 01  🦾🧠</h1>
    <hr>

    <?php

        //$data = "18/07/2023";
        //Definindo fuso-horário
        date_default_timezone_set("America/Sao_Paulo");
        $data = date("d/m/Y");
        $hora = date("H:i:s");
        $nome = "Nicolas";
        $curso = "Téc. em informática para internet";
        $carga_horaria = 1000;
        $limite_faltas = ($carga_horaria)/4;
        echo "Data: ".$data;
        echo "<br><br>";
        echo "Hora: ".$hora;
        ?>

    <p>O aluno <spam class="teste"><?=$nome?> </spam>, está fazendo o curso <spam class="teste"><?=$curso?></spam></spam></p>

    <p>A carga horária é de <spam class="teste"><?=$carga_horaria?></spam> horas e o limite de faltas é de <spam class="teste"><?=$limite_faltas?></spam> faltas 👨‍💻👨‍💻</p>

    
</body>
</html>