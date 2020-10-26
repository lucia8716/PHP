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
        echo '<form method="POST" action="ejer3.php">
    Primer numero <input type="text" name="num1" > 
    <br />
    Segundo numero <input type="text" name="num2" > 
    <br />
    <input type="submit" name="numeros" value="calcular"/>
    </form>';
    }


    function calcular()
    {

        if (isset($_POST['numeros'])) {

            $numero1 = $_POST['num1'];
            $numero2 = $_POST['num2'];


            if ($numero1 > $numero2) {

                echo "el numero mayor es" . " " . $numero1;
            } else {
                if ($numero1 == $numero2) {
                    echo "son numeros iguales ";
                } else {
                    echo "el numero mayor es" . " " . $numero2;
                }
            }
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