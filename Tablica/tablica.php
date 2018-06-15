<?php
     $broj1 = isset($_GET["broj1"])? $_GET["broj1"]:0;
     $broj2 = isset($_GET["broj2"])? $_GET["broj2"]:0;
?>

<!doctype html>

<html lang="en">

<head>
    <meta charset="utf-8">

    <title>The HTML5 Herald</title>

    <link rel="stylesheet" href="stil.css">

    <!--[if lt IE 9]>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script>
  <![endif]-->
</head>

<body>
    <div class="forma">
        <form action="" method="get">
            Broj Redaka
            <br>
            <input type="text" name="broj1" />
            <br> Broj stupaca
            <br>
            <input type="text" name="broj2" />
            <br>
            <br>
            <input class="submit" type="submit" value="Ispiši" />
            <br>
        </form>
        <br>
    </div>

     <table class="tablica">
          <tbody> 
            <?php
            for($i=0;$i<$broj1;$i++)
            {
              echo "<tr>";
              for($j=0;$j<$broj2;$j++)
              {
                echo"<td>" . "x" . "</td>"; //+1 zato da ne ispisuje nule!
              }
            echo"</tr>";  
            }
            ?>
          </tbody>
      </table>


</body>

</html>