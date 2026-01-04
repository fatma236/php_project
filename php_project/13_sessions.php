<?php

session_start();

if (isset($_POST['login'])) {
  $user = filter_input(INPUT_POST, 'user', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
  $pass = $_POST['pass'];

  if ($user === 'Fatima' && $pass === '1234') {
    $_SESSION['user'] = $user;
    header('Location: dashboard.php');
    exit;
  } else {
    echo 'Invalid credentials';
  }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Session</title>
</head>
<body>

<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
  <div>
    <label>User:</label>
    <input type="text" name="user">
  </div>
  <br>
  <div>
    <label>Password:</label>
    <input type="password" name="pass">
  </div>
  <br>
  <input type="submit" name="login" value="Login">
</form>

</body>
</html>
