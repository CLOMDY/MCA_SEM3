<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multiplication</title>
</head>
<body>
    <form action="">
        <label for="num1">Enter first number:</label>
        <input type="number" id="num1" name="num1" required>
        <br><br>
        
        <button type="submit">Multiply</button>
        
        <?php
            if ($_SERVER["REQUEST_METHOD"] == "GET") {
                if (isset($_GET['num1'])) {
                    $num1 = $_GET['num1'];
                    for ($i = 1; $i <= 10; $i++){
                        echo "<h3>$num1 x $i = " . ($num1 * $i) . "</h3>";
                    }
                }
            }
        ?>
    </form>
</body>
</html>