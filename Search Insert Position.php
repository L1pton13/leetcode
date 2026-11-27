<?php
function searchInsert($nums, $target) {
    $length = count($nums);
    $elem = 0;
    while($elem < $length){
        if ($nums[$elem] < $target){
            if ($elem === $length - 1)
                return $length;
            else
                $elem++;
        }
        elseif($nums[$elem] > $target){
            return $elem;
        }
        else
            return $elem;
    }         
}
$nums = [1, 3, 5, 6];
$target = 0;
print(searchInsert($nums, $target));