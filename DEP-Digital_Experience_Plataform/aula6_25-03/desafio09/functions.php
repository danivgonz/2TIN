<?php include 'db.php';  ?>

<?php
  function mostraDados(){
    global $connect;
    $query = "SELECT * FROM pokemons";
    $resultado = mysqli_query($connect, $query);
    while($row = mysqli_fetch_assoc($resultado)){
      $id = $row['id'];
      echo "<option value='$id'>$id</option>";
    }
  }

  function atualizaPokemon(){
    global $connect;
    $nome = $_POST['nome'];
    $tipo = $_POST['tipo'];
    $hp = $_POST['hp'];
    $id = $_POST['id'];
    // QUERY, PARA ATUALIZAR OS DADOS DE ACORDO COM OS NOMES DAS MINHAS VARIÁVEIS:
    $query = "UPDATE pokemons SET ";
    $query .= "name = '$nome', ";
    $query .= "type = '$tipo', ";
    $query .= "hp = '$hp' ";
    $query .= "WHERE id = $id";
    // FUNÇÃO QUE EXECUTA QUERIES
    $resultado = mysqli_query($connect, $query);
    // VALIDAÇÃO
    if(!$resultado){
      echo "Não deu certo a inclusão";
    } else {
      echo '<div class="alert alert-success" role="alert">Dados atualizados com sucesso</div>';
    }
  }


  function inserir(){
        global $connect;
        $nome = $_POST['nome'];
        $tipo = $_POST['tipo'];
        $hp = $_POST['hp'];

        // QUERY, PARA INSERIR OS DADOS DE ACORDO COM OS NOMES DAS MINHAS VARIÁVEIS:
        $query = "INSERT INTO pokemons(name, type, hp) VALUES ('$nome', '$tipo', '$hp')";

        // FUNÇÃO QUE EXECUTA QUERIES
        $resultado = mysqli_query($connect, $query);

        // VALIDAÇÃO
        if(!$resultado){
          echo "Não deu certo a inclusão";
        } else {
          echo "<script>alert('Dados criados com sucesso')</script>";
        }

  }

  function lePokemonFogo(){
    global $connect;
    $query = "SELECT * FROM pokemons WHERE type='fogo'";
    $resultado = mysqli_query($connect, $query);
    while($row = mysqli_fetch_assoc($resultado))
    {
      print_r($row);
    }
  }

  function deletaPokemon(){
    global $connect;
    $id = $_POST['id'];
    $query = "DELETE from pokemons WHERE id = $id";
    $resultado = mysqli_query($connect, $query);
    // VALIDAÇÃO
    if(!$resultado){
      echo "Não deu certo a exclusão";
    } else {
      echo "Dados apagados com sucesso";
    }

  }



 ?>
