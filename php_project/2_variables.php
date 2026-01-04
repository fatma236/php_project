<?php

$username = 'Fatima';
$username2 = "Fatima";

$year = 2026;
$points = -10;

$rate = 4.5;
$total = 150.75;

$isAdmin = true;
$isGuest = false;

$score = null;

$subjects = array('Math', 'Science', 'History');
$subjects2 = ['English', 'Arabic', 'Physics'];

$student = new stdClass();
$student->name = 'Fatima';
$student->email = 'fatima@email.com';
$student->level = 3;

$file = fopen('data.txt', 'r');

$firstName = 'Fatima';
$lastName = 'Al-Harthy';
$isActive = true;

define('APP_NAME', 'Student Portal');
define('VERSION', 1.0);

const MODE = 'production';

echo APP_NAME;
echo '<br>';
echo VERSION;
echo '<br>';
echo MODE;
echo '<br>';

$fullName = $firstName . ' ' . $lastName;
echo $fullName;
echo '<br>';

$fullName2 = "$firstName $lastName";
echo $fullName2;
echo '<br>';

$fullName3 = "{$firstName} {$lastName}";
echo $fullName3;
echo '<br>';

$fullName4 = $firstName;
$fullName4 .= ' ';
$fullName4 .= $lastName;
echo $fullName4;
echo '<br>';

$text1 = "Welcome to \"PHP\" course";
echo $text1;
echo '<br>';

$text2 = 'Welcome to "PHP" course';
echo $text2;
echo '<br>';

$text3 = "Welcome to 'PHP' course";
echo $text3;
echo '<br>';

$text4 = 'Welcome to \'PHP\' course';
echo $text4;
echo '<br>';

var_dump(isset($firstName));
echo '<br>';

var_dump(empty($score));
echo '<br>';

echo gettype($year);
echo '<br>';

var_dump(is_string($firstName));
echo '<br>';

var_dump(is_int($year));
echo '<br>';

var_dump(is_bool($isAdmin));
echo '<br>';

var_dump(is_array($subjects));
echo '<br>';

var_dump(is_object($student));
echo '<br>';

var_dump(is_null($score));
echo '<br>';

$appStatus = 'Running';

function showStatus() {
  $message = 'Local Function';
  echo $message;
  echo '<br>';

  global $appStatus;
  echo $appStatus;
  echo '<br>';
}

showStatus();

function showStatus2() {
  echo $GLOBALS['appStatus'];
  echo '<br>';
}

showStatus2();

?>
