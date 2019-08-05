
<?php include "db.php"; ?>
<?php include "functions.php"; ?>
<?php
  if(isset($_POST['update'])){
    atualizaPokemon();
  }
?>

<?php include "header.php"; ?>
<div class="container">
  <div class="col-sm-6">
    <form action="login_update.php" method="post">
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

      <select name="id">
        <?php
          mostraDados();
        ?>
      </select>

      <input class="btn btn-primary" type="submit" name="update" value="ATUALIZAR">

    </form>
  </div>
</div>


<?php include "footer.php"; ?>
