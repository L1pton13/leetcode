<?php
    /**
     * @param String $s
     * @return Boolean
     */
    function isValid($s) {
        $openBrackets = ["{", "[", "("];
        $closeBrackets = ["}", "]", ")"];
        $chars = str_split($s);
        $stack = new SplStack(); 
        foreach ($chars as $char){
            if (array_search($char, $openBrackets, true) !== false){ 
                $stack->push($char);
            }
            elseif (($key = array_search($char, $closeBrackets, true)) !== false){
                if (!$stack->isEmpty()){
                    if (array_search($stack->top(), $openBrackets, true) === $key){
                        $stack->pop();
                        }
                    else{
                        echo "false";
                        return false;
                    }
                }
                else{
                    echo "false";
                    return false;
                }       
            } 
        }
        if (!$stack->isEmpty()){
            echo "false";
            return false;
        }
        else{
            echo "true";
            return true;
        }
    }
    $s = "]";
    isValid($s);