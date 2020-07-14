<?php
function checkBraces($input){
    $braces = str_split($input);
    $map = [']' => '[', ')' => '(', '}' => '{'];
    $closing = array_keys($map);

    $stack = [];

    foreach($braces as $b){
        if(!in_array($b, $closing)){
            $stack[] = $b;
            continue;
        }
        if(end($stack) != $map[$b]) return false;
        array_pop($stack);
    }
    return count($stack)  == 0;
}

 ?>
