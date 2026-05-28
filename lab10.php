<?php
$username = readline("Enter username: ");
$password = readline("Enter password: ");

if ($username === "admin" && $password === "1234") {
    echo "Login Successful";
} else {
    echo "Login Failed";
}
?>