<?php

function cadena($datos){
  
    $arreglo=str_split($datos);
    foreach($arreglo as $valor){
        $ascii=ord($valor);
        if($ascii>=65 && $ascii<=122){
            $letra[]=$valor;
        }
        elseif($ascii>=48 && $ascii<=57){
            $numero[]=$valor;
        }
        elseif($ascii>=32 && $ascii<=47){
            $signo[]=$valor;
        }
        elseif($ascii>=58 && $ascii<=64){
            $signo[]=$valor;
        }
        elseif($ascii>=91 && $ascii<=96){
            $signo[]=$valor;
        }
        elseif($ascii>=123 && $ascii<=126){
            $signo[]=$valor;
        }
    }
    if

    return [$letra,$numero,$signo];
}

$dato=$_POST['cadena'];
[$letra,$numero,$signo]=cadena($dato);

?>

<html>
    <body>
        <table border="1">
            <tr>
                <th>Letras</th>
                <th>Números</th>
                <th>Signos</th>
            </tr>
            <tr>
                <td align="center">
                    <?php
                        foreach($letra as $valor){
                            echo $valor;
                            echo '</br>';
                        }
                    ?>
                </td>
                <td align="center">
                    <?php
                        foreach($numero as $valor){
                            echo $valor;
                            echo '</br>';
                        }
                    ?>
                </td>
                <td align="center">
                    <?php 
                        foreach($signo as $valor){
                            echo $valor;
                            echo '</br>';
                        }
                    ?>
                </td>
            </tr>
        </table>
    </body>
</html>