<?php
/*
$str = "hello & welcome to simplilearn";
$num = 5;
$float = 7.6;

echo "<h1>" , $str , "<h1>";
echo "<h1>" , $num , "<h2>";
echo "<h3>" , $float ,"<h3>";

$laptop_brand = array("hp","dell","mac","asus","samsung","lenovo");
echo var_dump($laptop_brand[1]);

define("laptops","mac and dell");
echo laptops;

$var = 4;

if($var % 2 == 0 && $var % 3 == 0) {
    echo "divisible by both";
}

elseif ($var % 2 == 0) {
    echo "divisible by 2";
}
elseif ($var % 3 == 0) {
    echo "divisible by 3";
}
*/

$level = 3;
switch ($level) {
    case 1:
        echo"you at easy level";
    break;
    case 2:
        echo"you at mid level";
    break;
    case 3:
        echo"you at hard level";
    break;
    default:
        echo "invalid";
}
?>