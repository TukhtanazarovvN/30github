<?php
class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function minElement($nums) {
          return min(array_map(fn($n) => array_sum(str_split($n)), $nums));
    }
}
?>
