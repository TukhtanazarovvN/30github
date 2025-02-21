<?php 
class Solution {

    /**
     * @param String[] $words
     * @param String $separator
     * @return String[]
     */
    function splitWordsBySeparator($words, $separator) {      
     $result = [];
     foreach($words as $word){
        $words = explode($separator , $word);
        $result = array_merge($result,$words);
     }
      $result = array_filter($result, 'strlen');
      return $result;
    }
}
?>
