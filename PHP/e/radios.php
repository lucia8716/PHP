<html>

<head>
  <title>Formulario de entrada del dato nombre</title>
</head>

<body>
  <?php
  if (!$_GET) {

    echo '<form method="GET" action="qw.php"> 
  Teclea tu nombre: 
  <input type="text" name="nombre"> 
  
  &nbsp;
  Teclea tu apellido: 
  <input type="text" name="apellido"> 
 
  &nbsp;
  Teclea tu email: 
  <input type="text" name="email"> 
  
  <br /> 
  <br /> 
  Teclea tu domicilio: 
  <input type="text" name="domicilio"> 
  
  <br /> 
  <br /> 
Interesado en los siguientes temas: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;Sexo
<br /> 
<br /> 
<input type="checkbox" name="check1">musica &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp; &nbsp&nbsp;&nbsp; &nbsp&nbsp;&nbsp; &nbsp&nbsp;&nbsp; &nbsp&nbsp;&nbsp; &nbsp&nbsp;&nbsp; &nbsp&nbsp;&nbsp; &nbsp&nbsp;&nbsp;  &nbsp&nbsp;&nbsp;  &nbsp&nbsp;&nbsp; 
<input type="radio" name="check5">hombre
<br />
<input type="checkbox" name="check2">deportes &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp; &nbsp&nbsp;&nbsp; &nbsp&nbsp;&nbsp; &nbsp&nbsp;&nbsp; &nbsp&nbsp;&nbsp; &nbsp&nbsp;&nbsp; &nbsp&nbsp;&nbsp; &nbsp&nbsp;&nbsp;  &nbsp&nbsp;&nbsp;  &nbsp; 
<input type="radio" name="check5">mujer
<br />
<input type="checkbox" name="check3">cine
<br />
<input type="checkbox" name="check4">libros
<br />
<br />
Dia de la semana: 
<br />
<select name="operacion"> 
   <option value="Lunes">Lunes</option> 
   <option value="Martes">Martes</option> 
 </select> 
<br />
<textarea name="Comentario"></textarea> 
<br />
<input type="submit" value="aceptar">
<input type="reset" value="borrar datos">
  </form>';
  } else {
    echo "El nombre tecleado es: ";
    echo $_GET['nombre'];
    echo "<br />";

    echo "El apellido tecleado es: ";
    echo $_GET['apellido'];
    echo "<br />";
    echo "El email tecleado es: ";
    echo $_GET['email'];
    echo "<br />";
    echo "La direccion tecleada es: ";
    echo $_GET['domicilio'];
    echo "<br />";
    echo "<br />";

    if (isset($_REQUEST['check1'])) {

      echo "Intereses por:musica";
    }
    echo "<br />";
    if (isset($_REQUEST['check2'])) {

      echo "Intereses por:deportes";
    }
    echo "<br />";
    if (isset($_REQUEST['check3'])) {

      echo "Intereses por:cine";
    }
    echo "<br />";

    if (isset($_REQUEST['check4'])) {

      echo "Intereses por:libros";
    }
    echo "<br />";

    if (isset($_REQUEST['check5'])) {
      echo "Sexo: Hombre ";
    } else {
      if (isset($_REQUEST['check6'])) {
        echo "Sexo: Hombre ";
      } else {
        echo "Sexo: No determinado ";
      }
    }
    echo "<br />";


    if ($_REQUEST['operacion'] == "Lunes")

      echo "Has elegido el lunes";

    if ($_REQUEST['operacion'] == "Martes")

      echo "Has elegido el Martes";

    echo "<br />";
    echo "<br />";

    echo "Comentarios: ";
    echo $_GET['Comentario'];
    echo "<br />";


    var_dump($_REQUEST);
    var_dump($_GET);
  }
  ?>
</body>

</html>