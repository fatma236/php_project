<?php

setcookie('user', 'Fatima', time() + 86400 * 7);

if (isset($_COOKIE['user'])) {
  echo 'Welcome back, ' . $_COOKIE['user'];
}

setcookie('user', '', time() - 3600);

?>
