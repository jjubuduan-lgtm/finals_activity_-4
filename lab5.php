<?php
$a = readline("Enter first number: ");
$b = readline("Enter second number: ");
$c = readline("Enter third number: ");

if ($a >= $b && $a >= $c) {
    echo "Largest number is: $a";
} elseif ($b >= $a && $b >= $c) {
    echo "Largest number is: $b";
} else {
    echo "Largest number is: $c";
}
?>