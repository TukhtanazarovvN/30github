<?php 
class Solution {

    /**
     * @param Integer $a
     * @param Integer $b
     * @return Integer
     */
    function commonFactors($a, $b) {
        $d = min($a,$b);
      for($i = 1; $i <= $d ; $i++ ){
        if($b % $i == 0  and $a % $i == 0 ){
            $m ++;
        }
      }  
       return $m;
    }
}
?>
