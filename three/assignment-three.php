<?php

/*****
    1. Write a Reusable  PHP Function that can check Even & Odd Number And Return Decision
 *****/

function checkEvenOdd($num)
{
    if (is_numeric($num)) {
        if ($num % 2 == 0) {
            return true;
        } else {
            return false;
        }
    } else {
        echo "Invalid Input!!";
    }
}

$n = 101;
if (checkEvenOdd($n)) {
    echo "{$n} is an even number";
} else {
    echo "{$n} is an odd number";
}

echo "\n"; //line break


/*****
    2. 1+2+3...…….100  Write a loop to calculate the summation of the series
 *****/


$num = 100;
$sum = 0;

while ($num > 0) {
    $sum += $num;
    $num--;
}

echo "Summation of the series 1+2+3+...……+100 is {$sum}";
