<?php
$a = 100;
$b = 205;
$c = 15000;

$max = ($a > $b) ? (($a > $c) ? $a : $c) : (($b > $c) ? $b : $c);

echo "The maximum of $a, $b, and $c is $max";




echo"<h2>Using if..then_statements</h2>";


$num1 = 80;
$num2 = 65;
$num3 = 15;

if ($num1 > $num2 && $num1 > $num3) {
    $max = $num1;
} elseif ($num2 > $num1 && $num2 > $num3) {
    $max = $num2;
} else {
    $max = $num3;
}

echo "The maximum of $num1, $num2, and $num3 is $max";

?>
