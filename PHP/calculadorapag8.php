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

        echo '<form method="POST" action="contraseña2.php">

Seleciona los caracteres que quieres utilizar
<br />
<input type="number" name="dato1">
<input type="number" name="dato2">
<br />
<select name="calculo" placerholder="elige un ">
    <option value="1">Sumar</option> 
    <option value="2">Restar</option>
    <option value="3">Dividir</option> 
    <option value="4">Multiplicar</option> 
</select>
<br />
<input type="submit" name="calcular" value="calcular"/>
</form>';
    }

    function restojer()
    {

        $dato1 = $_POST['dato1'];
        $dato2 = $_POST['dato2'];
        $calcular = $_POST['calcular'];
    }

    function calcular()
    {
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



    if (!isset($_POST['calcular'])) {
        formulario();
    } else {

        restojer();
    }






    ?>

</body>

</html>