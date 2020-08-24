<?php
function sum($arr) {
    $total = 1;
    foreach ($arr as $num) {
        $total *= $num;
    }
    return $total;
}
echo sum(array(1, 3, 5, 7, 9));