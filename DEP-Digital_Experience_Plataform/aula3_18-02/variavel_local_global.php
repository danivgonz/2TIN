<!DOCTYPE html>
<html lang="pt" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>PHP - Blank - Teste</title>
  </head>
  <body>

<?php

  // TESTANDO
  // $variavel_externa = "fora";
  //
  // function teste()
  // {
  //   $variavel_externa = "dentro";
  // }
  //
  // echo $variavel_externa;
  //
  // echo "<br>";
  //
  // teste();
  //
  // echo $variavel_externa;


  $variavel_externa = "fora";

  function teste(){
    global $variavel_externa;

    $variavel_externa = "dentro";
    $variavel_interna = "local";
  }

  echo $variavel_externa;

  echo "<br>";

  teste();

  echo $variavel_externa;
 ?>

  </body>
</html>
