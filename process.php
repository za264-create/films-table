<?php

$array = $_POST['values'];

echo "<h3>Original Array (no keys)</h3>";
print_r($array);

echo "<h3>Original Array (with keys)</h3>";
var_dump($array);


echo "<h3>Delete Two Elements</h3>";
unset($array[1]);
unset($array[3]);

print_r($array);

echo "<br><br>";

var_dump($array);


echo "<h3>Remove Gaps From Array</h3>";
$array = array_values($array);

print_r($array);

echo "<br><br>";

var_dump($array);

echo "<h3>Ascending Order</h3>";
sort($array);

print_r($array);

echo "<br><br>";

var_dump($array);

echo "<h3>Descending Order</h3>";
rsort($array);

print_r($array);

echo "<br><br>";

var_dump($array);

echo "<h3>Ascending Order Keeping Keys</h3>";
asort($array);

print_r($array);

echo "<br><br>";

var_dump($array);


echo "<h3>Sort by Keys</h3>";
ksort($array);

print_r($array);

echo "<br><br>";

var_dump($array);

?>