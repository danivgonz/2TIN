<!DOCTYPE html>
<html lang="pt" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>PHP - Blank - Teste</title>
  </head>
  <body>

    <?php

      if (isset($_POST['enviar'])) {
        $usuario = $_POST['usuario'];
        $senha = $_POST['senha'];
        // if ($usuario && $senha) {
        //   echo "Seja bem vindo " . $usuario;
        //   echo "<br>";
        //   echo "Sua senha é: " . $senha;
        // }else{
        //   echo "Preencha os campos!";
        // }

        $nomes = ['teste', 'daniela'];

        if (strlen($usuario) < 5) {
          echo "Digite um usuário maior!";
        }

        if (strlen($usuario) > 12) {
          echo "Digite um usuário menor!";
        }

        if (!in_array($usuario, $nomes)) {
          echo "Você não tem permissão";
        } else {
          echo "Bem vindo " . $usuario;
        }

      }
    ?>

  </body>
</html>
