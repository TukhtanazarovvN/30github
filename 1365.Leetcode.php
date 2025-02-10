class Solution {
    /**
     * @param Integer[] $nums
     * @return Integer[]
     */
    function smallerNumbersThanCurrent($nums) {
        $n = count($nums);
        $result = [];

        for ($i = 0; $i < $n; $i++) {
            $count = 0;
            for ($j = 0; $j < $n; $j++) {
                if ($nums[$i] > $nums[$j]) {
                    $count++;
                }
            }
            $result[] = $count;
        }
        
        return $result;
    }
}
