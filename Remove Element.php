<?php
function removeElement(&$nums, $val) {
    $length = count($nums);
    if ($length === 0)
        return $length;
    else if($length === 1){
        if ($nums[0] === $val){
            $nums[0] = null;
            return 0;
        }
        else
            return $length;
    }
    $start = 0;
    $end = $length - 1;
    while ($start <= $end){
        if($nums[$start] === $val){
            if ($nums[$end] === $val){
                do{
                    if($start === $end){
                        $nums[$end] = null;
                        return $start;
                    }
                    $nums[$end] = null;
                    $end--;
                }while($nums[$end] === $val);
            }
            if($start === $length - 1){
                $nums[$start] = null;
            }
            else{
                $nums[$start] = $nums[$end];
                $nums[$end] = null;
                $end--;
                $start++;
            }  
        }
        else{
            $start++;
        }
    }
    return $start;
}
$nums = [5, 5, 4, 5, 5];
$val = 5;
print(removeElement($nums, $val));
print_r($nums);