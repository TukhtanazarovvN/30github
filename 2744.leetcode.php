<?php
class Solution {

    /**
     * @param String[] $words
     * @return Integer
     */
    function maximumNumberOfStringPairs($words) {
        $integer = 0;
        $seen = [];

        foreach ($words as $word) {
            $reversed = strrev($word);
            if (in_array($reversed, $seen)) {
                $integer++;
            } else {
                $seen[] = $word;
            }
        }

        return $integer;
    }
}

?>
