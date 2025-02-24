<?php
class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function maximumCount($nums) {
         $max = $min = 0;
     for($i = 0 ;$i < count($nums); $i ++) {
        if($nums[$i] > 0 ){$min++;}
        elseif($nums[$i] == 0){continue;}
        else $max++;
     }
     return max($max,$min);
    }
}
?>
