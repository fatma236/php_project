<?php

for ($i = 1; $i <= 5; $i++) {
  echo 'Step ' . $i . '<br>';
}

$x = 1;
while ($x <= 5) {
  echo 'Count ' . $x . '<br>';
  $x++;
}

$y = 1;
do {
  echo 'Round ' . $y . '<br>';
  $y++;
} while ($y <= 5);

$names = ['Fatima', 'Ali', 'Sara'];

foreach ($names as $name) {
  echo $name . '<br>';
}

$emails = ['Fatima' => 'fatima@mail.com', 'Ali' => 'ali@mail.com', 'Sara' => 'sara@mail.com'];

foreach ($emails as $user => $email) {
  echo $user . ' => ' . $email . '<br>';
}

$products = ['Phone', 'Laptop', 'Tablet'];

foreach ($products as $index => $product) {
  echo $index . ': ' . $product . '<br>';
}

$orders = [
  [
    'id' => 1,
    'item' => 'Phone',
    'price' => 300
  ],
  [
    'id' => 2,
    'item' => 'Laptop',
    'price' => 900
  ],
  [
    'id' => 3,
    'item' => 'Tablet',
    'price' => 400
  ]
];

foreach ($orders as $order) {
  echo '<h3>' . $order['item'] . '</h3>';
  echo '<p>Price: ' . $order['price'] . '</p>';
}

$user = new stdClass();
$user->name = 'Fatima';
$user->role = 'Admin';
$user->status = 'Active';

foreach ($user as $key => $value) {
  echo $key . ': ' . $value . '<br>';
}

for ($i = 1; $i <= 10; $i++) {
  if ($i === 6) {
    break;
  }
  echo $i . '<br>';
}

for ($i = 1; $i <= 10; $i++) {
  if ($i === 6) {
    continue;
  }
  echo $i . '<br>';
}

for ($i = 1; $i <= 3; $i++) {
  for ($j = 1; $j <= 3; $j++) {
    echo $i . ':' . $j . '<br>';
  }
}

$colors = ['red', 'green', 'blue'];
$i = 0;

while ($i < count($colors)) {
  echo $colors[$i] . '<br>';
  $i++;
}

$animals = ['cat', 'dog', 'bird'];
$i = 0;

do {
  echo $animals[$i] . '<br>';
  $i++;
} while ($i < count($animals));

$days = ['Sun', 'Mon', 'Tue'];

for ($i = 0; $i < count($days); $i++) {
  echo $days[$i] . '<br>';
}

$days = ['Sun', 'Mon', 'Tue'];

foreach ($days as $index => $day) {
  echo $index . ' - ' . $day . '<br>';
}

$nums = range(1, 5);

foreach ($nums as $num) {
  echo $num . '<br>';
}

for ($i = 0; $i <= 10; $i += 2) {
  echo $i . '<br>';
}

$nums = [1, 2, 3, 4, 5];

foreach ($nums as $num) {
  if ($num % 2 === 0) {
    echo $num . ' even<br>';
  } else {
    echo $num . ' odd<br>';
  }
}

$students = [
  ['name' => 'Fatima', 'grade' => 90],
  ['name' => 'Ali', 'grade' => 70],
  ['name' => 'Sara', 'grade' => 85]
];

foreach ($students as $student) {
  if ($student['grade'] >= 80) {
    echo $student['name'] . ' passed<br>';
  } else {
    echo $student['name'] . ' needs improvement<br>';
  }
}

$nums = [1, 2, 3, 4, 5, 6, 7, 8];

foreach ($nums as $num) {
  if ($num === 4) {
    continue;
  }
  if ($num === 7) {
    break;
  }
  echo $num . '<br>';
}

$foods = ['pizza', 'burger', 'pasta', 'salad'];

array_walk($foods, function($food) {
  echo 'Food: ' . $food . '<br>';
});

$upperFoods = array_map('strtoupper', $foods);

foreach ($upperFoods as $food) {
  echo $food . '<br>';
}

$longFoods = array_filter($foods, fn($food) => strlen($food) > 5);

foreach ($longFoods as $food) {
  echo $food . ' long name<br>';
}

?>
