<?php
$grade = strtoupper(readline("Enter letter grade (A-F): "));

switch ($grade) {
    case "A": echo "Excellent"; break;
    case "B": echo "Good"; break;
    case "C": echo "Average"; break;
    case "D": echo "Poor"; break;
    case "F": echo "Failed"; break;
    default: echo "Invalid grade";
}
?>