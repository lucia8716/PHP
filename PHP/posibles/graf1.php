<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
    <?php
        function esPar($numero){
            if ($numero==1)
            {
                return false;
            }elseif ($numero==0){
                return true;
            }else{
                $aux=$numero-2;
                $retorno=esPar($aux);
                comprobar($aux,$retorno);
                return $retorno;
            }

        }
        $num = 6;
        if (esPar($num)==true)
            echo $num.'es par</br>';
        else
            echo $num.'es impar</br>';

        function comprobar($numero,&$retorno){
            if($numero==2) $retorno=false;
            else echo 'el valor de $aux es: '.$numero.'<br/>';
        }
    ?>

</body>
</html>