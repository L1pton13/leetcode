<?php
function strStr($haystack, $needle) {
    $position = strpos($haystack, $needle);
    if($position !== false)
        return $position;
    else
        return -1;
}
$haystack = "leetcode";
$needle = "leeto";
strStr($haystack, $needle);