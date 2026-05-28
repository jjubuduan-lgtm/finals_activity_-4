<?php
$amount = readline("Enter purchase amount: ");

if ($amount >= 1000) {
    $discount = $amount * 0.20;
    echo "20% discount applied. Final price: " . ($amount - $discount);
} elseif ($amount >= 500) {
    $discount = $amount * 0.10;
    echo "10% discount applied. Final price: " . ($amount - $discount);
} else {
    echo "No discount. Final price: $amount";
}
?>