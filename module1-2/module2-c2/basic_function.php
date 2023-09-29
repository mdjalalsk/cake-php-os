<?php
function add($num1, $num2){
    //$num1,$num2 holo parameter 
    echo $num1 + $num2;
    echo PHP_EOL;
}
add(10,20);//20,10 holo argument 

$name="jalal";
// by value
// function change($name){
//     $name="hridoy";
//     // echo $name;
// }
// change($name);//by value
// echo($name);
function change(&$name){
        $name="hridoy";
        // echo $name;
    }
    change($name);//by reference
    echo($name);
    