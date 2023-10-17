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
        $nombre = $_POST['nombre'];
        $apellidos = $_POST['apellidos'];
        $apodo = $_POST['apodo'];
        $colorCabello = $_POST['colorCabello'];
        $colorOjos = $_POST['colorOjos'];
        $edad = $_POST['edad'];
        $hobby = $_POST['hobby'];

        /*if ($edad < 4){
           $n = 0;
        }elseif ($edad >= 4 and $edad <12 ){
            $n = 1;
        }elseif ($edad >= 12 and $edad < 21){
            $n = 2;
        }else{
            $n = 3;
        }*/

        switch($edad){
            case $edad < 4:
                echo "Usted no debe saber leer";
                break;
            case $edad >= 4 and $edad <12:
                echo "Cuento 1";
                break;
            case $edad >= 12 and $edad < 21:
                echo "Cuento 2";
                break;
            default:
                echo "Cuento 3";

        }
        ?>


    </p>



</body>
</html>