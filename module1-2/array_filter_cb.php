<?php
$num=[1,2,3,4,5,6,7,8];
function isEven($n) {
 if($n%2==0){
     return true;
 }else{return false;}
   // return $n % 2 == 0;single line return
}

$result = array_filter($num,'isEven');
print_r($result);// print_r($result) use for only echo or show array results