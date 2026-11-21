class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer[] $resultNums
     */
    function twoSum($nums, $target) {
       $resultNums = [];

       $length = count($nums);
       for ($i = 0; $i < $length; $i++){
            for ($j = $i+1; $j < $length; $j++){
                $sum = 0;
                $sum = $nums[$i]+$nums[$j];
                if ($sum == $target){
                    $resultNums=[$i, $j];
                    return $resultNums;
                }
            }
       } 
    }
}