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
        $connect = mysqli_connect('localhost', 'root', 'labfiap$2018', 'desafio8');

        if (!$connect) {
            die("vish! deu ruim.");
        }

        $username = $_POST['username'];
        $password = $_POST['password'];
        $email = $_POST['email'];

        $query = "INSERT INTO usuario(username, password, email) VALUES ('$username','$password','$email')";

        $resultado = mysqli_query($connect, $query);


        if (!$resultado) {
          echo "não deu certo a inclusão";
        }else {
          echo "dados adicionados com sucesso";
        }
      }
     ?>

     <div class="container">
       <div class="col-sm-6">
         <form action="create.php" method="post">
           <div class="form-group">
             <label for="username">Username:</label>
             <input type="text" class="form-control" name="username">
           </div>
           <div class="form-group">
             <label for="password">Password:</label>
             <input type="password" class="form-control" name="password">
           </div>
           <div class="form-group">
             <label for="email">Email:</label>
             <input type="email" class="form-control" name="email">
           </div>

           <input type="submit" class="btn btn-primary" name="enviar" value="Enviar">
         </form>
       </div>
     </div>
  </body>
</html>
