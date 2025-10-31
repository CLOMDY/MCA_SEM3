<?php
session_start();
require_once('connection.php');

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

$user_id = $_SESSION['user_id'];
$result = mysqli_query($connect, "SELECT is_admin FROM users WHERE id='$user_id'");
$user = mysqli_fetch_assoc($result);

if (!$user['is_admin']) {
    die("Access denied. Admins only.");
}

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['new_candidate'])) {
    $name = mysqli_real_escape_string($connect, $_POST['name']);
    $img_url = mysqli_real_escape_string($connect, $_POST['img_url']); // new field

    mysqli_query($connect, "INSERT INTO candidates (name, img_url) VALUES ('$name', '$img_url')");
    $msg = "Candidate added successfully!";
}


if (isset($_GET['reset_votes'])) {
    mysqli_query($connect, "UPDATE candidates SET votes = 0");
    mysqli_query($connect, "UPDATE users SET has_voted = 0");
    $msg = "Votes have been reset!";
}

$candidates = mysqli_query($connect, "SELECT * FROM candidates");
$users = mysqli_query($connect, "SELECT * FROM users");
?>
<!DOCTYPE html>
<html>

<head>
    <title>Admin Panel</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <div class="container">
        <div class="card">
            <h2>Admin Panel</h2>
            <?php if (isset($msg)) echo "<p class='msg'>$msg</p>"; ?>

            <h3>Add New Candidate</h3>
            <form method="POST" class="candidate-form">
                <div class="input-row">
                    <input type="text" name="name" placeholder="Candidate Name" required>
                    <input type="url" name="img_url" placeholder="Candidate Image URL (optional)">
                </div>
                <button type="submit" name="new_candidate">Add Candidate</button>
            </form>

            <h3>Registered Users</h3>
            <table>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Has Voted</th>
                    <th>Admin</th>
                </tr>
                <?php while ($row = mysqli_fetch_assoc($users)): ?>
                    <tr>
                        <td><?php echo $row['id']; ?></td>
                        <td><?php echo htmlspecialchars($row['name']); ?></td>
                        <td><?php echo htmlspecialchars($row['email']); ?></td>
                        <td><?php echo $row['has_voted'] ? 'Yes' : 'No'; ?></td>
                        <td><?php echo $row['is_admin'] ? 'Yes' : 'No'; ?></td>
                    </tr>
                <?php endwhile; ?>
            </table>

            <h3>Candidates & Votes</h3>
            <table>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Image</th>
                    <th>Votes</th>
                </tr>
                <?php while ($row = mysqli_fetch_assoc($candidates)): ?>
                    <tr>
                        <td><?php echo $row['id']; ?></td>
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


            <p><a href="admin.php?reset_votes=1" style="display: inline-block;
  margin-top: 10px;
  width: 100%;
  text-align: center;
  text-decoration: none;
  background: #ff9900;
  color: white;
  font-weight: bold;
  padding: 14px;
  border-radius: 8px;
  transition: background 0.3s;">Reset All Votes</a></p>
            <p><a href="index.php" style="display: inline-block;
  margin-top: 10px;
  width: 100%;
  text-align: center;
  text-decoration: none;
  background: #ff9900;
  color: white;
  font-weight: bold;
  padding: 14px;
  border-radius: 8px;
  transition: background 0.3s;">Back to Home</a></p>
        </div>
    </div>
</body>

</html>