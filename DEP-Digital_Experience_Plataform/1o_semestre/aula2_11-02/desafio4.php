<!DOCTYPE html>
<html lang="pt" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>PHP</title>
    <style>
        *{
            margin: 0;
            border: 0;
            padding: 0;
        }

        h1{
            font: 25px 'Century Gothic';
            font-weight: bold;
            margin-bottom: 10px;
        }

        p{
            font: 15px/20px 'Century Gothic';
            letter-spacing: 0.5px;
        }

        .container{
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            margin: 20px auto 0;
            width: 95%;
        }

        .item{
            width: 19%;
        }
    </style>

  </head>
  <body>

    <div class="container">
        <?php
            
            for ($i=1; $i <= 10; $i++) { 
                echo "<div class='item'>";
                echo "<h1>Tabuada do " . $i . "</h1>";
                for ($j=0; $j <= 10; $j++) { 
                    echo "<p>" . $i . " x " . $j . " = " . $i * $j . "</p>";
                }
                echo "<br><br>";
                echo "</div>";
            }

        ?>
    </div>

  </body>
</html>
