<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Online Voting System</title>
  <link rel="stylesheet" href="styles.css">
  <style>
    /* === Home Page Specific Styling === */
    main {
      display: flex;
      align-items: center;
      justify-content: center;
      flex-direction: column;
      text-align: center;
      min-height: 80vh;
      padding: 40px 20px;
    }

    .welcome-card {
      background: white;
      padding: 40px 50px;
      border-radius: 16px;
      box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
      max-width: 600px;
      width: 100%;
      animation: fadeInUp 0.6s ease;
    }

    .welcome-card h2 {
      font-size: 2rem;
      color: #ff5f6d;
      margin-bottom: 15px;
    }

    .welcome-card p {
      font-size: 1.1rem;
      margin-bottom: 25px;
      color: #666;
    }

    .cta-buttons {
      display: flex;
      gap: 15px;
      justify-content: center;
      flex-wrap: wrap;
    }

    .cta-buttons a {
      display: inline-block;
      padding: 12px 25px;
      background: linear-gradient(90deg, #ff5f6d, #ffc371);
      color: #fff;
      font-weight: bold;
      border-radius: 8px;
      text-decoration: none;
      transition: all 0.3s ease;
      box-shadow: 0 5px 15px rgba(255, 95, 109, 0.3);
    }

    .cta-buttons a:hover {
      background: linear-gradient(90deg, #ffc371, #ff5f6d);
      transform: translateY(-3px);
    }

    @keyframes fadeInUp {
      from {
        opacity: 0;
        transform: translateY(20px);
      }

      to {
        opacity: 1;
        transform: translateY(0);
      }
    }
  </style>
</head>

<body>
  <header>
    <h1>🗳️ Online Voting System</h1>
  </header>

  <main>
    <div class="welcome-card">
      <h2>Welcome to the Online Voting Portal</h2>
      <p>
        Participate in transparent and secure online elections.
        Create an account, log in, and cast your vote for your preferred candidate!
      </p>
      <div class="cta-buttons">
        <?php if (!isset($_SESSION['user_id'])): ?>
          <a href="register.php">Register Now</a>
          <a href="login.php">Login</a>
        <?php else: ?>
          <a href="vote.php">Go to Voting Page</a>
          <a href="results.php">View Results</a>
        <?php endif; ?>
      </div>
    </div>
  </main>
</body>

</html>