<?php
class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer[]
     */
    function separateDigits($nums) {
        $string = "";
      for($i = 0; $i < count($nums); $i++){
        $string .= $nums[$i];
      }  
      $array = [];
      for($j = 0 ; $j < strlen($string); $j++){
        $array[] .= $string[$j]; 
      }
      return $array;
    }
}
?>
