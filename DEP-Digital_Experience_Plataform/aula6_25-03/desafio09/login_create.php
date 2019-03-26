<?php
  include "db.php";
  include "functions.php";
  if(isset($_POST['enviar'])){
    inserir();
}
?>

<?php include "header.php"; ?>

<div class="container">
  <div class="col-sm-6">
    <form action="login_create.php" method="post">
      <div class="form-group">
        <label>Nome</label>
        <input type="text" name="nome" class="form-control">
      </div>
      <div class="form-group">
        <label>Tipo</label>
        <input type="text" name="tipo" class="form-control">
      </div>
      <div class="form-group">
        <label>HP</label>
        <input type="range" name="hp" id="hp" class="custom-range" onchange="showValue(this.value)" min="0" max="100" value="0" step="1">
        <span id="range-text">0</span>

        <script type="text/javascript">
          function showValue(newValue){
            document.getElementById('range-text').innerHTML = newValue;
          }
        </script>
      </div>

      <input class="btn btn-warning" type="submit" name="enviar" value="Enviar">

    </form>
  </div>
</div>

<?php include "footer.php"; ?>
