<?php

$error_message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $username = htmlspecialchars($_POST["username"]);
  $password = htmlspecialchars($_POST["password"]);

  $username_bener = "nameless";
  $password_bener = "member";

  $admin = "admin";
  $admin_password = "admin";

  if ($username === $username_bener && $password === $password_bener) {
    header('Location: web.php');
    exit();
    } elseif ($username == $admin && $password == $admin_password) {
      header('Location: web2.html');
    } else {
      $error_message = "Username atau password salah";
    }
  }
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Login</title>
  <link rel="stylesheet" href="login.css">
</head>
<body>

<div class="login-container">
  <h2>Login</h2>
  <form action="" method="post">
    <label for="username">Username</label>
    <input type="text" id="username" name="username" required>

    <label for="password">Password</label>
    <input type="password" id="password" name="password" required>

    <button type="submit">Login</button>
    <?php if ($error_message != ""): ?>
      <p style="color: red; text-align:center;"><?= $error_message ?></p>
    <?php endif; ?>
  </form>
</div>

</body>
</html>
