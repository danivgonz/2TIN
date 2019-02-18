<!DOCTYPE html>
<html lang="pt" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>PHP</title>
  </head>
  <body>
    <?php

      if (isset($_POST['enviar'])) {
        $usuario = $_POST['usuario'];
        $senha = $_POST['senha'];
        if ($usuario && $senha) {
          echo "Seja bem vindo " . $usuario;
          echo "<br>";
          echo "Sua senha é: " . $senha;
        }else{
          echo "Preencha os campos!";
        }

      }
    ?>

    <form action="formulario.php" method="post">
      <input type="text" name="usuario" placeholder="Usuário">
      <input type="password" name="senha" placeholder="Senha">

      <input type="submit" name="enviar">
    </form>
  </body>
</html>
