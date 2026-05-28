<?php
$password = readline("Enter password: ");
$fixedPassword = "admin123";

if ($password === $fixedPassword) {
    echo "Access Granted";
} else {
    echo "Access Denied";
}
?>