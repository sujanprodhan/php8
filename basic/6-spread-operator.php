<?php

function sumNumber( $x, $y, $z) {
    return $x + $y + $z;

}
$a = [1];
$b = [2,3];

$sum = sumNumber(...$a, ...$b, );

echo "<pre>";
print_r($sum);
echo "</pre>";
// Spread operator in PHP
// 6 

?>