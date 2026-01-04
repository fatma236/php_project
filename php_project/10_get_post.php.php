<?php

if (isset($_POST['send'])) {
  echo '<h3>Welcome ' . $_POST['fullname'] . '</h3>';
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>GET & POST</title>
</head>
<body>

  <a href="<?php echo $_SERVER['PHP_SELF']; ?>?user=Fatima">Open with GET</a>

  <br><br>

  <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
    <div>
      <label>Full Name:</label>
      <input type="text" name="fullname">
    </div>
    <br>
    <div>
      <label>Email:</label>
      <input type="email" name="email">
    </div>
    <br>
    <input type="submit" name="send" value="Send">
  </form>

</body>
</html>
