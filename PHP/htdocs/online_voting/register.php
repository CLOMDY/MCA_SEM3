<?php
require_once('connection.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $name = mysqli_real_escape_string($connect, $_POST['name']);
  $email = mysqli_real_escape_string($connect, $_POST['email']);
  $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

  $check = mysqli_query($connect, "SELECT * FROM users WHERE email='$email'");
  if (mysqli_num_rows($check) > 0) {
    $msg = "Email already registered!";
  } else {
    mysqli_query($connect, "INSERT INTO users (name, email, password) VALUES ('$name', '$email', '$password')");
    $msg = "Registration successful! <a href='login.php'>Login</a> now.";
  }
}
?>
<!DOCTYPE html>
<html>

<head>
  <title>Register</title>
  <link rel="stylesheet" href="styles.css">
</head>

<body>
  <div class="container">
    <div class="card">
      <h2>Register as a Voter</h2>
      <?php if (isset($msg)) echo "<p class='msg'>$msg</p>"; ?>
      <form method="POST">
        <input type="text" name="name" placeholder="Full Name" required>
        <input type="email" name="email" placeholder="Email" required>
        <input type="password" name="password" placeholder="Password" required>
        <button type="submit">Register</button>
      </form>
    </div>
  </div>
</body>

</html>