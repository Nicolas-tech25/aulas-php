<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funções</title>
</head>
<body>
    <h1>Criando e usando funções</h1>
    <hr>

    <h2>Funções como procedimento ou sub-rotina</h2>

    <?php
        function dados_Autor(){
            echo "<div>";
            echo "<p> Nicolas Oliveira </p>";
            echo "<p><a href = '' >ni.oliveiraamorim.25@gmail.com</a></p>";
            echo "</div>";
        }
    ?>

    <section>
        <h3>Chamada da sub-rotina/procedimento</h3>

        <?=dados_Autor()?>
        
        <article>
            <h4>Outra chamada</h4>
            <?=dados_Autor()?>
        </article>

        <h2>Função com retorno de dados</h2>
        
        <?php
        
            function dados_curso(){
                return "téc. informática para internet";
            }
        ?>

        <p>Estamosno curso de <?=dados_curso()?></p>
        <p><?=dados_curso()?> é ministrado no Senac Penha</p>
    </section>

    <h2>Função com parâmetros (ou argumentos)</h2>
    
    <?php
    
        function soma($valor1,$valor2,$valor3){
            $total = $valor1 + $valor2+ $valor3;
            return $total;
        }
    
    ?>
    <p>Resultado 1: <?=soma(10,20,5)?></p>
    <p>Resultado 2: <?=soma(20,20,5)?></p>

    <?php
        $resultado3 = soma(500,480,700);
    ?>

    <p>Resultado 3: <?=$resultado3?></p>
    <?php if($resultado3 > 100){?>

        <p>Vinicius foi demitido.</p>
    
    <?php
}?>

    <?php if(soma(2,3,10) >=10 ){
    ?>
        <p>Kaue reprovado!!!</p>

    <?php
    }
    ?>

    <?php 
        function saudacao($mensagem, $pessoa = "fulano(a)"){
            return "Olá, $mensagem $pessoa!";
        }
    ?>

    <p><?=saudacao("bom dia", "Melissa")?></p>
    <p><?=saudacao("boa tarde", "Tanaka")?></p>
    <p><?=saudacao("boa noite", "Neymar")?></p>
</body>
</html>