<?php
    $username = $_POST["username"];
    $password = $_POST["password"];

    if($username == "admin" && $password == "password123"){
        echo "Welcome to admin dashboard";
    }
    else{
        echo "Invalid username or password.";
    }
?>