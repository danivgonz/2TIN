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


    $string = "O carnaval ta chegando!";

    // Função que conta o número de caracteres da string
    echo strlen($string);
    // string lenght

    br();

    // Função que converte todos os caracteres para maiúsculo
    echo strtoupper($string);

    br();

    // Função que converte todos os caracteres para minúsculo
    echo strtolower($string);

    br();

    // Função que verifica se na string tem um caracter
    if (!strstr($string, '!')) {
      echo "Não tem ponto de exclamação";
    } else{
      echo "Tem ponto de exclamação";
    }
 ?>

  </body>
</html>
