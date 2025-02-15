<?php 
class Solution {

    /**
     * @param Integer[] $arr
     * @return Integer
     */
    function sumOddLengthSubarrays($arr) {
    $n = count($arr);
    $sum = 0;

    for ($i = 0; $i < $n; $i++) {
        $totalSubarrays = ($i + 1) * ($n - $i);
        $oddCount = intdiv($totalSubarrays + 1, 2); 
        $sum += $oddCount * $arr[$i]; 
    }

    return $sum;
    }
}
?>
