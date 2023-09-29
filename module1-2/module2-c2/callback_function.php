<?php
//call back function
function add($num1, $num2){
    echo $num1+ $num2;
}
// this process is callback function  bcz ai function er modde onno akta function passs kora hoice and call kora hoice 
function process($num1, $num2,$sum){
        $result= $sum($num1,$num2);
}
process(10,20,"add");