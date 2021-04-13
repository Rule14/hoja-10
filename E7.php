<?php 
function num_roman($num) {

    if ($num==1) 
    return "I";
    elseif ($num==2)
    return "II";
    elseif ($num==3)
    return "III";
    elseif ($num==4)
    return "IV";
    elseif ($num==5)
    return "V";
    elseif ($num==6)
    return "VI";
    elseif ($num==7)
    return "VII";
    elseif ($num==8)
    return "VIII";
    elseif ($num==9)
    return "IX";
    elseif ($num==10)
    return "X";
    
}

$num=$_POST['num'];
echo 'El número: '.$num.' en romano es: '.num_roman($num);

?>