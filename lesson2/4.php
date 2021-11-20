<?php
function add($a, $b){
    return $a + $b;
}
function subtr($a, $b){
    return $a - $b;
}
function mult($a, $b){
    return $a * $b;
}
function div($a, $b){
    return $a / $b;
}

function mathOperation($arg1, $arg2, $operation)
{
    switch ($operation) {
        case "add":
            return add($arg1, $arg2);
            break;
        case "subtr":
            return subtr($arg1, $arg2);
            break;
        case "mult":
            return mult($arg1, $arg2);
            break;
        case "div":
            return div($arg1, $arg2);
            break;
    }
}
