<?php
$imagen = imageCreate(250, 80);
$amarillo = ImageColorAllocate($imagen, 255, 255, 0);
ImageFill($imagen, 0, 0, $amarillo);

$verdeLineas = imagecolorallocate($imagen, 0, 255, 0);
$verde = ImageColorAllocate($imagen, 0, 255, 0);
$valoraleatorio = rand(50000, 120000);                            //genera números aleatorios
ImageString($imagen, 5, 50, 20, $valoraleatorio, $verde); //tamaño de la fuente máx.5 y coordenadas c y f

for ($i = 0; $i <= 4; $i++) {

    $x1 = rand(0, 100);
    $x2 = rand(0, 100);
    $y2 = rand(0, 100);
    $y1 = rand(0, 100);

    imageline($imagen, $x1, $y1, $x2, $y2, $verdeLineas);
}




header("content-type: image/jpeg");
imageJPEG($imagen);
imageDestroy($imagen);
