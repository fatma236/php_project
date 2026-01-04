<?php

$user = 'Fatima';

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Server Info</title>
</head>
<body>

  <h2>Server Information</h2>

  <ul>
    <li>Host Name: <?php echo $_SERVER['HTTP_HOST']; ?></li>
    <li>Server Name: <?php echo $_SERVER['SERVER_NAME']; ?></li>
    <li>Server Port: <?php echo $_SERVER['SERVER_PORT']; ?></li>
    <li>File Path: <?php echo $_SERVER['SCRIPT_FILENAME']; ?></li>
    <li>Request Method: <?php echo $_SERVER['REQUEST_METHOD']; ?></li>
    <li>Request URI: <?php echo $_SERVER['REQUEST_URI']; ?></li>
    <li>Browser: <?php echo $_SERVER['HTTP_USER_AGENT']; ?></li>
    <li>Client IP: <?php echo $_SERVER['REMOTE_ADDR']; ?></li>
  </ul>

</body>
</html>
