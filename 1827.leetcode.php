<?php
function minOperations($nums) {
    $operations = 0;
    
    for ($i = 1; $i < count($nums); $i++) {
        if ($nums[$i] <= $nums[$i - 1]) {
            $diff = $nums[$i - 1] - $nums[$i] + 1;
            $nums[$i] += $diff;
            $operations += $diff;
        }
    }
    
    return $operations;
}
