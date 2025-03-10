<?php 
class Solution {

    /**
     * @param Integer $num
     * @return Integer
     */
    function addDigits($num) {
    // Keep adding digits until num is a single digit
    while ($num >= 10) {
        $num = array_sum(str_split($num)); // Split number into digits and sum them
    }
    return $num;
    }
}
?>
