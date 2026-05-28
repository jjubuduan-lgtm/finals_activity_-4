<?php
$num1 = readline("Enter first number: ");
$num2 = readline("Enter second number: ");
$operator = readline("Enter operator (+, -, *, /): ");

switch ($operator) {
    case "+": echo $num1 + $num2; break;
    case "-": echo $num1 - $num2; break;
    case "*": echo $num1 * $num2; break;
    case "/": 
        if ($num2 != 0) {
            echo $num1 / $num2;
        } else {
            echo "Division by zero not allowed";
        }
        break;
    default: echo "Invalid operator";
}
?>