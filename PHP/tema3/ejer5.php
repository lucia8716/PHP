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

function uno(){

        if (isset($_POST['numeros'])) {

            $numero1 = $_POST['num1'];

            return str_replace(" ", "-", $numero1);
        }

    }

function dos (){

$numero2=uno();

echo $numero2;


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