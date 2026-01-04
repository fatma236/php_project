<?php

$items = ['pen', 'book', 'notebook'];

echo count($items);

var_dump(in_array('pen', $items));

$items[] = 'eraser';
array_push($items, 'marker', 'ruler');
array_unshift($items, 'bag');

array_pop($items);
array_shift($items);
unset($items[1]);

$grouped = array_chunk($items, 2);
print_r($grouped);

$x = [5, 10, 15];
$y = [20, 25, 30];
$z = array_merge($x, $y);
print_r($z);

$z2 = [...$x, ...$y];
print_r($z2);

$codes = ['A', 'B', 'C'];
$names = ['Apple', 'Banana', 'Cherry'];
$combined = array_combine($codes, $names);
print_r($combined);

$keys = array_keys($combined);
print_r($keys);

$values = array_values($combined);
print_r($values);

$swapped = array_flip($combined);
print_r($swapped);

$list = range(1, 12);
print_r($list);

$labels = array_map(fn($n) => "Item $n", $list);
print_r($labels);

$filtered = array_filter($list, fn($n) => $n % 2 === 0);
print_r($filtered);

$total = array_reduce($list, fn($carry, $n) => $carry + $n);
echo $total;

?>
