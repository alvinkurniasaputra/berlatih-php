<?php 

function ar($arr){
    $beda=array();
    $count=0;
    for ($i=0,$j=1 ; $j < count($arr) ; $i++,$j++){
        
        $count = 0;
        $b = $arr[$j] - $arr[$i];
        array_push($beda, $b);
    }
    for ($i=0,$j=1 ; $j < count($beda) ; $i++,$j++){
        if ($beda[$i] == $beda[$j])
        {
            $count +=1;
        }
    }
    if ($count == count($beda) - 1)
    {
        echo "True\n";
    }
    else{
        echo "False\n";
    }
}

ar([1, 2, 3, 4, 5, 6]);
ar([2, 4, 6, 12, 24]);
ar([2, 4, 6, 8]);
ar([2, 6, 18, 54]);
ar([1, 2, 3, 4, 7, 9]);

?>