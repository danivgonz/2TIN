<!DOCTYPE html>
<html lang="pt" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>PHP</title>
  </head>
  <body>

<?php

  // Desafio 3 - Média Final 

  // Notas 
  $nota_nac = 7;
  $nota_am = 8.7;
  $nota_ps = 6.2;

  // Pesos
  $peso_nac = 0.2;
  $peso_am = 0.3;
  $peso_ps = 0.5;

  $nota_final = ($nota_nac * $peso_nac) + ($nota_am * $peso_am) + ($nota_ps * $peso_ps);

  // Faltas
  $total_aulas = 70;
  $total_faltas = 18;

  $porcentagem_permitida = 0.2;

  $faltas_permitidas = $total_aulas * $porcentagem_permitida;

  if ($nota_final >= 6 && $total_faltas <= $faltas_permitidas) {
    echo "Sua nota foi $nota_final. Parabéns, você foi aprovado!";
  } elseif ($nota_final >= 6) {
    echo "Sua nota foi $nota_final, mas você foi reprovado por faltas.";
  } else {
    echo "Sua nota foi $nota_final, você foi reprovado.";
  }
?>

  </body>
</html>
