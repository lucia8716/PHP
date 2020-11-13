<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php


    function esPar($numero)
    {
        if ($numero == 1) {
            return false;
        } else if ($numero == 0) {
            return true;
        } else {
            $aux = $numero - 2;
            $retorno = esPar($aux);
            comprobar($aux);
            return $retorno;
        }
    }

    $num = 6;
    if (esPar($num) == true)
        echo $num . ' es par<br/>';
    else
        echo $num . ' es impar<br/>';

    function comprobar($numero)
    {

        echo 'el valor de $aux es: ' . $numero . '<br/>';
    }
    ?>
</body>

</html>