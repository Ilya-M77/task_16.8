<?php

$n = readline();

    $rez = 'NO';
    
    if ($n == 1) { 
        $rez = 'YES';
        
    }

    while ($n>=2){
        if ($n == 2){
            $rez = 'YES';
        break;
        }
        $n = $n/2;
    }

    echo $rez;
    

?>