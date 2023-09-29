<?php
//single return type
function sum($a, $b):int{
   
    $result= ($a+$b);
    return $result;
}
echo sum(10,13)."\n";

//single and nullable return type
function mul($a, $b):?int{//:int|null
   
    $result= ($a*$b);
    return $result;
}
echo mul(10,10)."\n";
//multiple return types
function avg($a, $b):int|float{
   
    $result= ($a+$b)/2;
    return $result;
}
echo avg(10,13)."\n";