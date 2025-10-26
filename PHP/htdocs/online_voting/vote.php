<?php
session_start();
require_once('connection.php');

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

$user_id = $_SESSION['user_id'];
$check = mysqli_query($connect, "SELECT has_voted FROM users WHERE id='$user_id'");
$user = mysqli_fetch_assoc($check);

if ($user['has_voted']) {
    $msg = "You have already voted!";
} elseif ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $candidate_id = $_POST['candidate'];
    mysqli_query($connect, "UPDATE candidates SET votes = votes + 1 WHERE id='$candidate_id'");
    mysqli_query($connect, "UPDATE users SET has_voted=1 WHERE id='$user_id'");
    $msg = "Vote recorded successfully!";
}

$candidates = mysqli_query($connect, "SELECT * FROM candidates");
?>
<!DOCTYPE html>
<html>

<head>
    <title>Vote</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
  <div class="container">
    <div class="card vote-card">
      <h2>Welcome, <?php echo $_SESSION['user_name']; ?>!</h2>
      <h3>Cast Your Vote</h3>

      <?php if (isset($msg)) echo "<p class='msg'>" . htmlspecialchars($msg) . "</p>"; ?>

      <?php if (!$user['has_voted']): ?>
          <form method="POST" class="candidates-form">
              <?php while ($row = mysqli_fetch_assoc($candidates)): ?>
                  <label class="candidate-vote">
                      <input type="radio" name="candidate" value="<?php echo $row['id']; ?>" required>
                      <?php if($row['img_url']): ?>
                          <img src="<?php echo htmlspecialchars($row['img_url']); ?>" class="candidate-img">
                      <?php else: ?>
                          <div class="candidate-img placeholder"></div>
                      <?php endif; ?>
                      <span><?php echo htmlspecialchars($row['name']); ?></span>
                  </label>
              <?php endwhile; ?>
              <button type="submit" class="btn">Submit Vote</button>
          </form>
      <?php endif; ?>
    </div>
  </div>
</body>

</html>
