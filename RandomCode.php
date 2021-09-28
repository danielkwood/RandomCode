<?php
    function RandomCode($length) {
        $str = "";
        $characters = array_merge(range('a','h'), range('j','z'), range('2','9'));
        $max = count($characters) - 1;
        for ($i = 0; $i < $length; $i++) {
            $rand = mt_rand(0, $max);
            $str .= $characters[$rand];
        }
        return $str;
    }

    // Example use - generate a randome code 6 characters in length
    echo RandomCode(6);
?>