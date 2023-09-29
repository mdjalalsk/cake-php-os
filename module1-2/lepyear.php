<?php
/*is visable by 4?
is visable by 100?
is visable by 400?*/

// $year = 2018;
// if ($year % 4 == 0 && $year % 100 == 0 && $year % 400 == 0) {
//     echo "{$year} is leap year";
// } else if($year % 4 == 0 && $year % 100 == 0) {
//     echo "{$year} is leap year";
// } else if ($year % 4 == 0) {
//     echo "{$year} is leap year";
// }else{
//     echo "{$year} is ont leap year";
// }
$year = 2018;

if (($year % 4 == 0 && $year % 100 != 0) || ($year % 400 == 0)) {
    echo "{$year} is a leap year";
} else {
    echo "{$year} is not a leap year";
}

