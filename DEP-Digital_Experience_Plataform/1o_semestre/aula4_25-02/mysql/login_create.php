<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>PHP</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>

    <?php
      if (isset($_POST['enviar'])) {
        // 4 parametros = rede(onde ta o banco), usuario, senha, nome do banco de dados
        $connect = mysqli_connect('localhost', 'root', 'labfiap$2018', 'exemplo');

        if ($connect) {
          // Teste de conexão
          // echo "eba! estamos conectados com o banco.";

          $username = $_POST['username'];
          $password = $_POST['password'];

          // Instrução SQL para inserir os dados de acordo com as variaveis
          $query = "INSERT INTO usuario(username, password) VALUES ('$username', '$password')";

          // Função que executa queries
          // 2 parametros = conexao, query
          $resultado = mysqli_query($connect, $query);

          // Validação
          if (!$resultado) {
            echo "não deu certo a inclusão";
          }else {
            echo "dados adicionados com sucesso";
          }


        } else {
          echo "vish! deu ruim.";
        }


      }

     ?>

     <div class="container">
       <div class="row">
         <div class="col-sm-6">
           <form action="login_create.php" method="post">
             <div class="form-group">
               <label for="username">Username:</label>
               <input type="text" class="form-control" name="username">
             </div>

             <div class="form-group">
               <label for="password">Password:</label>
               <input type="password" class="form-control" name="password">
             </div>

             <input type="submit" class="btn btn-primary" name="enviar" value="Enviar">
           </form>
         </div>
       </div>
     </div>
  </body>
</html>
