<?php 

function cariMean($arr)
{
    $sum = 0;
    for ($i=0; $i < count($arr); $i++)
    {
        $sum += $arr[$i];
    }
    echo "Mean : ", (round($sum / count($arr))), "\n";
    
}

echo cariMean([1,2,3,4,5]);
echo cariMean([3,5,7,5,3]);
echo cariMean([6,5,4,7,3]);
echo cariMean([1,3,3]);
echo cariMean([7,7,7,7,7]);
echo cariMean([5,7,7,4,3]);
echo cariMean([1,1,7,4,1]);

?>