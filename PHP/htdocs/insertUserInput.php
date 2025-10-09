<?php
$name = $_POST['n1'];
$class = $_POST['n2'];

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "abc";
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed:" . $conn->connect_error);
} else {
    echo "successful";
}
$a = "insert into data(name,class) values ('$name','$class')";
if (mysqli_query($conn, $a)) {
    echo "record Inserted";
} else {
    echo " not inserted";
}

$conn->close();
