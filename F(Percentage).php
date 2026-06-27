<?php

function calculatePercentage($s1, $s2, $s3, $s4, $s5)
{
    $total = $s1 + $s2 + $s3 + $s4 + $s5;
    $percentage = $total / 5;

    echo "Total Marks: " . $total . "<br>";

    return $percentage;
}

$result = calculatePercentage(80, 75, 90, 85, 70);

echo "Percentage: " . $result . "%";

?>
