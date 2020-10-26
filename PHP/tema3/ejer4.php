<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php

    function formulario()
    {
        echo '<form method="POST" action="ejer4.php">
    Primer numero <input type="text" name="num1" > 
    <br />
    <input type="submit" name="numeros" value="calcular"/>
    </form>';
    }


    function calcular()
    {

        if (isset($_POST['numeros'])) {

            $numero1 = $_POST['num1'];

            echo "el  cuadrado de $numero1 es ";
            echo pow($numero1, 2);
            echo "</br>";
            echo "</br>";
            echo "el  cubo de $numero1 es ";
            echo pow($numero1, 3);
        }
    }


    if (!isset($_POST['numeros'])) {
        formulario();
    } else {
        calcular();
    }


    ?>

</body>

</html>