class Solution {

    /**
     * @param Integer $x
     * @return Boolean
     */
    function isPalindrome($x) {
        $newX = (String)$x;
        $newY = strrev($newX);
        if ($newX == $newY)
            return true;
        else 
            return false;
    }
}