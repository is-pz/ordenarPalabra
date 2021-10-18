<?php
//Reciben las palabras
$palabras = $_POST["palabras"];
$palabrasOrdenadas = $_POST["palabrasOrdenada"];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultados</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
      crossorigin="anonymous"
    />
</head>
<body>
    <div class="container-fluid row">
        <div style="text-align: center;">
            <h1>Resultados</h1>
        </div>
        <div class="">
            <table class="table table-striped table-hover col-lg-8"">
                <thead>
                    <tr>
                        <th class="col-lg-4" >Palabras Ingresadas</th>
                        <th class="col-lg-4" >Palabras Correctas</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Imprime las palabras ordenadas y desordenadas -->
                    <?php
                        for($i = 0; $i<count($palabras); $i++){?>
                            <tr>
                                <td class="col-lg-4" style="border: 1px solid;"><?php echo $palabras[$i];?> 
                                    <!-- Verifica que las palabras esten correctas y agrega un icono para saber si es correcta o incorrecta -->
                                    <?php if($palabras[$i] == $palabrasOrdenadas[$i]){?> 
                                        <i class="fa fa-check"> Correcto</i> <?php }else{ ?> 
                                        <i class="fa fa-times"> Incorrecto</i> 
                                    <?php } ?>
                                </td>
                                <td class="col-lg-4" style="border: 1px solid;"><?php echo $palabrasOrdenadas[$i]; ?></td>
                            </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
      crossorigin="anonymous"
    ></script>
    <script src="https://kit.fontawesome.com/465ed6b289.js" crossorigin="anonymous"></script>
</body>
</html>