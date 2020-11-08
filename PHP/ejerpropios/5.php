
<?php

if ($_POST) {

    echo '<form method="" action="">
    <input type="submit" value="aceptar">

    </form>';
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

    echo '</br>';

    echo $_REQUEST['Comentario'];
} else {

    echo 'mario';
}





?>