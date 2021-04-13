<?php

function multiplos($num){
    for($i=1 ; $i<=($num/2) ; $i++){
        if($num%$i==0){
            if($num%2==0){
                echo $i;
                echo '<br/>';
            }
            elseif($num%3==0){
                echo $i;
                echo '</br>';
            }
            elseif($num%5==0){
                echo $i;
                echo '</br>';
            }
        }
    }
}

$num=$_POST['multi'];
multiplos($num);

?>