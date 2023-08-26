<?php

function addNumbers($a, $b, $c) {
    return $a + $b + $c;
}

$numbers = [1,2,3];
$result = addNumbers(...$numbers);

echo "<pre>";
print_r($result);
echo "</pre>";

// Spread operator array in PHP
// 6

?>