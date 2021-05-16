<?php

function big($num)
{
    //cari angka terbesar
    $bigNum = substr($num,0,2);
    for($i=0 ; $i<= strlen($num)-2; $i++){
        //ambil dua angka dalam looping dan jadikan pasangan
        $couple = substr($num,$i,2);
        //cek kalo pasangan angka > angka terbesar
        if ($couple > $bigNum)
            $bigNum = $couple;
    }
    echo $bigNum,"\n";
}

big(641573);
big(12783456);
big(910233);
big(71856421);
big(79918293);

?>