<?php
session_start(); //abrir la sesión

if ($_POST['enviar']) {
    # code...
    if ($_SESSION['numeroaleatorio'] == $_POST['valor']) {
        echo 'correcto';
    } else {
        echo 'incorrecto';
    }
}
