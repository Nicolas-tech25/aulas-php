<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 04</title>

    <style>
        body{background-color: cornflowerblue;}
        table{
            margin: auto;
            transition: 2s;
            transform: scale(1);
        }
        table{background-color: black;}
        table tr:nth-child(even){
            background-color: lemonchiffon;
        }
        table tr:nth-child(odd){
            background-color: gold;
        }
        table th{
            background-color: orange;
        }
        .container:hover{
            transform: scale(2);
        }

    </style>
</head>

<body>
    <?php
    
    
    $linguagens = [
        "HTML" =>  "Estruturação",
        "CSS" => "Estilos",
        "JS" => "Comportamentos",
        "PHP" => "Back-End",
        "SQL" => "Manipulação de dados",
        "JAVA" => "Softwares",
    ];
    ?>
    
    <article class="container">

        <table>
            <tr>
            <th>ID </th>
            <th> Linguagem </th>
            <th> Descrição </th>
        </tr>
            <?php
            $l = 0;
        foreach($linguagens as $linguagem => $descricao){
            $l++;
            ?>
        
            <tr>
                <td><?=$l?></td>
                <td> <?=$linguagem?></td>
                <td><?=$descricao?></td>
            </tr>
            <?php
        }
        ?>
        </table>
    </article>
</body>

</html>