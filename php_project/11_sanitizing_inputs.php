<?php

if (isset($_POST['save'])) {
  $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
  $contact = filter_input(INPUT_POST, 'contact', FILTER_SANITIZE_EMAIL);
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Input Clean</title>
</head>
<body>

  <?php if (!empty($contact)) echo $contact; ?>

  <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
    <div>
      <label>Username:</label>
      <input type="text" name="username">
    </div>
    <br>
    <div>
      <label>Contact Email:</label>
      <input type="email" name="contact">
    </div>
    <br>
    <input type="submit" name="save" value="Save">
  </form>

</body>
</html>
