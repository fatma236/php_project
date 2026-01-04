<?php

$file = 'data/students.txt';

if (file_exists($file)) {
  $handle = fopen($file, 'r');
  $contents = fread($handle, filesize($file));
  fclose($handle);
  echo nl2br($contents);
} else {
  $handle = fopen($file, 'w');
  $contents = "Fatima\nAli\nSara\nKhalid";
  fwrite($handle, $contents);
  fclose($handle);
  echo "File created with initial data.";
}

?>
