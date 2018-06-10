<!doctype html>
<html class="no-js" lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
   
    <title>Foundation for Sites</title>
  </head>
  <body>
          <form action="rezultat.php" method="request">
                <label for="broj1">Input Label</label>
                <input id="broj1" name="broj1" type="text"  />

                <label>Input label
                    <input name="broj2" type="text" />
                </label>
               
               
                  <input type="submit" class="button" value="Odradi" />
               
          </form>
      
      <?php //print_r($_GET); 
      
      $rez = $_REQUEST["broj1"] + $_REQUEST["broj2"];

      echo $rez;
      ?>
  </body>
</html>
