<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sintaxe-geral</title>
    <style>
        p{font-family:"verdana";}
        .destaque{text-transform:uppercase;}
    </style>
</head>
<body>
    <h1>Trabalhando com PHP</h1>
    <hr>
    <?php
        // Geração de texto (string)
        echo "Hoje tem <spam style='color:red'>CORINTHIANS</spam>, VAMO <spam style='color:red'>TIMÃO</spam>";
        echo "<p class='destaque'>Hoje tem CORINTHIANS, VAMO TIMÃO 🦅🦅</p>";

        // Geração de texto estruturado (com tags, atributos)
        echo "<h2>Gerando HTML através do PHP</h2>";

        // CSS inline (atenção ás formas de uso das aspas)
        echo "<p style=\"color:brown\">O Vinícius está reprovado.</p>";
        echo "<p style='color:blue'>O Vinícius está reprovado.</p>";
        echo '<p style="color:orange">O Vinícius está reprovado.</p>';
    ?>

    <script>
        let destaque = document.querySelector("p.destaque");
        console.log(destaque);
    </script>
</body>
</html>