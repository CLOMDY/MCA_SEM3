<?php


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "abc";
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    echo "successful";
}
$sql = "delete from  data where name='deep'";
if (mysqli_query($conn, $sql)) {
    if (mysqli_affected_rows($conn)) {
        echo "<p>Successfully deleted<b> " . mysqli_affected_rows($conn) . "</b> record(s).</p>";
    } else {
        echo mysqli_affected_rows($conn) . " Record(s) deleted";
    }
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}


mysqli_close($conn);
