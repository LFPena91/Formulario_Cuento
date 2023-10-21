<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="Estilo.css">
    <title>Cuento</title>
</head>
<body>
    <h1><a href="index.html"><img id='volver' src='imagenes/Volver.png' title='Volver'></a> Este es tu cuento .....</h1>
    <p>
        <?php
        #Asignamos las variables del formulario en HTML, a PHP
        $nombre = $_POST['nombre'];
        $apellidos = $_POST['apellidos'];
        $apodo = $_POST['apodo'];
        $colorCabello = $_POST['colorCabello'];
        $colorOjos = $_POST['colorOjos'];
        $edad = $_POST['edad'];
        $hobby = $_POST['hobby'];

        #Iniciamente habia pensado hacer un IF, asignado a una variable n, un numero del 0 al 3, según la edad
        /*if ($edad < 4){
           $n = 0;
        }elseif ($edad >= 4 and $edad <12 ){
            $n = 1;
        }elseif ($edad >= 12 and $edad < 21){
            $n = 2;
        }else{
            $n = 3;
        }*/

        switch($edad){ #Se define según la edad imprimir un cuento en especifico.
            case $edad < 4: 
                echo "<div id='menor'><p>Lo sentimos, no tenemos cuentos para personas de esta edad</p>
                <p><img id='SadFace' src='imagenes/SadFace.jpg'></p></div>";
                break;
            case $edad >= 4 and $edad <12: 
                #creo un Id en cada cuento, para editarlo en CSS individualmente.
                echo "<div id= 'cuentoUno'> 
                <h3> La gran aventura de ". $apodo. "</h3>
                <img src='imagenes/Patitas.jpeg'>
                <p>En una acogedora colonia subterránea, vivía ". $nombre. " ". $apellidos. ", 
                un pequeño hámster de ojos ". $colorOjos. " que siempre se escondía en su madriguera 
                cuando veía una sombra o escuchaba un ruido extraño. 
                Y allí se quedaba, ". $hobby. ", a ver si se le pasaba el miedo.<br/>
                <br/>—¡ ". $apodo. " (como le decián sus amigos), no puedes esconderte siempre! —le decía Bolita, 
                una hámster anciana con pelaje ". $colorCabello. " —. El mundo es grande y hermoso, y está esperando ser descubierto. 
                Que un gato te separara de tu familia cuando eras un bebé no significa que no puedas salir de ese agujero.<br/>
                <br/> ".$apodo. " lo intentaba, pero tenía mucho miedo.<br/>              
                <br/>Un día, un zorro astuto y hambriento descubrió la entrada de la colonia. 
                Todos los hámsteres empezaron a correr de acá para allá.<br/>              
                <br/>—¡Tenemos que hacer algo! —gritó ". $apodo. " , olvidando por un momento su miedo. <br/>             
                <br/>Guiado por Bolita, ". $nombre. " se aventuró en el bosque oscuro. Los árboles se alzaban altos y amenazantes. 
                Sus ramas se entrelazaban como manos esqueléticas y el viento silbaba entre las hojas secas,
                 creando un murmullo constante.<br/>            
                <br/>—Debemos buscar al águila en la montaña —dijo Bolita—. Ella nos ayudará.<br/>
                <be/>Fue un viaje largo y duro. Lo que más asustó a ". $apodo. " fue su paso por el borde de un río caudaloso. 
                Menos mal que recordó una historia que había leído y se lo ocurrió construir 
                una balsa con ramas y hojas y pudo remar con todas sus fuerzas.<br/>           
                <br/>Al llegar a la montaña del águila, ". $apodo. " pidió ayuda. 
                El águila, viendo el coraje del pequeño hámster, aceptó.<br/>
                <br/>Mientras tanto, en la colonia, el zorro intentaba cavar para llegar a los hámsteres. 
                Pero estos, recordando las historias que ". $nombre. "  
                les leía, idearon trampas y pasadizos falsos para confundirlo.<br/>
                <br/>Cuando ". $apodo. " regresó con el águila, el zorro, al ver a la majestuosa ave, huyó despavorido.<br/>
                <br/>La colonia celebró la valentía de ". $nombre. " , y este, con una sonrisa en su rostro, 
                se dio cuenta de que el verdadero valor no se encuentra en el tamaño, sino en el corazón.</br>
                <br/>Desde aquel día, ". $nombre. " ya no se escondía ante cualquier sombra o ruido. 
                Había descubierto que, con valentía y amigos a su lado, podía enfrentar cualquier desafío.</p></div>";
                break;
            case $edad >= 12 and $edad < 21:
                echo "<div id='cuentoDos'> 
                <h3> El zar ". $nombre. " y la camisa ". $colorCabello. "</h3>
                <img src='imagenes/Zar.jpg'>
                <p>El zar ". $nombre. " ". $apellidos. " estaba enfermo y dijo: - Daré la mitad de mi reino a quien me cure. 
                Entonces, se reunieron todos los sabios y empezaron a discutir cómo curar al zar. Nadie sabía que hacer.<br/>
                <br/>Sólo el sabio ". $apodo. " afirmó que se podía curar al zar. 
                - Si se encuentra a un hombre feliz y que le guste ". $hobby. " -dijo-, 
                se le quita la camisa ". $colorCabello. " y se le pone al zar, éste se curará.<br/>
                <br/> El zar ". $nombre. " mandó que buscaran a un hombre feliz y que le gustara ". $hobby. " 
                por todo su reino, pero por mucho que ". $apodo. " y sus emisarios cabalgaron por todos sus territorios, 
                no pudieron encontrarlo.<br/>
                <br/> No había ni uno que estuviese satisfecho del todo. Uno era rico, pero estaba enfermo; 
                otro gozaba de buena salud, pero era pobre; otro era rico y gozaba de buena salud, 
                pero su mujer era malvada, o no le gustaba ". $hobby. "; todos tenían algún motivo de queja.<br/>
                <br/>Un día, a última hora de la tarde, el hijo de ". $nombre. " pasaba junto a una pequeña isba y oyó a alguien que decía: 
                - Gracias a Dios he trabajado bastante, he comido cuanto necesitaba y ahora me voy a ". $hobby. ". 
                ¿Qué más puedo pedir? El hijo del zar se alegró, ordeno que le quitasen la camisa ". $colorCabello. 
                " a ese hombre, que le diesen una cantidad de dinero a modo de compensación, todo el que quisiera, y que llevaran la camisa "
                . $colorCabello. " al zar.<br/><br/> Los emisarios fueron a ver al hombre feliz y quisieron quitarle la camisa ". $colorCabello. "; 
                pero ese hombre feliz era tan pobre que ni siquiera tenía camisa ". $colorOjos. ".</p></div>";
                break;
            default:
                echo "<div id='cuentoTres'>
                <h3>El sabio ". $nombre. " ". $apellidos. " y el escorpión ". $colorOjos. "</h3>
                <img src='imagenes/Sabio.jpeg'><p>Había una vez un sabio monje llamado ". $nombre. " que paseaba junto a su discípulo ". $apodo. 
                " en las orilla del río ". $colorCabello. ".<br/><br/> Durante su ". $hobby. ", vio como un escorpión ". $colorOjos. 
                " había caído al agua y se estaba ahogando, y tomó la decisión de salvarlo sacándolo del agua.<br/><br/> 
                Pero una vez en su mano, el animal le picó.
                El dolor hizo que ". $nombre. " soltara al escorpión, que volvió a caer al agua.<br/><br/>  
                El sabio volvió a intentar sacarlo, pero de nuevo el animal le picó provocando que le dejara caer. 
                Ello ocurrió una tercera vez. El dicipulo ". $apodo. ", preocupado, le preguntó por qué continuaba haciéndolo si el animal siempre le picaba.<br/><br/> 
                ". $nombre. ", sonriendo, le respondió que la naturaleza del escorpión". $colorOjos. " es la de picar, 
                mientras que la de él no era otra que la de ayudar. Dicho esto el monje tomó una hoja y, 
                con su ayuda, consiguió sacar al escorpión ". $colorOjos. " del rio ". $colorCabello. 
                " y salvarlo sin sufrir su picadura</p></div>";
        }
        ?>
    </p>
</body>
</html>