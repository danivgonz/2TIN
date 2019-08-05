<!DOCTYPE html>
<html lang="pt" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>PHP</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
<?php include "db.php"; ?>
<?php include "functions.php"; ?>
<?php
  if(isset($_POST['update'])){
    atualizaTabela();
  }
?>
<div class="container">
  <div class="col-sm-6">
    <form action="login_update.php" method="post">

      <div class="form-group">
        <label>Usuário</label>
        <input type="text" name="username" class="form-control">
      </div>

      <div class="form-group">
        <label>Senha</label>
        <input type="password" name="password" class="form-control">
      </div>

      <select name="id">
        <?php
          mostraDados();
        ?>
      </select>

      <input class="btn btn-primary" type="submit" name="update" value="ATUALIZAR">

    </form>
  </div>
</div>




  </body>
</html>
