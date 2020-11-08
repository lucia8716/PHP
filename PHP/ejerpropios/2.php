<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<form></form>

<body>



    <?php

    if (!$_POST) {

        echo '<form method="POST" action="">
<label for="">Nombre</label> <input type="text" name="nombre"> &nbsp;&nbsp;
<label for="">Apellido</label> <input type="text"> &nbsp;&nbsp;
<label for="">enmail</label> <input type="text"> &nbsp;&nbsp;</br></br></br>

Interesado en los siguientes temas; </br></br></br>

<input type="checkbox" name="check1" value="">Mario
</br>
<input type="checkbox" name="check2" value="">Lucia
</br>
Interesado en los siguientes temas; </br></br></br>

<input type="radio" name="radio1" value="suma">sumar
<input type="radio" name="radio1" value="resta">restar
</br></br></br>

<select name="operacion"> 
   <option value="suma">sumar</option> 
   <option value="resta">restar</option> 
 </select> 
 </br></br></br>
 <textarea name="Comentario"></textarea> 
 </br></br></br>
 <input type="submit" value="aceptar"> 
    
    
    </form>';
    } else {

        $nombre = $_POST['nombre'];

        echo "mi nombre es: " . $nombre;

        echo '</br>';


        if (isset($_REQUEST['check1'])) {
            echo 'Mario';
        }
        echo '</br>';

        if (isset($_POST['check2'])) {
            echo 'Lucia';
        }
        echo '</br>';
        if ($_POST['radio1'] == "suma") {
            echo "sumar";
        }
        echo '</br>';

        if ($_POST['radio1'] == "restar") {
            echo "restar";
        }


        echo 'operacion de la semana';

        if ($_POST['operacion'] == "suma") {
            echo "suma";
        }

        if ($_POST['operacion'] == "resta") {
            echo "resta";
        }
    }

    echo $_REQUEST['Comentario'];



    ?>



</body>

</html>