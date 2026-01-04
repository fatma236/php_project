<?php

$text = "Learning PHP";

echo strlen($text);
echo '<br>';

echo strpos($text, 'P');
echo '<br>';

echo strrpos($text, 'n');
echo '<br>';

echo strrev($text);
echo '<br>';

echo strtolower($text);
echo '<br>';

echo strtoupper($text);
echo '<br>';

echo ucwords($text);
echo '<br>';

echo str_replace('PHP', 'Programming', $text);
echo '<br>';

echo substr($text, 0, 8);
echo '<br>';

echo substr($text, 9);
echo '<br>';

if (str_starts_with($text, 'Learning')) {
  echo 'YES';
}
echo '<br>';

if (str_ends_with($text, 'PHP')) {
  echo 'YES';
}
echo '<br>';

$htmlText = '<p>PHP Course</p>';
echo htmlentities($htmlText);
echo '<br>';

printf('%s is level %d', 'PHP', 1);
echo '<br>';

printf('Price: %.2f', 19.5);
echo '<br>';

?>
