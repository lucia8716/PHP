<?php
$ar = fopen("datos.txt", "a") or die("Problemas en la creacion pizzas");
fwrite($ar, $_POST['nombre']);
fwrite($ar, "|"); //separación entre nombre y teléfono
fwrite($ar, $_POST['telefono']);

$verficar;
$cant;

foreach ($_POST['pizzas'] as $selected) {
    $verficar = $selected;
}

foreach ($_POST['cantidad'] as $perro) {
    $cant = $perro;
}


if (isset($_POST['pizzas']) && $verficar == "jamoonyqueso") {
    fwrite($ar, "|");
    fwrite($ar, "jamoonyqueso");
    fwrite($ar, $cant);
}

if (isset($_POST['pizzas']) && $verficar == "napolitana") {
    fwrite($ar, "|");
    fwrite($ar, "napolitana");
    fwrite($ar, $cant);
}

if (isset($_POST['pizzas']) && $verficar == "mozarella") {
    fwrite($ar, "|");
    fwrite($ar, "mozarella");
    fwrite($ar, $cant);
}

fwrite($ar, PHP_EOL); //PHP_EOL (End Of Line. Introduce un salto de línea)

fclose($ar);
echo "Los datos se guardaron correctamente.";
