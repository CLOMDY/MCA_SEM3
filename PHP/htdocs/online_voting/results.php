<?php
require_once('connection.php');
$candidates = mysqli_query($connect, "SELECT * FROM candidates ORDER BY votes DESC");
?>
<!DOCTYPE html>
<html>

<head>
    <title>Results</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <h2>Election Results</h2>
    <table>
        <tr>
            <th>Candidate</th>
            <th>Image</th>
            <th>Votes</th>
        </tr>
        <?php while ($row = mysqli_fetch_assoc($candidates)): ?>
            <tr>
                <td><?php echo htmlspecialchars($row['name']); ?></td>
                <td>
                    <?php if ($row['img_url']): ?>
                        <img src="<?php echo htmlspecialchars($row['img_url']); ?>" class="candidate-img">
                    <?php else: ?>
                        N/A
                    <?php endif; ?>
                </td>
                <td><?php echo $row['votes']; ?></td>
            </tr>
        <?php endwhile; ?>
    </table>

</body>

</html>