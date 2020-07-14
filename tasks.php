<?php
 const NUM = 600851475143;
 $result = NUM;
 $divider = 1;
 $flag = true;

 $start = microtime(true);
 while  ($flag) {
     for ($i = $divider + 1; $i < $result; $i++) {
         if ($i == $result - 1) {
             $flag = false;
             break;
         }
         if ($result % $i == 0) {
             $simple = true;
             for ($j = 2; $j < $i; $j++) {
                 if ($i % $j == 0) $simple = false;
             }
             if ($simple) {
                 $divider = $i;
                 $result = $result / $divider;
             }

             echo ( $divider . '<br>');
             echo ($result . '<br>');
         }
     }
 }

 echo ("Самый большой делитель: " . $result . '<br>');
 echo "Найдено за ";
 echo  microtime(true) - $start . " сек";
