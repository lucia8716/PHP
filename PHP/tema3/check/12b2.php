<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "
http://www.w3.org/TR/html4/loose.dtd">
<!-- Desarrollo Web en Entorno Servidor -->
<!-- Tema 3 : Características del Lenguaje PHP -->
<!-- Ejemplo: Procesar datos post -->
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Desarrollo Web</title>
</head>

<body>
    <?php

    //echo "<span style ='color:red'>;------------Debe introducir un nombre</span>";
    if (!$_POST || $_POST['nombre'] == "" || !isset($_POST['modulos'])) {
        echo '<form name="input" action="" method="POST">
    Nombre del alumno: <input type="text" name="nombre" />';

        if ($_POST && ($_POST['nombre'] != "")) {
            $aux = $_POST['nombre'];
            echo 'value="' . $aux . '"/>';
        }

        if ($_POST && ($_POST['nombre'] == "")) {
            $aux = $_POST['nombre'];
            echo "<span style ='color:red'>;------------Debe introducir un nombre</span>";
        }

        echo '<p>Módulos que cursa:</p>
        <input type="checkbox" name="modulos[]" value="DWES" /> Desarrollo web en entorno
        servidor<br />';


        echo '<input type="checkbox" name="modulos[]" value="DWEC" /> Desarrollo web en entorno
        cliente<br />
        <br />
        <input type="submit" value="Enviar" />
    </form>';
    } else {

        echo '<form name="input" action="" method="POST">
        Nombre del alumno: <input type="text" name="nombre" />';

        if ($_POST && ($_POST['nombre'] != "")) {
            $aux = $_POST['nombre'];
            echo 'value="' . $aux . '"/>';
        } else {

            if ($_POST && ($_POST['nombre'] != "")) {
                $aux = $_POST['nombre'];
                echo "<span style ='color:red'>;------------Debe introducir un nombre</span>";
            }
        }
    }









    ?>



</body>

</html>