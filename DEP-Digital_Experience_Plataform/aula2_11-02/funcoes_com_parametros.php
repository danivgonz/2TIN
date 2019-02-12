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

    function somar($x, $y) {
        return $x . " + " . $y . " = " . ($x + $y);
    }

    function subtrair($x, $y) {
        return $x . " - " . $y . " = " . ($x - $y);
    }

    function multiplicar($x, $y) {
        return $x . " x " . $y . " = " . ($x * $y);
    }

    function dividir($x, $y) {
        return $x . " / " . $y . " = " . ($x / $y);
    }

    echo somar(2, 5);
    br();
    echo subtrair(15, 5);
    br();
    echo multiplicar(20, 5);
    br();
    echo dividir(10, 5);

 ?>

  </body>
</html>
