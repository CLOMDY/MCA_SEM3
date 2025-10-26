<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
  <title>Online Voting System</title>
  <link rel="stylesheet" href="styles.css">
</head>
<body>
  <header>
    <h1>🗳️ Online Voting System</h1>
    <nav>
      <a href="index.php">Home</a>
      <?php if (!isset($_SESSION['user_id'])): ?>
        <a href="register.php">Register</a>
        <a href="login.php">Login</a>
      <?php else: ?>
        <a href="vote.php">Vote</a>
        <a href="results.php">Results</a>
        <a href="logout.php">Logout</a>
      <?php endif; ?>
    </nav>
  </header>

  <main>
    <h2>Welcome to the Online Voting Portal</h2>
    <p>Register, log in, and cast your vote!</p>
  </main>
</body>
</html>
