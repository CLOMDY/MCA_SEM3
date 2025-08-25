<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>marks</title>
</head>

<body>
    <form>
        <label for="marks">Enter your marks:</label>
        <input type="number" id="marks" name="marks" required>
        <br><br>

        <button type="submit">Submit</button>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "GET") {
            if (isset($_GET['marks'])) {
                $marks = $_GET['marks'];
                if ($marks >= 90) {
                    $grade = "A+";
                } elseif ($marks >= 80) {
                    $grade = "A";
                } elseif ($marks >= 70) {
                    $grade = "B+";
                } elseif ($marks >= 60) {
                    $grade = "B";
                } elseif ($marks >= 50) {
                    $grade = "C";
                } elseif ($marks >= 40) {
                    $grade = "D";
                } else {
                    $grade = "F";
                }
                echo "<h3>Your grade is: $grade</h3>";
            }
        }
        ?>
    </form>
</body>

</html>