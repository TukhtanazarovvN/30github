<?php
class Solution {
    /**
     * @param String[] $s
     * @return Void
     */
    function reverseString(&$s) {
        $left = 0;
        $right = count($s) - 1;
        
        while ($left < $right) {
            [$s[$left], $s[$right]] = [$s[$right], $s[$left]];
            $left++;
            $right--;
        }
    }
}
?>