<?php

$palabras = array("sol", "luna", "cielo");

$palabrasDesordenadas = array();

for($i = 0; $i < count($palabras); $i++){
    $palabrasDesordenadas[$i] = str_shuffle($palabras[$i]);
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Ordena la palabra</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
      crossorigin="anonymous"
    />
  </head>
  <body>
    <div class="container-fluid">
      <div class="row" style="text-align: center;">
          <h1>Ordena las palabras</h1>
      </div>
      <div class="row offset-5">
          <form action="./analisis.php" method="POST">
            <?php for($i = 0; $i<count($palabras); $i++){?>
                  <input type="hidden" name="palabrasOrdenada[<?php echo $i ?>]" value="<?php echo $palabras[$i]; ?>">
            <?php } ?>
            <?php
              for($i = 0; $i<count($palabras); $i++){?>
                    <div class="form-group" style="margin: auto;">
                      <label for="palabra<?php echo $i?>"><?php  echo $palabrasDesordenadas[$i]; ?></label>
                      <input type="text" name="palabras[<?php echo $i?>]" />
                    </div>
              <?php } ?>
            <button class="btn btn-success mt-2" type="submit">Enviar</button>
          </form>
      </div>
    </div>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
