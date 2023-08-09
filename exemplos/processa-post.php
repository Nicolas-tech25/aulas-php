<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Processa POST</title>
</head>
<body>
    <h1>Exemplo usando POST</h1>
    <hr>
    <p>Receber e processar dados via <b>POST</b>.</p>

    <?php
    // Verificar se os campos: nome e email estão vazios
    if (empty($_POST["nome"]) || empty($_POST["email"])) {
    ?>
        <p>Você deve preencher nome e e-mail</p>
        <p><a href="10-formulario.html">Voltar</a></p>

    <?php
    } else {
        // $nome = filter_input(INPUT_POST , "nome", FILTER_SANITIZE_SPECIAL_CHARS);
        $nome = filter_input(INPUT_POST , "nome", FILTER_SANITIZE_SPECIAL_CHARS);
        $email = filter_input(INPUT_POST , "email", FILTER_SANITIZE_SPECIAL_CHARS);
        $idade = filter_input(INPUT_POST , "idade", FILTER_SANITIZE_NUMBER_INT);

        $mensagem = filter_input(INPUT_POST , "mensagem", FILTER_SANITIZE_SPECIAL_CHARS);
        // Se houver interesses (ou seja, foi selecionado pelo menos 1)
        // guarde na variável $interesses. Caso contrário, guarde um array vazio.

        //$interesses = $_POST["interesses"] ?? [] 
        $interesses = filter_var_array(
            $_POST["interesses"] ?? [],
            FILTER_SANITIZE_SPECIAL_CHARS
        );
    }
        ?>
            <h2>Dados</h2>
            <ul>
                <li>Nome: <?= $nome ?></li>
                <li>E-mail: <?= $email ?></li>
                <li>Idade: <?= $idade ?></li>
                
                <!-- Versão  2: acessando cada interesse existente no array usando loop  -->
                <li>Interesses: <?= implode(", ", $interesses) ?></li>
                
                <!-- <li>Interesses: 
                    <ul>
                        <php foreach($interesses as $interesse){?>
                            <li><=$interesse?></li>
                        <php } ?>
                    </ul>
                </li> -->

                <li>Mensagem: <?=$mensagem?></li>
            </ul>       
</body>
</html>