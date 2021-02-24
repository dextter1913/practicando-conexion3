<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practicando conexion 3</title>
</head>
<body>
    <center><h1>practicando conexion 3</h1>
    <form action="index.php" method="post">
    <label for="id">ID:</label>
    <input type="text" name="id" id="id"><br><br>
    <label for="nombre">Nombre:</label>
    <input type="text" name="nombre" id="nombre"><br><br>
    <label for="apellido">Apellido:</label>
    <input type="text" name="apellido" id="apelido"><br><br>
    <label for="telefono">Telefono:</label>
    <input type="text" name="telefono" id="telefono"><br><br>
    <input type="submit" value="Ingresar" name="btningresar">
    </form>
    </center>
    <?php 
    if (isset($_POST['btningresar'])) {
        $_id = $_POST['id'];
        $_nombre = $_POST['nombre'];
        $_apellido = $_POST['apellido'];
        $_telefono = $_POST['telefono'];

        include("./clases/conexion-open.php");
        $conexion->query("INSERT INTO $table(id,nombre,apellido,telefono) VALUES('$_id','$_nombre','$_apellido','$_telefono')");
        include("./clases/conexion-close.php");
        echo "se registro correctamente";



    }
    ?>
</body>
</html>