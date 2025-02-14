<?php class Solution {

    /**
     * @param Integer $num
     * @return Integer
     */
    function maximum69Number ($num) {
       $num = (string)$num;
       for($i = 0; $i < strlen($num); $i ++){
        if($num[$i] == 6) {$num[$i] = 9;$final .= substr($num,$i);
        break;
        }
        $final .= $num[$i];
       } 
       return $final;
    }
}
?>
