<?php

$students = ['Ali', 'Fatima', 'Sara'];
$levels = [1, 2, 3];
$subjects = ['Math', 'Physics', 'Chemistry'];
$subjects[3] = 'Biology';
$subjects[] = 'English';

$ages = ['Ali' => 20, 'Fatima' => 22, 'Sara' => 21];
$ids = [101 => 'Ali', 102 => 'Fatima', 103 => 'Sara'];

$courses = [
  ['Math', 3, 60],
  ['Physics', 4, 80],
  ['Chemistry', 3, 70],
];

echo $courses[0][1];
echo '<br>';

$user = [
  'name' => 'Fatima',
  'email' => 'fatima@email.com',
  'role' => 'Student',
];

echo $user['name'];
echo '<br>';

$user2 = [
  'name' => 'Ali',
  'email' => 'ali@email.com',
  'role' => 'Admin',
];

echo $user2['email'];
echo '<br>';

$users = [
  [
    'name' => 'Fatima',
    'email' => 'fatima@email.com',
    'role' => 'Student',
  ],
  [
    'name' => 'Ali',
    'email' => 'ali@email.com',
    'role' => 'Admin',
  ],
  [
    'name' => 'Sara',
    'email' => 'sara@email.com',
    'role' => 'Student',
  ],
];

echo $users[2]['role'];
echo '<br>';

$jsonText = '{"name":"Fatima","email":"fatima@email.com","role":"Student"}';
$obj = json_decode($jsonText);
echo $obj->email;
echo '<br>';

$data = ['name' => 'Ali', 'email' => 'ali@email.com', 'role' => 'Admin'];
$jsonData = json_encode($data);
echo $jsonData;
echo '<br>';

$colors = ['red', 'green', 'blue'];

echo count($colors);
echo '<br>';

var_dump(in_array('green', $colors));
echo '<br>';

$colors[] = 'yellow';
array_push($colors, 'black', 'white');
array_unshift($colors, 'orange');

array_pop($colors);
array_shift($colors);
unset($colors[1]);

$parts = array_chunk($colors, 2);
print_r($parts);
echo '<br>';

$x = [10, 20, 30];
$y = [40, 50, 60];
$z = array_merge($x, $y);
print_r($z);
echo '<br>';

$z2 = [...$x, ...$y];
print_r($z2);
echo '<br>';

$keysArr = ['A', 'B', 'C'];
$valuesArr = ['Apple', 'Banana', 'Cherry'];
$combined = array_combine($keysArr, $valuesArr);
print_r($combined);
echo '<br>';

$onlyKeys = array_keys($combined);
print_r($onlyKeys);
echo '<br>';

$onlyValues = array_values($combined);
print_r($onlyValues);
echo '<br>';

$reversed = array_flip($combined);
print_r($reversed);
echo '<br>';

$nums = range(1, 15);
print_r($nums);
echo '<br>';

$labels = array_map(fn($n) => "Item $n", $nums);
print_r($labels);
echo '<br>';

$smallNums = array_filter($nums, fn($n) => $n < 8);
print_r($smallNums);
echo '<br>';

$total = array_reduce($nums, fn($carry, $n) => $carry + $n);
echo $total;
echo '<br>';

?>
