<?php
$connect = mysqli_connect("localhost", "root", "", "voting_system");
if (!$connect) {
    die("Database connection failed: " . mysqli_connect_error());
}
?>
