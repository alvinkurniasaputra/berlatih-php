<?php

function palindrome($num){
    $p=$num;
    $revnum = 0;
    while ($num != 0)
    {
        $revnum = $revnum * 10 + $num % 10;
        $num = (int)($num / 10); 
    }
    
    if($revnum==$p)
    {
        // echo $p," is Palindrome number<br><br>";
        echo $p, "\n";
        if ($p < 10)
        {
            // echo $p+1, " is Palindrome number too.<br><br>";
            echo $p+1, "\n";
        }
    }
    else
    {
        // echo $p," is not a Palindrome number.<br>";
        palindrome($p+1);
    }
}

palindrome(8);
palindrome(10);
palindrome(117);
palindrome(175);
palindrome(1000);

?>