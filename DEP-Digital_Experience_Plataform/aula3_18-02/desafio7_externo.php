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
        $email = $_POST['email'];
        $cidade = $_POST['cidade'];
        $estado = $_POST['estado'];
        $erro = FALSE;


        // Validação usuário
        if (strlen($usuario) < 5) {
          echo "Digite um usuário maior!";
          $erro = TRUE;
        }

        if (strlen($usuario) > 10) {
          echo "Digite um usuário menor!";
          $erro = TRUE;
        }

        // Validação Senha
        if (strlen($senha) < 4) {
          echo "Digite uma senha maior!";
          $erro = TRUE;
        }

        // Validação E-mail
        if (!strstr($email, "@")) {
          echo "Digite um email valido!";
          $erro = TRUE;
        }

        // Validação Estado
        if (strlen($estado) != 2) {
          echo "Digite um estado válido!";
          $erro = TRUE;
        }

        if ($erro == FALSE) {
          echo "Bem vindo " . $usuario . "!";
        }


      }
    ?>

  </body>
</html>
