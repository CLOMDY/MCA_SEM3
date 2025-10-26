<?php
session_start();
require_once('connection.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = mysqli_real_escape_string($connect, trim($_POST['email']));
    $password = $_POST['password'];

    $result = mysqli_query($connect, "SELECT * FROM users WHERE email='$email' LIMIT 1");
    if ($result && mysqli_num_rows($result) > 0) {
        $user = mysqli_fetch_assoc($result);

        if ((int)$user['is_admin'] === 1) {
            if ($password === $user['password']) {
                $_SESSION['user_id'] = $user['id'];
                $_SESSION['user_name'] = $user['name'];
                $_SESSION['is_admin'] = 1;
                header("Location: admin.php");
                exit();
            } else {
                $msg = "Invalid email or password.";
            }
        } else {
            if (password_verify($password, $user['password'])) {
                $_SESSION['user_id'] = $user['id'];
                $_SESSION['user_name'] = $user['name'];
                $_SESSION['is_admin'] = 0;
                header("Location: vote.php");
                exit();
            } else {
                $msg = "Invalid email or password.";
            }
        }
    } else {
        $msg = "Invalid email or password.";
    }
}
?>
<!DOCTYPE html>
<html>

<head>
    <title>Login</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
  <div class="container">
    <div class="card">
      <h2>Login to Vote</h2>
      <?php if (isset($msg)) echo "<p class='msg'>" . htmlspecialchars($msg) . "</p>"; ?>
      <form method="POST">
          <input type="email" name="email" placeholder="Email" required>
          <input type="password" name="password" placeholder="Password" required>
          <button type="submit">Login</button>
      </form>
    </div>
  </div>
</body>

</html>
