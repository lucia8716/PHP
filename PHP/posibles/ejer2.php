<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php

    $n;
    $r;


    function formulario()
    {

        echo '<form method="POST" action="ejer2.php">

Añade un numero
<br />
<input type="input" name="entrada">
<br />
<br />
<input type="submit" name="enviar" value="enviar"/>
</form>';
    }


    function restojer()
    {

        if (isset($_POST['enviar'])) {

            global $n;
            global $r;
            $n = $_POST['entrada'];

            $r = 0;
            $r = $n + $r;
            for ($i = 0; $i < $n; $i++) {
                $r = $n + $r;
                $n--;
            }
            echo  "El resultado de sumar todos los numeros anteriores es " . $r;
        }
    }





    if (!isset($_POST['enviar'])) {
        formulario();
    } else {

        restojer();
    }






    ?>

</body>

</html>