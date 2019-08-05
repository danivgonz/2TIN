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

    function digaAlgo() {
        echo "Ontem o Corinthians perdeu!";
    }

    digaAlgo();
 
    br();

    function calculadora() {
        echo 451 + 562;
    }

    calculadora();

    br();
    br();

    function init(){
        calculadora();
        br();
        digaAlgo();
    }

    init();
 ?>


  </body>
</html>
