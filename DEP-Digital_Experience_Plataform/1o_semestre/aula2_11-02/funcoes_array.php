<!DOCTYPE html>
<html lang="pt" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>PHP</title>
  </head>
  <body>

<?php

  function br(){
    echo "<br>";
  }

  $lista = [3, 54, 6565, 89, 54, 12, 5];

  // Função que exibe o maior número de array
  echo max($lista);

  br();

  // Função que exibe o menor número de array
  echo min($lista);

  br();

  // Função que ordena o array em ordem crescente
  sort($lista);


  // Função que imprime array inteiro
  print_r($lista);
 ?>

  </body>
</html>
