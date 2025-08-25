<?php
    $bookTitle = $_POST["title"];
    $authurName = $_POST["author"];
    $quantity = $_POST["quantity"];
    $price = $_POST["price"];

    echo "<h2>Book Store</h2>";
    echo "<p>Book Title: $bookTitle</p>";
    echo "<p>Author Name: $authurName</p>";
    echo "<p>Quantity: $quantity</p>";
    echo "<p>Price: $price</p>";
    $total = $quantity * $price;
    echo "<p>Total Price: $total</p>";
?>