<?php
$grade = readline("Enter the student's grade: ");

if ($grade >= 90 && $grade <= 100) {
    echo "Excellent";
} elseif ($grade >= 80 && $grade <= 89) {
    echo "Good";
} elseif ($grade >= 70 && $grade <= 79) {
    echo "Average";
} else {
    echo "Failed";
}
?>