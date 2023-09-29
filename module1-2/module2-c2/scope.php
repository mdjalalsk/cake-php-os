<?php
// varibable scope 
$name="Jalal";// global variable scope/jikno jiga theke access korta parbo without inside funtion scope.
function introduction(){
      global $name;
    // amra jodi $name golabl varibel ta funtion er modd use korte chi  global key word use korte hobe upoer moto 
    // $n or $age is local scope we want access only inside this functon 
    $n="hridoy";
    $age =20;
    echo "my name is {$n}. I am {$age} years old.\n";
}
$intoduce= introduction();
// echo $age;// show error
echo($name."\n");

function increment(){
     
     static $counter=0;//static variable to kno  function /operation execution er por  ja velue pao jai ta dhore rakhe
    $counter++;
    echo $counter;
}
increment();
increment();
increment();