
<?php
// for loop only show 1 to 10
for ($i = 1; $i <= 10; $i++) {
    echo $i;
    echo PHP_EOL;
}
//print 1 to 10 and 10 to 1;
for ($i = 1; $i <= 10; $i++) {
    echo $i . ": " . (11 - $i);
    echo PHP_EOL;
}
// another ways print 1 to 10 and 10 to 1;
for ($i = 10, $j = 1; $i > 0; $i -= 1, $j++) {
    echo $i . ": " . $j;
    echo PHP_EOL;
}
// 1 to 100 number show only visible 7 
for ($i = 0; $i <= 100; $i += 7) {
    echo $i . "\n";
}
// 1 to 100 number show visible 7 and 11
for ($i = 0; $i <= 100; $i++) {
    if ($i % 7 == 0)  echo $i . "\n";
    if ($i % 11 == 0)  echo $i . "\n";
}
//another ways 1 to 100 number show visible 7 and 11
for ($i = 0; $i <= 100; $i++) {
    // if($i%7 == 0)  echo $i."\n";
    // if($i%11 == 0)  echo $i."\n";
    echo  $i % 7 == 0 ? $i . "\n" : "";
    echo  $i % 11 == 0 ? $i . "\n" : "";
}
