<?php
function multiplay($a,$b){
    return $a * $b;
}
echo multiplay(6,7) . "\n";
function greet($name){
    return "Hello $name" . "\n";
}
echo greet("Codey") . "\n";

function calc($num1 , $num2 , $operator){
    switch ($operator){
        case "+":
            return $num1 + $num2;
            break;
        case "-":
            return $num1 - $num2;
            break;
        case "*":
            return $num1 * $num2;
            break;
        case "/":
            return $num1 / $num2;
            break;
        default:
        return "welcome to calc";
    }
}
echo calc(3,5,"*")
?>