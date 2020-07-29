<?php

$arr = [1, 2 ,3, 4, 5, 6, 7, 8, 9, 10, 12, 13, 14, 15, 16];

function missingNumber(array $arr): int
{
    $controlSum = $arr[0] + $arr[count($arr) - 1];
    $i = 1;
    while (true) {
        $firstNum = $arr[$i];
        $secondNum = $arr[count($arr) - 1 - $i];
        $sum = $firstNum + $secondNum;
        if ($firstNum > $secondNum) return $firstNum - 1;
        if ($sum !== $controlSum) {
            if (($firstNum - $arr[$i - 1]) !== 1) return $firstNum - 1;
            if (($arr[count($arr) - $i] - $secondNum) !== 1) return $arr[count($arr) - $i] - 1;
        }
        $i++;
    }
    return 0;
}

print_r($arr);
echo " => " . missingNumber($arr);
