<?php
function sum($max) {
    $result = 0;
    for($i = 1; $i <= $max; $i++) {
        $result += $i;
    }
    
    return $result * 2;
}

echo sum(5);
?>