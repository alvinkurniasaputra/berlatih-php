<?php
function deretGeo($arr){
    $count = 0;
    for ($i=0, $j=1; $j < count($arr); $i++,$j++)
    {
        if ($arr[$j] % $arr[$i] == 0)
        {
            $count +=1;
        }
    }
    
    if ($count == count($arr)-1)
    {
        echo "True\n";
    }
    else{
        echo "False\n";
    }
}

deretGeo([1, 3, 9, 27, 81]);
deretGeo([2, 4, 8, 16, 32]);
deretGeo([2, 4, 6, 8]);
deretGeo([2, 6, 18, 54]);
deretGeo([1, 2, 3, 4, 7, 9]);
?>