<?php 

echo "<h1>mi mensaje de hola</h1>";
echo "mi mensaje de hola <br>";
echo "mi mensaje de hola <br>";
echo "mi mensaje de hola <br>";
echo "mi mensaje de hola <br>";
echo "mi mensaje de hola <br>";
echo "mi mensaje de hola <br>";

$str_Nombre = "jhon edwin";
$str_Apellido = "monsalve";

$nombreCompleto = $str_Nombre ." ". $str_Apellido;

echo $nombreCompleto;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>prueba demo</title>
</head>
<body>
    <h2>Mi nombre es:</h2>
    <h3><?php  echo $nombreCompleto;  ?></h3>

    <form action="miNombre.php">
        <input type="text" name="nombrePersona" placeholder="ingrese su nombre">
        <input type="number" name="edad" id="" placeholder="edad">
        <input type="submit" value="enviar nombre">
    </form>
</body>
</html>