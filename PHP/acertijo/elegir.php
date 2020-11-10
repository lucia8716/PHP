<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>




    <?php

    if (!$_POST) {

        echo '<form method="POST" action="">

<h1>Introduce cuantro digitos</h1></br></br></br>
<input type="number" name="n1">&nbsp;&nbsp;<input type="number" name="n2">
&nbsp;&nbsp;<input type="number" name="n3">&nbsp;&nbsp;<input type="number" name="n4">
<input type="submit" name="enviar">
</form></br></br></br>';

        $n1 = rand(1, 10);
        $n2 = rand(1, 10);
        $n3 = rand(1, 10);
        $n4 = rand(1, 10);

        echo "la solucion al ejercicio es " . $n1 . $n2 . $n3 . $n4;
    } else {

        $numero1 = $_POST['n1'];
        $numero2 = $_POST['n2'];
        $numero3 = $_POST['n3'];
        $numero4 = $_POST['n4'];

        echo "<form method='POST' action=''>

<h1>Introduce cuantro digitos</h1></br></br></br>
<input type='number' name='n1' value='$numero1'>";
        echo "&nbsp;&nbsp;<input type='number' name='n2' value='$numero2'>
&nbsp;&nbsp;";
        echo "&nbsp;&nbsp;<input type='number' name='n2' value='$numero3'>
&nbsp;&nbsp;";
        echo "&nbsp;&nbsp;<input type='number' name='n2' value='$numero4'>
&nbsp;&nbsp;";
    }




    ?>



</body>

</html>