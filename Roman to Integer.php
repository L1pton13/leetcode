class Solution {

    /**
     * @param String $s
     * @return Integer
     */
    function romanToInt($s) {
        $length = strlen($s);
        $i = 0;
        $result = 0;
        while ($i < $length){
            switch($s[$i]){
                case "M":
                    $result += 1000;
                    break;
                case "D":
                    $result += 500;
                    break;
                case "C":
                    $j = 1 + $i;
                    if ($j != $length and $s[$j] == "M"){
                        $result += 900;
                        $i++;
                    }
                    elseif ($j != $length and $s[$j] == "D"){
                        $result += 400;
                        $i++;
                    }
                    else 
                        $result += 100;
                    break;
                case "L":
                    $result += 50;
                    break;
                case "X":
                    $j = 1 + $i;
                    if ($j != $length and $s[$j] == "C"){
                        $result += 90;
                        $i++;
                    }
                    elseif ($j != $length and $s[$j] == "L"){
                        $result += 40;
                        $i++;
                    }
                    else 
                        $result += 10;
                    break;
                case "V":
                    $result += 5;
                    break;
                case "I":
                    $j = 1 + $i;
                    if ($j != $length and $s[$j] == "X"){
                        $result += 9;
                        $i++;
                    }
                    elseif ($j != $length and $s[$j] == "V"){
                        $result += 4;
                        $i++;
                    }
                    else 
                        $result += 1;
                    break;
                
            }
            $i++;
        }
        return $result;
    }
}