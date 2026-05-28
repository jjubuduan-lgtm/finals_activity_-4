<?php
$year = readline("Enter a year: ");

if (($year % 400 == 0) || ($year % 4 == 0 && $year % 100 != 0)) {
    echo "Leap Year";
} else {
    echo "Not a Leap Year";
}
?>