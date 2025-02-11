<?php

class Solution {

    function numberOfPairs($nums1, $nums2, $k) {
        $number = 0;
        for ($i = 0; $i < count($nums1); $i++) {
            for ($j = 0; $j < count($nums2); $j++) {
                if ($nums1[$i] % ($nums2[$j] * $k) == 0) {
                    $number++;
                }
            }
        }
        return $number;
    }
}
$nums1 = [1, 3, 4];
$nums2 = [1, 3, 4];
$k = 1;

$solution = new Solution();
$result = $solution->numberOfPairs($nums1, $nums2, $k);

echo "Natija: " . $result . PHP_EOL;

?>
