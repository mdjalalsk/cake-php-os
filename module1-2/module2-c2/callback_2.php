<?php
$num=[1,2,3,4,5,6,7,8];
function square($n){
    return $n*$n;
}
function cube($n){
    return $n*$n*$n;
}
$result =array_map("square",$num);
$res =array_map("cube",$num);
print_r($result);
print_r($res);