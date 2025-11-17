<?php
session_start();
require_once('connection.php');

// Check login
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

// Add candidate
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['new_candidate'])) {
    $name = mysqli_real_escape_string($connect, $_POST['name']);
    $img_url = mysqli_real_escape_string($connect, $_POST['img_url']);
    mysqli_query($connect, "INSERT INTO candidates (name, img_url) VALUES ('$name', '$img_url')");
    $msg = "Candidate added successfully!";
}

// Reset votes
if (isset($_GET['reset_votes'])) {
    mysqli_query($connect, "UPDATE candidates SET votes = 0");
    mysqli_query($connect, "UPDATE users SET has_voted = 0");
    $msg = "Votes have been reset!";
}

// Delete Candidate
if (isset($_GET['delete_candidate'])) {
    $id = (int)$_GET['delete_candidate'];
    mysqli_query($connect, "DELETE FROM candidates WHERE id=$id");
    $msg = "Candidate deleted successfully!";
}

// Delete User (except admin)
if (isset($_GET['delete_user'])) {
    $id = (int)$_GET['delete_user'];
    mysqli_query($connect, "DELETE FROM users WHERE id=$id AND is_admin=0"); // block admin deletion
    $msg = "User deleted successfully!";
}

// Fetch Data
$candidates = mysqli_query($connect, "SELECT * FROM candidates");
$users = mysqli_query($connect, "SELECT * FROM users");

?>
<!DOCTYPE html>
<html>

<head>
    <title>Admin Panel</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        /* DELETE BUTTON STYLE */
        .delete-btn {
            display: inline-block;
            padding: 6px 12px;
            background: #e63946;
            color: white;
            font-size: 0.85rem;
            border-radius: 6px;
            text-decoration: none;
            transition: 0.3s;
        }

        .delete-btn:hover {
            background: #c92836;
        }

        .action-btn {
            display: inline-block;
            margin-top: 10px;
            width: 100%;
            text-align: center;
            text-decoration: none;
            background: #ff9900;
            color: white;
            font-weight: bold;
            padding: 14px;
            border-radius: 8px;
            transition: background 0.3s;
        }

        .action-btn:hover {
            background: #e68a00;
        }
    </style>
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
                    <th>Action</th>
                </tr>
                <?php while ($row = mysqli_fetch_assoc($users)): ?>
                    <tr>
                        <td><?php echo $row['id']; ?></td>
                        <td><?php echo htmlspecialchars($row['name']); ?></td>
                        <td><?php echo htmlspecialchars($row['email']); ?></td>
                        <td><?php echo $row['has_voted'] ? 'Yes' : 'No'; ?></td>
                        <td><?php echo $row['is_admin'] ? 'Yes' : 'No'; ?></td>
                        <td>
                            <?php if (!$row['is_admin']): ?>
                                <a href="admin.php?delete_user=<?php echo $row['id']; ?>"
                                   class="delete-btn"
                                   onclick="return confirm('Are you sure you want to delete this user?')">Delete</a>
                            <?php else: ?>
                                ---
                            <?php endif; ?>
                        </td>
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
                    <th>Action</th>
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
                        <td>
                            <a href="admin.php?delete_candidate=<?php echo $row['id']; ?>"
                               class="delete-btn"
                               onclick="return confirm('⚠️ Delete this candidate? All votes for them will be lost!');">
                                Delete
                            </a>
                        </td>
                    </tr>
                <?php endwhile; ?>
            </table>

            <p><a href="admin.php?reset_votes=1" class="action-btn">Reset All Votes</a></p>
            <p><a href="index.php" class="action-btn">Back to Home</a></p>
        </div>
    </div>
</body>

</html>
