 <!DOCTYPE html>
 <html lang="pt-br">

 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loops</title>
 </head>

 <body>
    <h1>Estruturas de controle de repetição</h1>
    <hr>

    <h2>While (enquanto)</h2>
    <?php
      $i = 1;


      while ($i <= 5) {
      ?>

       <p>$i</p>
    <?php
         $i++;
      }
      ?>

    <h2>DO/WHILE (repita até)</h2>

    <?php
      $j = 1;
      do {
      ?>

       <div>
          <h3>Titulo...</h3>
          <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ipsa consectetur amet sit esse, accusamus aliquam in itaque neque quidem ea recusandae sed, facilis dolorem sunt voluptatum. Delectus atque velit explicabo.</p>
       </div>

    <?php
         $j++;
      } while ($j <= 10);

      ?>

    <h2>For (para)</h2>


    <!-- Variável de controle-->
    <?php
      for ($i = 1; $i <= 3; $i++) {
      ?>

       <p><code>i</code>Vale: <b><?= $i ?></b></p>

    <?php
      }
      ?>

    <h2>Exercício Meses</h2>

    <?php
      $m = 0;
      $meses = ["Janeiro", "Fevereiro", "Março", "Abril", "Maio", "Junho", "Julho", "Agosto", "Setembro", "Outubro", "Novembro", "Dezembro"];
      ?>
    <ol>
       <?php
         for ($m = 0; $m < 12; $m++) {
         ?>

          <li><?= $meses[$m] ?></li>

       <?php
         }
         ?>
    </ol>
    <!-- fim da lista -->
    <hr>

    <?php
      $alunos = ["Melissa", "Tanaka", "Zimbo", "Eduardo", "Kauê"];

      /*Função count() ou sizeof(), Literalmente conta a quantidade de elementos dentro de um array, retornando um número inteiro.*/

      $quantidade = count($alunos);

      for ($i = 0; $i < $quantidade; $i++) {
      ?>

       <p>Nome: <b><?= $alunos[$i] ?></b></p>

    <?php
      }
      ?>

    <hr>

    <h2>Foreach (para cada)</h2>

    <p>Útil e (mais fácil) para lidar com <code>arrays</code>.</p>

    <ol>
      <?php foreach($meses as $mes){?>
         <li><?=$mes?></li>
   
      <?php } ?>

    </ol>

    <h3>Manipulando arrays associativos</h3>

    <?php
      // Array associativo
      $clubes = [
         "Corinthians" => "Timão",
         "São Paulo" => "bambi",
         "Palmeiras" => "Porco",
         "Santos" => "Sereia"
      ];

      foreach($clubes as $clube => $apelido){
   ?>

         <p>O <?=$clube?> é conhecido como <?=$apelido?>.</p>
         
   <?php
      }
   ?>

      <h2>Loop com Matriz</h2>
      <hr>

   <?php
   $planos_de_estudos = [
      ["HTML","CSS","JS"], // 0
      ["REACT","REACT NATIVE"] // 1
   ];   
   
   // USANDO for aninhado
   for($linha = 0; $linha < count($planos_de_estudos); $linha++){
      for($coluna = 0; $coluna < count($planos_de_estudos[$linha]); $coluna++){
   ?>

   <p><b><?=$planos_de_estudos[$linha][$coluna]?></b></p>

   <?php
   }
   }
   ?>

   <hr>

   <?php
   // Usando forech
   foreach($planos_de_estudos as $linha){
      foreach($linha as $coluna){
   ?>

         <p><i><?=$coluna?></i></p>

   <?php
   }
}
   ?>
   <hr>

   <?php
      $clientes = [
         [
            "nome" => "Chaves",
            "idade" => 18
         ],
         [
            "nome" => "Chapolin",
            "idade" => 25
         ],
         [
            "nome" => "Chiquinha",
            "idade" => 18
         ]
      ];

      foreach ($clientes as $cliente) {
   ?>
     
         <p>Nome: <?=$cliente["nome"]?></p>
         <p>Idade: <?=$cliente["idade"]?></p>

   <?php
      }
   ?>
 </body>

 </html>