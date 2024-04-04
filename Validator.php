<?php

class Validator
{
    //pure method - tapēc static
    static public function string($data, $min = 0, $max = INF)
    {
        $data = trim($data);

        return  is_string($data)
            && strlen($data) >= $min
            && strlen($data) <= $max;
    }
    // Jauna metode - number 
    static public function number($data, $min = 0, $max = INF)
    {
        $data = trim($data);

        if (!is_int($data || strlen($data) < $min || strlen($data) > $max)) {
            return false;
        } else {
            return true;
        }
    }
}
