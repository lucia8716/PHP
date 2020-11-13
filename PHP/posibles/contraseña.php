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
    $mayus;
    $minus;
    $caracter;
    $numero;
    $cociente;
    $resto;
    $sumares;

    function formulario()
    {

        echo '<form method="POST" action="contraseña.php">

Seleciona los caracteres que quieres utilizar
<br />
<input type="checkbox" name="check1">A - Z
<br />
<input type="checkbox" name="check2">a - z
<br />
<input type="checkbox" name="check3">0-9
<br />
<input type="checkbox" name="check4">?!*-_.%$/
<br />
Numero de caracteres <input type="text" name="num" > 
<br />
<input type="submit" name="numeros" value="numeros"/>
</form>';
    }


    function Controlygenerarcontrasenya()
    {

        global $n;
        global $mayus;
        global $minus;
        global $caracter;
        global $numero;
        global $cociente;
        global $resto;
        global $sumares;

        if ($mayus == 1 && $minus == 1) {

            $resto = $n % 2;
            $cociente = $n / 2;
            $sumares = $resto + $cociente;
        } else {
            # code...
        }
    }


    function generarcontraseña()
    {
        global $n;
        global $mayus;
        global $minus;


        if ($mayus == 1 && $minus == 1) {

            $resto = $n % 2;
            $cociente = intdiv($n, 2);
            $sumares = $resto + $cociente;
            $numerosumares = ($n - $sumares) - 1;


            echo $resto;
            echo "</br>";
            echo $sumares;
            echo "</br>";
            echo $cociente;
            echo "</br>";
            echo $numerosumares;
            echo "</br>";
            echo rand(1 * pow(10, $numerosumares), (1 * (pow(10, $numerosumares + 1) - 1)));
            echo "Mario";
        }
    }










    function seleccioncheck()
    {

        if (isset($_REQUEST['check1'])) {

            global $mayus;
            $mayus++;
        }

        if (isset($_REQUEST['check2'])) {
            global $minus;
            $minus++;
        }

        if (isset($_REQUEST['check3'])) {

            global $numero;
            $numero++;
        }

        if (isset($_REQUEST['check4'])) {

            global $caracter;
            $caracter++;
        }

        if (isset($_POST['numeros'])) {

            global $n;

            $n = $_POST['num'];
        }
    }



    if (!isset($_POST['numeros'])) {
        formulario();
    } else {

       if(isset($_POST['check1'])||isset($_POST['check2'])||isset($_POST['check3'])||isset($_POST['check4'])){

if (($_POST['numeros']>=6)&&($_POST['numeros']<=16)) {
    generarcontraseña();
} elseif {
    controldetamayo();
}else{

 





       
    }

    ?>


</body>

</html>