<?php

function trim_text($text, $length = 172){

    $str = '';

    if(strlen($text) > $length){
        $str =  substr($text, 0, $length);
        $str .= '...';
    }

    return $str;
}

