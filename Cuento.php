<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Cuento</title>
</head>
<body>
    <h1>Este es tu cuento</h1>
    <p>
        <?php
        $nombre = $_GET['user_nombre'];
        $apellido = $_GET['user_apellido'];
        $apodo = $_GET['user_apodo'];
        $ncolor_cabello = $_GET['user_color_cabello'];
        $color_ojos = $_GET['user_color_ojos'];
        $edad = $_GET['user_edad'];
        $hobby = $_GET['user_hobby'];

        echo "el nombre es: " . $nombre;
        ?>


    </p>



</body>
</html>