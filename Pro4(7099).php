<?php
$month = date("F");
echo "Current Month: " . $month . "<br><br>";
if($month == "June")
{
    echo "Using If-Else: June";
}
else
{
    echo "Using If-Else: Other Month";
}
echo "<br><br>";
switch($month)
{
    case "June":
        echo "Using Switch: June";
        break;

    default:
        echo "Using Switch: Other Month";
}
?>