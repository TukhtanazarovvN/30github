<?php 
class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function maxProduct($nums) {
        $one=$nums[0];
        $idx1=0;
        for($i=1;$i<sizeof($nums);$i++){
            if($one<$nums[$i]){
                $one=$nums[$i];
                $idx1=$i;
            }
        }
        $nums[$idx1]=0;
        return ($one-1)*(max($nums)-1);
    }
}
?>
