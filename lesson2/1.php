<?php
$a = rand(-10, 10);
$b = rand(-10, 10);

if($a >= 0 && $b >= 0){
    echo $diff = $a - $b;
} elseif($a < 0 && $b < 0){
    echo $mult = $a * $b;
} elseif($a >= 0 && $b < 0 || $a < 0 && $b >= 0){
    echo $sum = $a + $b;
}