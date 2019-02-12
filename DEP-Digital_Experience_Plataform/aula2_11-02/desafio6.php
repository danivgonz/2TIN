<!DOCTYPE html>
<html lang="pt" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>PHP</title>
  </head>
  <body>

<?php

    function sortear(){
        for ($i=0; $i < 6; $i++) { 
           $megasena[] = rand(1, 60);
        }

        sort($megasena);
        implode(' ', $megasena);
        return print_r($megasena);
    }

    sortear();

//    print_r($megasena);


?>

  </body>
</html>
