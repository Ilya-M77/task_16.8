<?php

    $num = readline();
    
    function isPrime($num){
        
        $rez = 'prime';

        if ($num == 1){
            return $rez;
        }

        $sqrtNum = round(sqrt($num));

        for ($i = 2; $i<=$sqrtNum; $i++){
            if ($num % $i == 0){
                $rez = 'composite';
            }
        }

        return $rez;
    }

    echo isPrime($num);
?>