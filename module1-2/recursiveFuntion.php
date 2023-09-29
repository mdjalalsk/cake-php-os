<?php
//recursive function
function printNumber($counter,$end,$increment=1){
    if($counter>$end){
        return;
    }
    echo $counter."\n";
    $counter += $increment;
    printNumber($counter,$end,$increment);
}
printNumber(10,50,5);