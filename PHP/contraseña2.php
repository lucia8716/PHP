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

    $mayusculas = "ABCDEFGHIJKLMNOPQRSTUWXYZ";
    $min = "abcdefghijklmnopqrstuwxyz";
    $numeros = "0123456789";
    $especiales = "*/!?¿";
    $cont = count($_POST) - 2;

    function formulario()
    {

        echo '<form method="POST" action="contraseña2.php">

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

    function restojer()
    {
        if (isset($_POST['check1']) || isset($_POST['check2']) || isset($_POST['check3']) || isset($_POST['check4'])) {


            if (($_POST['num'] >= 6) && ($_POST['num'] <= 16)) {
                generarcontraseña();
            } else {
                controldetamayo();
            }
        } else {

            if (($_POST['num'] >= 6) && ($_POST['num'] <= 16)) {
                controlseleccioncheck();
            } else {
                controldeseleccioncheckytamanyo();
            }
        }
    }


    function controlpulsados()
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



    function generarcontraseña()
    {

        controlpulsados();
        global $minus;
        global $mayus;
        global $n;
        global $min;


        if ($mayus == 1 && $minus == 1) {
            $resto = $n % 2;
            $cociente = intdiv($n, 2);
            $sumares = $resto + $cociente;
            $numerosumares = ($n - $sumares) - 1;
            echo rand(1 * pow(10, $numerosumares), (1 * (pow(10, $numerosumares + 1) - 1)));
            echo substr($min, -10);
        }






        echo '<form method="POST" action="">

       Bien
        <br />
        <br />
                
        </form>';
    }
    function controldetamayo()
    {
        echo '<form method="POST" action="">

        Los caracteres para la contraseña deben estar entre 6 y 16 caracteres
        <br />
        
        <input type="submit" name="aceptar" value="aceptar"/>
        </form>';
    }
    function controlseleccioncheck()
    {
        echo '<form method="POST" action="">

        Nos has elegido ningun check 
        <br />
        
        <input type="submit" name="aceptar" value="aceptar"/>
        </form>';
    }
    function controldeseleccioncheckytamanyo()
    {
        echo '<form method="POST" action="">

        Nos has elegido ni check y el tamaño es incorrecto
        <br />
        
        <input type="submit" name="aceptar" value="aceptar"/>
        </form>';
    }



    if (!isset($_POST['numeros'])) {
        formulario();
    } else {

        restojer();
    }






    ?>

</body>

</html>