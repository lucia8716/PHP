<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<form></form>

<body>


    <form method="POST" action="5.php">
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


    </form>




</body>

</html>