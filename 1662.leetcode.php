<?php  
class Solution {

    /**
     * @param String[] $word1
     * @param String[] $word2
     * @return Boolean
     */
    function arrayStringsAreEqual($word1, $word2) {
    
      for($i = 0; $i < count($word1); $i ++ ){
        $string1 .= $word1[$i];
      }  
       for($j = 0; $j < count($word2); $j ++ ){
        $string2 .= $word2[$j];
      }  
      if($string1 == $string2){return true;}
      else return false;
    }
}
?>
