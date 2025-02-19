<?php 
class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function findNumbers($nums) {
        $m = 0;
      for($i = 0; $i < count($nums); $i ++){
        if(strlen($nums[$i])%2 == 0){$m++;}
        
      }  
      return $m;
    }
}
?>
