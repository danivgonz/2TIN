<!DOCTYPE html>
<html lang="pt" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>PHP</title>
  </head>
  <body>

<?php

    function converter($c){
        $f = ($c * 1.8) + 32;
        return $c . "°C equivale à " . $f . "°F";
    }

    echo converter(32);

 ?>

  </body>
</html>
