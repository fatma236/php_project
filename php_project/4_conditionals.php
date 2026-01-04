<?php

$score = 85;
$balance = 1200;

if ($score >= 60) {
  echo '1 Passed<br>';
}

if ($score >= 60) {
  echo '2 Passed<br>';
} else {
  echo '2 Failed<br>';
}

if ($score >= 90) {
  echo '3 Excellent<br>';
} elseif ($score >= 60) {
  echo '3 Passed<br>';
} else {
  echo '3 Failed<br>';
}

if ($score >= 60) echo '4 Passed<br>';
else echo '4 Failed<br>';

echo $score >= 60 ? '5 Passed<br>' : '5 Failed<br>';

$resultScore = $score ?: 50;
echo $resultScore;
echo '<br>';

$userName = $name ?? 'Guest';
echo $userName;
echo '<br>';

$accountType = 'premium';

switch ($accountType) {
  case 'premium':
    echo 'Premium Account<br>';
    break;
  case 'basic':
    echo 'Basic Account<br>';
    break;
  case 'trial':
    echo 'Trial Account<br>';
    break;
  default:
    echo 'Unknown Account<br>';
}

var_dump(10 == 10);
echo '<br>';

var_dump(10 === '10');
echo '<br>';

var_dump(10 != 5);
echo '<br>';

var_dump(10 !== '10');
echo '<br>';

var_dump(10 > 7);
echo '<br>';

var_dump(10 < 7);
echo '<br>';

var_dump(10 >= 10);
echo '<br>';

var_dump(10 <= 5);
echo '<br>';

var_dump(10 <=> 7);
echo '<br>';

var_dump(10 <=> 10);
echo '<br>';

var_dump(10 <=> 15);
echo '<br>';

var_dump($score >= 60 && $balance >= 1000);
echo '<br>';

var_dump($score >= 60 || $balance >= 2000);
echo '<br>';

var_dump(!($score >= 60));
echo '<br>';

if ($score >= 60 && $balance >= 1000) {
  echo 'Eligible for reward<br>';
}

if ($score >= 60 || $balance >= 1000) {
  echo 'Partial eligibility<br>';
}

if (!($score >= 60)) {
  echo 'Not eligible<br>';
}

$a = true && false;
$b = true || false;

var_dump($a);
echo '<br>';
var_dump($b);
echo '<br>';

$c = (true && false) || true;
var_dump($c);
echo '<br>';

$age = 28;
$income = 1500;
$rating = 4.2;

if ($age >= 21 && $income >= 1500 && $rating >= 4) {
  echo 'Approved<br>';
} elseif ($age >= 21 && $income >= 1500) {
  echo 'Approved with conditions<br>';
} elseif ($age >= 21) {
  echo 'Need more requirements<br>';
} else {
  echo 'Rejected<br>';
}

$age = 19;
$hasId = true;
$hasTicket = true;

if ($age >= 18) {
  if ($hasId) {
    if ($hasTicket) {
      echo 'Entry allowed<br>';
    } else {
      echo 'Ticket required<br>';
    }
  } else {
    echo 'ID required<br>';
  }
} else {
  echo 'Entry not allowed<br>';
}

$level = 'intermediate';

switch ($level) {
  case 'advanced':
    echo 'Advanced Level<br>';
    break;
  case 'intermediate':
    echo 'Intermediate Level<br>';
    break;
  case 'beginner':
    echo 'Beginner Level<br>';
    break;
  default:
    echo 'Unknown Level<br>';
}

$state = 'open';

$text = match ($state) {
  'open' => 'Order is open',
  'closed' => 'Order is closed',
  'pending' => 'Order is pending',
  default => 'Invalid state'
};

echo $text;
echo '<br>';

?>
