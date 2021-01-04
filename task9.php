<?php

$a = (float)readline();
$n = (int)readline();

function power($a, $n) {
    if($n === 0) {
        return 1;
    }
    $rez = $a * power($a, $n - 1);
    return $rez;
}

$rez = power($a, $n);
echo $rez;

?>