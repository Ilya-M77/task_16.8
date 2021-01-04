<?php
 
    $year = readline();
    
    echo ((($year % 4 == 0) && ($year % 100 != 0)) || ($year % 400 == 0)) ? 'YES' : 'NO';

?>