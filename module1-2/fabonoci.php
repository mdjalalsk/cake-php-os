<?php
$veryOld=0;
$old=1;
$new=1;
for($i=0;$i<10;$i++) {
    echo $veryOld."\n";
    $old=$new;
    $new=$old+$veryOld;
    $veryOld=$old;
}

function fibonacci($n) {
    $veryOld=0;
    $old=1;
    $new=1;
    
    for ($i = 0; $i < $n; $i++) {
        echo $veryOld."\n";
        $old=$new;
        $new=$old+$veryOld;
        $veryOld=$old;
    }
}

fibonacci(10);
?>

