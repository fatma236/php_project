<?php

function showMessage()
{
  echo 'Welcome to the system';
}

showMessage();

function greetUser($name)
{
  echo "Hello {$name}";
}

greetUser('Fatima');

function calculateTotal($price, $tax)
{
  return $price + $tax;
}

$total = calculateTotal(100, 5);
echo $total;

function discount($amount, $discount = 10)
{
  return $amount - $discount;
}

echo discount(100);
echo discount(100, 20);

$sumNumbers = function ($a, $b) {
  return $a + $b;
};

echo $sumNumbers(3, 7);

$divide = fn($a, $b) => $a / $b;

echo $divide(20, 4);

?>
