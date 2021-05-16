<?php

function papan_catur($num){
    for($i=0 ; $i < $num ; $i++)
    {
        if( $i % 2 === 0 ){
            echo str_repeat("# ", $num);
        }else{
            echo str_repeat(" #", $num-1);
        }
        echo"\n";
    }
}

papan_catur(4);
papan_catur(8);
papan_catur(5);

?>