<?php
function longestCommonPrefix($strs) {
    $first = $strs[0];
    $letters = "";
    $firstLen = strlen($first);
    $length = count($strs);
    if ($length === 1)
        return $first;
    $compare = true;
    $num = 0; 
    while ($compare && $num < $firstLen ){
        $letters .= $first[$num];
        for ($i = 1; $i < $length; $i++){
            if (!str_starts_with($strs[$i], $letters)){
                return substr($letters, 0, -1);
            }
            else if ($i == $length-1)
                $num += 1;
        }
    } 
    return $letters;
}
