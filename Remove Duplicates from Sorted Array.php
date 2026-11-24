<?php
function removeDuplicates(&$nums) {
    $length = count($nums);
    if ($length === 0)
        return 0;
    if ($length === 1)
        return 1;
    $slow = 0;
    for($fast = 1; $fast < $length; $fast++){
        if ($nums[$fast] !== $nums[$slow]){
            $slow++;
            $nums[$slow] = $nums[$fast];
        }
    }
    $slow++;
    for($i = $slow; $i < $length; $i++)
        $nums[$i] = null;
    return $slow;
}
$nums = [0, 0, 1, 1, 1, 2, 2, 3, 3, 4];
print(removeDuplicates($nums));
print_r($nums);