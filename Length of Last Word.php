<?php
function lengthOfLastWord($s) {
    $s = trim($s, " \f\n\r\t\v\x00");
    $length = strlen($s);
    while(strpos($s, " ") !== false){
        $position = strpos($s, " ");
        $s = substr($s, $position + 1, $length - $position);
        print($s."\n");
    }
    return strlen($s);
}
$s = "   fly me   to   the moon  ";
print(lengthOfLastWord($s));