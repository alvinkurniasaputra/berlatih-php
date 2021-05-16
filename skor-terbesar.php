<?php

$skor = [
    ["nama" => "Bobby","kelas" => "Laravel","nilai" => 78],
    ["nama" => "Regi","kelas" => "React Native","nilai" => 86],
    ["nama" => "Aghnat","kelas" => "Laravel","nilai" => 90],
    ["nama" => "Indra","kelas" => "React JS","nilai" => 85],
    ["nama" => "Yoga","kelas" => "React Native","nilai" => 77],
];

function bigScore($arr)
{
    $data = [];
    foreach( $arr as $a ){
        if( array_key_exists($a['kelas'],$data) ){
            if( $data[$a['kelas']][0]['nilai'] < $a['nilai']){
                $data[$a['kelas']] = [$a];
            }
        }else{
            $data[$a['kelas']] = [$a];
        }
    }
    print_r($data);
}
bigScore($skor);

?>