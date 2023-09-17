<?php
function isEven($n){//parameter 
    if($n %2==0){
        return true ;
    }
    // else{
    //     return false; 
    // }
    return false; 
    
}

//function with default parameter
function serve($foodQuantity="1 cup",$foodType="tea "){
    echo "$foodQuantity $foodType is serve \n";
}
// function with type
// function add(int $a, int $b,int $c):int{
//     return $a + $b + $c;
// }
// $result=add(1,2,3);
// echo $result;
function add(int $a, int $b,int $c):string{
    return $a + $b + $c;
}
$result=add(1,2,3);
echo gettype($result);

