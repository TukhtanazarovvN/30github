<?php 
class Solution {

    /**
     * @param Integer[] $encoded
     * @param Integer $first
     * @return Integer[]
     */
    function decode($encoded, $first) {
        $massiv = [$first];
        foreach ($encoded as $num){
          $massiv[] = end($massiv)^ $num;  
        }
        return $massiv;
    }
}
?>
