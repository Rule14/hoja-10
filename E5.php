<?php

function puntos($tamaño){
    $equipos=[];
    for($i=1 ; $i<=$tamaño ; $i++){ //ciclo donde suma los puntos y coloca el nombre y los puntos en un arreglo.
        $a=(string)$i; //convierte la variable i a un string.
        $pg=($_POST['pg'.$a]); //llama a la variable de los partidos ganados.
        $pp=($_POST['pp'.$a]); //llama a la variable de los partidos perdidos.
        $pe=($_POST['pe'.$a]); //llama a la variable de los partidos empatados.
        $punpg=(int)$pg*3; //por cada partido ganado se le dan 3 puntos.
        $puntos=$punpg+(int)$pe; //suma de los puntos.
        $nombre=($_POST['nombre'.$a]);
        $equipos[$nombre]=$puntos; //agregar elementos al arreglo.
    }
    return $equipos;
}

function ganadores($tamaño,$equipos){
    arsort($equipos); //ordena el arreglo de forma descendente por el valor.
    $i=1;
    foreach($equipos as $clave => $valor){ //recorre el arreglo.
        if($i<=$tamaño){ //imprime solo los 4 primeros.
            echo"El equipo <b>$clave</b> pasa con $valor puntos.";
            echo"</br>";
        }
        $i++;
    }
}

$var=($_POST['formu']);

if ($var=='formu1'){
    $puntaje=puntos(8);
    $pasaron=ganadores(4,$puntaje);
}
else if($var=='formu2'){
    $puntaje=puntos(4);
    $pasaron=ganadores(2,$puntaje);
}
else if($var=='formu3'){
    $puntaje=puntos(2);
    $pasaron=ganadores(1,$puntaje);
}
?>