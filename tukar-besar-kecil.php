<?php

function swap($str){
    $array = str_split($str);
    $i = 0;
    foreach($array as $arr){
        if ($array[$i] == strtolower($arr)){
            $array[$i] = strtoupper($arr);
        }

        else if ($array[$i] == strtoupper($arr)){
            $array[$i] = strtolower($arr);
        }
        $i++;
    }
    echo implode($array). "\n";
}

swap('Hello World');
swap('I aM aLAY');
swap('My Name is Bond!!');
swap('IT sHOULD bE me');
swap('001-A-3-5TrdYW');

?>