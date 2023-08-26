<?php


$a = [1];
$b = [2,3];
$param = [...$a, ...$b, 4,5,6 ];

echo "<pre>";
print_r($param);
echo "</pre>";

// Spread operator array in PHP
// Array
// (
//     [0] => 1
//     [1] => 2
//     [2] => 3
//     [3] => 4
//     [4] => 5
//     [5] => 6
// )

?>