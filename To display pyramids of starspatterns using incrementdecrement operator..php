<?php
echo "<pre>";
for($i=1;$i<=5;$i++)
{
    for($j=1;$j<=5-$i;$j++)
        {
            echo " ";
        }
    for($j=1;$j<=$i*2-1;$j++)
    {
        echo "*";
    }
    echo "<br>";
}
echo "</pre>";
?>