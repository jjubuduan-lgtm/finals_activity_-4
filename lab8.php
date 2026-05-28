<?php
$age = readline("Enter age: ");
$citizenship = readline("Enter citizenship: ");

if ($age >= 18) {
    if (strtolower($citizenship) == "filipino") {
        echo "Eligible to vote";
    } else {
        echo "Not eligible to vote (citizenship requirement)";
    }
} else {
    echo "Not eligible to vote (age requirement)";
}
?>