<?php

function swap($s) {
  for ($i = 0; $i < strlen($s); $i++)  
  { 
      //Transform huruf jadi ASCII, terus ASCII nya ditambahin satu direturn lagi jd huruf. 
      $s[$i] = chr(ord($s[$i]) + 1); 
  } 
  echo $s,"\n";
}

swap('wow');
swap('developer');
swap('laravel');
swap('keren');
swap('semangat'); 

?>