<?php
$array = array(41,3,35,17,28);
echo "The array is <br>";
echo "<pre>";
print_r($array);
echo "</pre>";
$sum = 0;
foreach($array as $val)
{
    $sum+=$val;
}
echo "Total sum of all elements of the array is : ".$sum;
?>