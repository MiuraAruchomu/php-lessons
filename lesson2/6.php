<?php
$val = rand(1, 5);
$pow = rand(1, 5);
$constVal = $val;

echo "$val, $pow<br>";

function power ($val, $pow, $constVal){
    if ($pow == 1){
        echo $val;
        return $val;
    } elseif ($pow > 0 && $pow !== 1){
        $val *= $constVal;
    } else {
        echo $val;
        return $val;
    }
    power($val, $pow - 1, $constVal);
}

power($val, $pow, $constVal);