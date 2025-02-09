<?php

function sumOfTheDigitsOfHarshadNumber($x) {
    $strNum = (string) $x;  
    $sum = 0;

    for ($i = 0; $i < strlen($strNum); $i++) {
        $sum += (int)$strNum[$i];
    }   

    return ($x % $sum == 0) ? $sum : -1;
}

$testValues = [18, 19, 21, 12, 11, 10];

foreach ($testValues as $num) {
    echo "Input: $num -> Output: " . sumOfTheDigitsOfHarshadNumber($num) . "\n";
}

?>
