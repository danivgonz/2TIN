<!DOCTYPE html>
<html lang="pt" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>PHP</title>
  </head>
  <body>

<?php

    function sortear(){
      $n = array();

      while (count($n) < 6) {
        $v = rand(1, 60);
        $n[$v] = $v;
      }

      sort($n);
      echo "Os números da mega-sena são: " . implode(" - ", $n);
    }

     sortear();


?>

  </body>
</html>
