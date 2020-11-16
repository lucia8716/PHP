<?php
$imagen = imageCreate(200, 50); // se indica el ancho y el alto de la imagen que vamos a crear
$amarillo = ImageColorAllocate($imagen, 255, 255, 0); //creamos una referencia a un color 255,255,0(RGB)
$verde = imagecolorallocate($imagen,  0, 255, 0);
ImageFill($imagen, 0, 0, $amarillo); //rellenamos el fondo de la imagen con dicho color.
//0,0 son las coordenadas x, y
$variablenumero = rand(1000, 5000);
imagestring($imagen, 5, 20, 20, $variablenumero, $verde);
$verdeLineas = imagecolorallocate($imagen,  0, 255, 0);

for ($i = 0; $i <= 20; $i++) {

    $x1 = rand(0, 100);
    $x2 = rand(0, 100);
    $y2 = rand(0, 100);
    $y1 = rand(0, 100);

    imageline($imagen, $x1, $y1, $x2, $y2, $verdeLineas);
}
//la imagen está en memoria
header("content-type: image/jpeg"); //indicamos el tipo de archivo que recibirá el navegador
imageJPEG($imagen); // genera la información de la imagen propiamente dicha 
imageDestroy($imagen); //para liberar los recursos ocupados en el servidor
// por este proceso de generación de la imagen.

session_start();
$_SESSION['numeroaleatorio'] = $variablenumero;
