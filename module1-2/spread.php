<?php
function sum(...$num){
    echo array_sum($num);
}
sum(1,2,3,4,6);

//anonomous function
// (function(){
//     $a=5;
//     $b=6;
//   echo "\n".$a+$b ;
// })();

//right way to anonomous function 
$result=function(){
    $a=5;
    $b=6;
  echo "\n".$a+$b ;
};
$result();
//more shortcut for array functions
$add=fn($a,$b)=>$a+$b;
echo "\n".$add(50,60);